<?php

function conexion(){
    $host = "192.168.0.17";
    $user = "gerardmb15";
    $pass = "15052002";

    $bd = "usuarios_conf";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>