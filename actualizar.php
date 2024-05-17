<?php 
    include("conexion.php");
    $con=conexion();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <h1>Editar Usuario</h1>
        <div class="users-form">
            <form action="editar.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
                <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido']?>">
                <input type="text" name="n_cuenta" placeholder="Número de Cuenta" value="<?= $row['n_cuenta']?>">
                <input type="text" name="cod_conf" placeholder="Código de conferencia" value="<?= $row['cod_conf']?>">
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>