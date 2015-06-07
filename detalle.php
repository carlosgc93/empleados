<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>detalle</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Detalle de personal</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-remove"></span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Curp</th>
                    <th>Nacimiento</th>
                    <th>Email</th>

                </tr>
                </thead>
                <tbody>
                <?php
                include("bd/conexion.php");
                $con = Conexion::conectar();
                $consultaSQL = "SELECT * FROM empleados WHERE id='$id'";
                foreach( $con->query( $consultaSQL ) as $fila )
                {
                    echo "<tr>";
                    echo "<td>".$fila['id']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['direccion']."</td>";
                    echo "<td>".$fila['telefono']."</td>";
                    echo "<td>".$fila['curp']."</td>";
                    echo "<td>".$fila['nacimiento']."</td>";
                    echo "<td>".$fila['email']."</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>