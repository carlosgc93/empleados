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
            <h1>Alta de nuevo empleado</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-remove"></span></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="bd/insertar.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nombre completo</label>
                            <input type="text" class="form-control" name="empleado" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" class="form-control" name="direccion" required="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="telefono" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CURP</label>
                            <input type="text" class="form-control" name="curp" required="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="nacimiento" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" class="form-control" name="email" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-11 col-md-1">
                        <input type="submit" class="btn btn-success form-control" required="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>