<?php
include("conexion.php");
$con = conexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$n_cuenta = $_POST['n_cuenta'];
$cod_conf = $_POST['cod_conf'];
$email = $_POST['email'];

$sql = "INSERT INTO users (nombre, apellido, n_cuenta, cod_conf, email) VALUES ('$nombre', '$apellido', '$n_cuenta', '$cod_conf', '$email')";
$query = mysqli_query($con, $sql);

if($query){
    header("Location: index.php");
    exit();
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($con);
}
?>
