<?php

// Detalles de conexión a la base de datos (reemplaza con tus credenciales)
$servername = "localhost";
$username = "root";
$password = "10112004armm";
$dbname = "sweet_home";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if (mysqli_connect_error()) {
  die("Error de conexión: " . mysqli_connect_error());
}

// Consulta SQL para recuperar ingredientes
$sql = "SELECT * FROM ingredientes";

// Ejecuta la consulta
$result = mysqli_query($conn, $sql);

// Verifica los resultados de la consulta
if (mysqli_num_rows($result) == 0) {
  echo "No se encontraron resultados.";
} else {

  // Inicia la tabla HTML
  echo "<table>";

  // Crea la fila de encabezados de la tabla (imprímela solo una vez)
  echo "<tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Unidad</th>
        </tr>";

  // Procesa cada fila del resultado de la base de datos
  while ($row = mysqli_fetch_assoc($result)) {
    // Crea una fila de la tabla con datos de cada columna, utilizando la concatenación adecuada
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["Nombre"] . "</td>
            <td>" . $row["Unidad"] . "</td>
          </tr>";
  }

  // Cierra la tabla HTML
  echo "</table>";
}

// Cierra la conexión
mysqli_close($conn);

