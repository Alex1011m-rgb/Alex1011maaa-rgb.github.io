<?php  
// Incluir el archivo de conexión  
include 'conexion.php';  

// Obtener los datos del formulario  
 
$cantidad = $_POST['Cantidad']; 
$harina = 110;  
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
$mantequilla=40;
$remantequilla= $mantequilla* $cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 5";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $remantequilla);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 
$azucar =100;
$razucar=$azucar*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 4";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $razucar);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
}  
$huevos=2*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 3";  
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $huevos);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} else {  
   
} 
$dulce_de_leche=100*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 20";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $dulce_de_lech);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 
$stmt->close();  
$conn->close();