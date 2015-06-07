<?php
// requiere el archivo de conexion
require_once 'conexion.php';
session_start();
// si la variable $_POST contiene algo
if( !empty($_POST) )
{   $id = $_SESSION['key'];
    $nombre = $_POST['empleado'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $curp = $_POST['curp'];
    $nacimiento = $_POST['nacimiento'];
    $email = $_POST['email'];
    $valido = true;
    if( $valido )
    {
        $con = Conexion::conectar();
        $consultaSQL ="UPDATE empleados SET nombre ='$nombre', direccion='$direccion', telefono='$telefono', curp='$curp', nacimiento='$nacimiento', email='$email' WHERE id='$id' ";
        $con->exec($consultaSQL);
        Conexion::desconectar();
        $con = null;
        header( "Location: ../index.php" );
    }
    else
    {
        echo "hubo pedo chavo";
    }
}



