<?php  
// Incluir el archivo de conexión  
include 'conexion.php';  

// Obtener los datos del formulario  
 
$cantidad = $_POST['Cantidad']; 
$harina = 200;  
$resta = $harina * $cantidad;

$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 2";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $resta);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
    echo "Cantidad restada con éxito.";  
} else {  
    echo "Error al restar cantidad: " . $conn->error;  
}  

$azucar =170;
$razucar=$azucar*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 4";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $razucar);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 
$huevos=4*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 3";  
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $huevos);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 
$sal=1 * $cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 9";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $sal);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 
$levadura=16*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 8";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $levadura);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 
$aceite=150*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 13";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $aceite);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 
$chocolate=125*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 14";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $chocolate);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 
$Nata=30*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 15";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $Nata);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 

// Cerrar la conexión  
$stmt->close();  
$conn->close();

