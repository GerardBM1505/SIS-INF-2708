<?php

include("conexion.php");
$con = conexion();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$n_cuenta = $_POST['n_cuenta'];
$cod_conf = $_POST['cod_conf'];
$email = $_POST['email'];

$sql="UPDATE users SET nombre='$nombre', apellido='$apellido', n_cuenta='$n_cuenta', cod_conf='$cod_conf', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>