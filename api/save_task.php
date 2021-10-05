<?php

include("conexion.php");
session_start();

    $text = $_POST["text"];
    $usuario= $_SESSION['usuario'];
    $campo = $_POST["campo"];

    if($campo == "toDo"){
        $campo = 0;
    }    
    else{
        $campo = 1;
    }

    $sql="INSERT INTO task (tarea, usuario, campo) VALUES ('".$text."','".$usuario."','".$campo."')";

    mysqli_query($con, $sql);

    header('Location: ../inicio.php');
?>
