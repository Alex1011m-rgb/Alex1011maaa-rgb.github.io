<?php
session_start();

// Recibir datos del formulario
$nombre_usuario = $_POST["nombre_usuario"];
$contrasena = $_POST["contrasena"];

include 'conexion.php'; // aqui colocas la direccion de conexion

// Consultar la base de datos
$sql = "SELECT id, nombre_usuario, contrasena FROM usuarios WHERE nombre_usuario=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nombre_usuario);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontró al usuario
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($contrasena, $row["contrasena"])) {

        // Iniciar sesión, establecer las variables de sesión
        $_SESSION["id"] = $row["id"];
        $_SESSION["nombre_usuario"] = $row["nombre_usuario"];

        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Contraseña incorrecta.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'El nombre de usuario no está asociado a ningún usuario registrado.'));
}

// Cerrar la conexión
$stmt->close();
$conn->close();
