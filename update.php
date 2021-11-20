<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];

$sql="UPDATE cliente SET  dni='$dni',nombres='$nombres',apellidos='$apellidos', email=`$email` WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>