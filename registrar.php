<?php

include("conn.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

if(empty($nombre) || empty($correo) || empty($mensaje)){
die("Faltan datos");
}

$sql = "INSERT INTO clientes(nombre,correo,telefono,mensaje)
VALUES('$nombre','$correo','$telefono','$mensaje')";

if($conn->query($sql)==TRUE){
echo "Gracias por registrarte";
}else{
echo "Error: " . $conn->error;
}

$conn->close();

?>