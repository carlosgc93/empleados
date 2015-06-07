<?php
    // requiere el archivo de conexion
	require_once 'conexion.php';
	// si la variable $_POST contiene algo
    if( !empty($_POST) )
    {
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
			$consultaSQL ="INSERT INTO empleados(nombre, direccion, telefono, curp, nacimiento, email) VALUES(?, ?, ? , ?, ?, ?)";
			$stmnt = $con->prepare( $consultaSQL );
			$stmnt->execute( array($nombre, $direccion, $telefono, $curp, $nacimiento, $email) );
			Conexion::desconectar();
			$con = null;
			header( "Location: ../index.php" );
		}
        else
        {
            echo "hubo pedo chavo";
        }
	}
?>