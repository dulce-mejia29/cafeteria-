<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

$sql = "INSERT INTO mensajes (nombre, comentario) VALUES ('$nombre', '$comentario')";

if ($conexion->query($sql) === TRUE) {
    echo "Comentario guardado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
