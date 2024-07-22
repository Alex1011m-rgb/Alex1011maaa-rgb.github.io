<?php  
// Configuración de la base de datos  
$servername = "localhost";  
$username = "root";  
$password = "10112004armm";  
$dbname = "sweet_home";  

// Crear conexión  
$conn = new mysqli($servername, $username, $password, $dbname);  

// Comprobar conexión  
if (!$conn) {  
    die("Error de conexión: " . mysqli_connect_error());  
}  



