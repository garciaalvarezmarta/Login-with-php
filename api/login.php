<?php

include("conexion.php");
session_start();

$email = $_GET["email"];
$password = $_GET["password"];

$comprobar = "SELECT id FROM datos_registro WHERE correo = '".$email."' AND contraseña = '".$password."';";

$ejecucion = mysqli_query($con, $comprobar);
if($ejecucion->num_rows>0){
    $fila=$ejecucion->fetch_row();
    $id=$fila[0];
    $_SESSION['usuario'] =  $id;
    header('Location: ../inicio.php');
}
else{

   header('Location: ../index.php?error=1');
}

?>