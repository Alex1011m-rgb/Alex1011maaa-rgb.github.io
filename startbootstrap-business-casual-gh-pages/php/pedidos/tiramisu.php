<?php  
// Incluir el archivo de conexión  
include 'conexion.php';  

// Obtener los datos del formulario  
 
$cantidad = $_POST['Cantidad']; 

$azucar =10;
$razucar=$azucar*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 4";  
$stmt = $conn->prepare($sql);   
$stmt->bind_param("i", $razucar);  
if ($stmt->execute()) {  
   
} 
$mascarpone=25*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 24";  
$stmt = $conn->prepare($sql);  
$stmt->bind_param("i", $mascarpone);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
} 
$huevos=3*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 3";  
$stmt = $conn->prepare($sql);  
$stmt->bind_param("i", $huevos);   
if ($stmt->execute()) {    
} 
$chocolate=100*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 14";  
$stmt = $conn->prepare($sql);  
$stmt->bind_param("i", $chocolate);   
if ($stmt->execute()) {    
} 
$mantequilla=50*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 5";  
$stmt = $conn->prepare($sql);  
$stmt->bind_param("i", $mantequilla);   
if ($stmt->execute()) {    
} 
$galletas=12*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 23";  
$stmt = $conn->prepare($sql);  
$stmt->bind_param("i", $galletas);   
if ($stmt->execute()) {    
} 

// Cerrar la conexión  
$stmt->close();  
$conn->close();

