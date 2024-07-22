<?php  
// Incluir el archivo de conexión  
include 'conexion.php';  

// Obtener los datos del formulario  
 
$cantidad = $_POST['Cantidad']; 
$harina = 250;  
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



$mantequilla=100;
$remantequilla= $mantequilla* $cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 5";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $remantequilla);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} else {  
   
}  

// Cerrar la conexión  






$azucar =30;
$razucar=$azucar*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 4";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $razucar);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} else {  
   
}  

$sal=1 * $cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 9";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $sal);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 

// Cerrar la conexión  
$stmt->close();  
$conn->close();
$polvo=2*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 12";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $polvo);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} 