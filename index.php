<?php
include("conexion.php");
$con = conexion();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Registro Alumnos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <h1>Registro de alumnos conferencias 2024-II</h1>
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Numero de cuenta</th>
                    <th>Cod. Conferencia</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><?= $row['n_cuenta'] ?></th>
                        <th><?= $row['cod_conf'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><a href="actualizar.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminar.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <button id="myBtn" class="create-user-btn">Nuevo Usuario</button>

   <div id="myModal" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="users-form">
                <h1>Crear usuario</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" name="nombre" placeholder="Nombre(s)">
                    <input type="text" name="apellido" placeholder="Apellidos">
                    <input type="text" name="n_cuenta" placeholder="Número de cuenta">
                    <input type="text" name="cod_conf" placeholder="Código de conferencia">
                    <input type="email" name="email" placeholder="Email">
                    <input type="submit" value="Agregar">
                </form>
            </div>
        </div>

    </div>

    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>
