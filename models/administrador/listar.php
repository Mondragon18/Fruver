<?php 
	session_start(['name'=>'ELSURTIDOR']);

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	$EmpresaCodigo = $_SESSION['eCodigo_cms'];
	$PrivilegioActual = $_SESSION['privilegio_cms'];

	$sql="SELECT * FROM personas JOIN administrador ON personas.PersonaCodigo=administrador.PersonaCodigo WHERE personas.EmpresaCodigo = '$EmpresaCodigo'";


	$result=$conexion->query($sql);

	if (!$result) {
		die("Error al conectar a la base de datos ");
	}


	$json = array();
	// while($datos=$query->get_result()->fetch_assoc()){
	while($datos=$result->fetch_assoc()){
		$json["data"][] = array(
			"id" =>$datos['id'],
			"Identificacion" =>$datos['AdminDNI'],
			"nombre" => $datos['AdminNombre'] ." ". $datos['AdminApellido'],
			"telefono" => $datos['AdminTelefono'],
			"correo" => $datos['PersonaEmail'],
			"estado" => $datos['PersonaEstado'],
			"privilegio" => $_SESSION['privilegio_cms'],
			"codigo" => $datos['PersonaCodigo']
			// "privilegio" => $PrivilegioActual,
		);
	}
	
	$jsonstring = json_encode($json);
	echo $jsonstring;
			
	$conexion->close();

?>
