<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Conexion fallida: " . $conn->connect_error);
}

?>