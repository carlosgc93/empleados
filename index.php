<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administracion</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sistema de control de empleados</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <a class="btn btn-default" href="alta.php"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th colspan="2">Tareas</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include("bd/conexion.php");
                $con = Conexion::conectar();
                $consultaSQL = "SELECT * FROM empleados";
                foreach( $con->query( $consultaSQL ) as $fila )
                {
                    echo "<tr>";
                    echo "<td>".$fila['id']."</td>";
                    echo "<td><a href='detalle.php?id=".$fila['id']."'>".$fila['nombre']."</a></td>";
                    echo "<td><a href='editar.php?key=".$fila['id']."'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                    echo "<td><a href='bd/borrar.php?key=".$fila['id']."'><span class='glyphicon glyphicon-remove'></span></a></td>";
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