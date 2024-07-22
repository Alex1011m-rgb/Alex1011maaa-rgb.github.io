<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro - Academia Wushu</title>
    <script src="script.js" defer></script>
</head>

<body>
    <div class="login-container" method>
        <h1>Iniciar Sesión</h1>
        <form id="loginForm" method="post" autocomplete="off">
            <label for="login-nombre_usuario">Nombre de usuario:</label>
            <input type="text" id="login-nombre_usuario" name="nombre_usuario" required><br>

            <label for="login-contrasena">Contraseña:</label>
            <input type="password" id="login-contrasena" name="contrasena" required><br>

            <button type="submit">Ingresar</button>
        </form>
    </div>

    
</body>

</html>