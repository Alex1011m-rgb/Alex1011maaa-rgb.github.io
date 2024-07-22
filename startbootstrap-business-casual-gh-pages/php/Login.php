<?php
require 'conexion.php';

if (isset($_POST['login'])) {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    // Preparar la consulta (ajusta el nombre de la columna si es necesario)
    $stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE User = ?");
    mysqli_stmt_bind_param($stmt, "s", $usuario);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_assoc($resultado);

        // Imprimir el array para depurar (opcional)
        var_dump($row);

        // Verificar contraseña (ajusta el nombre de la columna si es necesario)
        if (password_verify(strtolower($contrasena), strtolower($row['Password']))) {
           echo "Contraseña correcta.";
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    mysqli_stmt_close($stmt);
}
