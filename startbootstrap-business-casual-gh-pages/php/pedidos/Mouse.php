<?php  
// Incluir el archivo de conexión  
include 'conexion.php';  

// Obtener los datos del formulario  
 
$cantidad = $_POST['Cantidad']; 

$azucar =10;
$razucar=$azucar*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 4";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $razucar);  

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
$cacao=20*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 16";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $cacao);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 

$sirope_agave=100*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 16";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $sirope_agave);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 

// Cerrar la conexión  
$stmt->close();  
$conn->close();

