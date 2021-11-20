<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];


$sql="INSERT INTO cliente VALUES('$id','$dni','$nombres','$apellidos','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>