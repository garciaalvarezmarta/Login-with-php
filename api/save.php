<?php

include("conexion.php");

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$email = $_GET["email"];
$password = $_GET["password"];
$sql = "INSERT INTO datos_registro (Nombre,Apellido,Correo,Contraseña) VALUES ('".$nombre."','".$apellido."','".$email."','".$password."')";

echo $sql;

mysqli_query($con, $sql);

header('Location: ../inicio.html');

?>