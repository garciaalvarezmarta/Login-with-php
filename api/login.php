<?php

include("conexion.php");

$email = $_GET["email"];
$password = $_GET["password"];

$comprobar = "SELECT correo, contraseña FROM datos_registro WHERE correo = '".$email."' AND contraseña = '".$password."';";

$ejecucion = mysqli_query($con, $comprobar);
if($ejecucion->num_rows>0){
    header('Location: ../inicio.html');
}
else{

   header('Location: ../index.php?error=1');
}

?>