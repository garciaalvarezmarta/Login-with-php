<?php
include("conexion.php");

    $id=$_GET["id"];
    $campo=$_GET["campo"];
    $valor;

    if($campo == 0){
        $valor=1;
    }
    else{
        $valor=0;
    }

    $sql="UPDATE task SET campo= '".$valor."' WHERE id= '".$id."'";
    mysqli_query($con, $sql);

    header('Location: ../inicio.php');


?>