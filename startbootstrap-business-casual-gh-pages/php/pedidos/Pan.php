<?php  
// Incluir el archivo de conexión  
include 'conexion.php';  

// Obtener los datos del formulario  
 
$cantidad = $_POST['Cantidad']; 
$harina = 1000;  
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



$mantequilla=500;
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


$leche=1000;
$rleche= $leche*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 1";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $rleche);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} else {  
   
}  



$azucar =1000;
$razucar=$azucar*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 4";  
$stmt = $conn->prepare($sql);  

// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $razucar);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} else {  
   
}  



$huevos=8*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 3";  
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $huevos);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} else {  
   
}  



$vainilla=5*$cantidad;
$sql = "UPDATE ingredientes SET CantidadPorUnidad = CantidadPorUnidad - ? WHERE IngredienteID = 11";
$stmt = $conn->prepare($sql);
// Enlazar el parámetro, usando $resta en lugar de $cantidad  
$stmt->bind_param("i", $vainilla);  

// Ejecutar la consulta  
if ($stmt->execute()) {  
   
} else {  
   
}  

// Cerrar la conexión  
$stmt->close();  
$conn->close();