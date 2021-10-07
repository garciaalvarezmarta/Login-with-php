<?php
    include("conexion.php");

    $id=$_GET["id"];
    $sql="DELETE from task WHERE id='".$id."'";
    mysqli_query($con, $sql);

    header('Location: ../inicio.php');


?>