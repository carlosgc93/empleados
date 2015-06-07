<?php
	require_once 'database.php';
	$id = null;
	
	if( !empty($_GET['id']) ){
		$id = $_REQUEST['id'];
	}
	
	if( $id == null ){
		header( "Location: index.php" );
	}
	
	if( !empty($_POST) ){
		$nombreError = null;
		$contrasenaError = null;
		
		$nombre = $_POST['nombre'];
		$contrasena = $_POST['contrasena'];
		
		$valido = true;
		if(empty($nombre)){
			$nombreError = "Porfavor proporciona tu nuevo nombre de usuario";
			$valido = false;
		}
		
		if(empty($contrasena)){
			$contrasenaError = "Porfavor proporciona tu nueva contraseña de usuario";
			$valido = false;
		}
		
		if( $valido ){
			$con = Database::conectar();
			$consultaSQL = 
			"UPDATE usuarios SET nombre_usuario = ?, contrasena_usuario = ? WHERE id_usuario = ?";
			$stmnt = $con->prepare( $consultaSQL );
			$stmnt->execute( array($nombre, $contrasena, $id) );
			Database::desconectar();
			$con = null;
			header( "Location: index.php" );
		}
	}else{
		$con = Database::conectar();
			$consultaSQL = 
			"SELECT * FROM usuarios WHERE id_usuario = ?";
			$stmnt = $con->prepare( $consultaSQL );
			$stmnt->execute( array($id) );
			$datos = $stmnt->fetch();
			$nombre = $datos['nombre_usuario'];
			$contrasena = $datos['contrasena_usuario'];
			Database::desconectar();
			$con = null;
	}
?>








