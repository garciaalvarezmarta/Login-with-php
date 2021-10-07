<?php
include("conexion.php");

    $texto = $_POST["text"];
    $id=$_POST["id"];
    $campo=$_POST["campo"];

    $sql="UPDATE task SET tarea= '".$texto."' WHERE id= '".$id."'";
    mysqli_query($con, $sql);

    header('Location: ../inicio.php');

?>