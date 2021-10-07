<?php
    include("conexion.php");
    //session_start();
    $id=$_SESSION['usuario'];

    $sql="SELECT * FROM task WHERE usuario=".$id.";";
    $result = mysqli_query($con, $sql);

   // $row = mysqli_fetch_array($result,MYSQLI_NUM);

?>