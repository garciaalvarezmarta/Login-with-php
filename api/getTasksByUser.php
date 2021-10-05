<?php
    include("conexion.php");

    $id=$_SESSION['usuario'];

    $sql="SELECT * FROM task WHERE id=".$id.";";
    mysqli_query($con, $sql);

?>