<?php 

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	$PersonaEmail = $_POST['usuario'];
	// $PersonaEmail = "san@gmail.com";

	$PersonaClave = $_POST['clave'];
	// $PersonaClave = "123456";
	$PersonaClave = encryption($PersonaClave);


	$sql = "SELECT PersonaTipo FROM personas WHERE PersonaEmail=? AND PersonaEstado='Activo'";
	$query=$conexion->prepare($sql);
	$query->bind_param('s',$PersonaEmail);
	$query->execute();

	$datos=$query->get_result()->fetch_assoc();
		
	$tipo = $datos['PersonaTipo'];
	if($tipo == "Empresa"){

		$sql2 = "SELECT personas.*, empresa.* FROM empresa LEFT JOIN  personas ON empresa.PersonaCodigo=personas.PersonaCodigo  WHERE PersonaEmail=? AND PersonaClave=?";
		$query2=$conexion->prepare($sql2);
		$query2->bind_param('ss',$PersonaEmail,$PersonaClave);
		$query2->execute();

		if ($datos2=$query2->get_result()->fetch_assoc()) {
			 session_start(['name'=>'ELSURTIDOR']);
			$_SESSION['codigo_cms'] = $datos2['PersonaCodigo'];
			$_SESSION['email_cms'] = $datos2['PersonaEmail'];
			$_SESSION['tipo_cms'] = $datos2['PersonaTipo'];
			$_SESSION['privilegio_cms'] = $datos2['PrivilegioCodigo'];
			$_SESSION['eCodigo_cms'] = $datos2['EmpresaCodigo'];
			$_SESSION['nombre_cms'] = $datos2['EmpresaNombre'];
			$_SESSION['apellido_cms'] = $datos2['EmpresaMarca'];

			
			echo 1;
		} else {
			echo 0;
		}
		

	}elseif($tipo == "Administrador"){
		$sql2 = "SELECT * FROM personas JOIN administrador ON personas.PersonaCodigo=administrador.PersonaCodigo WHERE PersonaEmail=? AND PersonaClave=?";
		$query2=$conexion->prepare($sql2);
		$query2->bind_param('ss',$PersonaEmail,$PersonaClave);
		$query2->execute();

		if ($datos2=$query2->get_result()->fetch_assoc()) {
			 session_start(['name'=>'ELSURTIDOR']);
			$_SESSION['codigo_cms'] = $datos2['PersonaCodigo'];
			$_SESSION['email_cms'] = $datos2['PersonaEmail'];
			$_SESSION['tipo_cms'] = $datos2['PersonaTipo'];
			$_SESSION['privilegio_cms'] = $datos2['PrivilegioCodigo'];
			$_SESSION['eCodigo_cms'] = $datos2['EmpresaCodigo'];
			$_SESSION['nombre_cms'] = $datos2['AdminNombre'];
			$_SESSION['apellido_cms'] = $datos2['AdminApellido'];

			
			echo 1;
		} else {
			echo 3;
		}
	}else{
		echo 0;
	}
	