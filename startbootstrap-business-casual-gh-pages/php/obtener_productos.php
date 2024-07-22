<?php
// Conexión a la base de datos (reemplaza con tus credenciales)
$servername = "localhost";
$username = "root";
$password = "10112004armm";
$dbname = "sweet_home";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT  * FROM ingredientes WHERE CantidadPorUnidad < 5";
$result = $conn->query($sql);

// Crear la tabla HTML
echo "<table>";
echo "<tr><th>ID</th><th>Nombre</th><th>Unidad</th></tr>CantidadPorUnidad</th></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Nombre"]. "</td><td>" . $row["Unidad"]. "</td></tr>". $row["CantidadPorUnidad"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();
