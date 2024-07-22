<?php
session_start();

    // Recibir datos del formulario
    $nombre_usuario = $_POST["nombre_usuario"];
    $contrasena = $_POST["contrasena"];

    include 'conexion.php';  // aqui colocas la direccion de conexion

    // Verificar si el nombre de usuario ya está registrado
    $sql = "SELECT id FROM usuarios WHERE nombre_usuario=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre_usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // El nombre de usuario ya está en uso
        echo json_encode(array('success' => false, 'message' => 'El nombre de usuario ya está registrado.'));
    } else {
        // Insertar el nuevo usuario en la base de datos
        $hashed_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre_usuario, contrasena) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $nombre_usuario, $hashed_contrasena);

        if ($stmt->execute()) {
            // Registro exitoso
            echo json_encode(array('success' => true, 'message' => 'Registro exitoso.'));
        } else {
            // Error al registrar el usuario
            echo json_encode(array('success' => false, 'message' => 'Error al registrar el usuario.'));
        }
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
?>
