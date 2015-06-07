<?php
require('conexion.php');
$con = Conexion::conectar();
$id = $_GET['key'];
$consultaSQL="DELETE FROM empleados WHERE id='$id'";
if($con->query($consultaSQL))
{
    header("Location: ../index.php");
}
else
{
    echo "hubo pedo chavo";
}








