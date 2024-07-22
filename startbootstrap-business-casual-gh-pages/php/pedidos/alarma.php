<?php
include 'conexion.php'; 
// Consulta para obtener productos con bajo stock
$sql = "SELECT  * FROM ingredientes WHERE CantidadPorUnidad < 5"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "El producto " . $row["Nombre"] . " tiene bajo stock.";
        // Aquí puedes agregar código para enviar un correo, notificación, etc.
    }
} else {
    echo "No hay productos con bajo stock.";
}

$conn->close();
