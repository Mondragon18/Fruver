<?php 
	session_start(['name'=>'ELSURTIDOR']);

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	$EmpresaCodigo = $_SESSION['eCodigo_cms'];
	$PrivilegioActual = $_SESSION['privilegio_cms'];

	if ($EmpresaCodigo = "0000000") {
		$sql="SELECT * FROM personas JOIN cliente ON personas.PersonaCodigo=cliente.PersonaCodigo";

		$result=$conexion->query($sql);

			if (!$result) {
				die("Error al conectar a la base de datos ");
			}

		$json = array();
		// while($datos=$query->get_result()->fetch_assoc()){
		while($datos=$result->fetch_assoc()){
			$json["data"][] = array(
				"id" =>$datos['id'],
				"nombre" => $datos['ClienteNombreFull'],
				"telefono" => $datos['ClienteTelefono'],
				"direccion" => $datos['ClienteDireccion'],
				"genero" => $datos['PersonaGenero'],
				"correo" => $datos['PersonaEmail'],
				"estado" => $datos['PersonaEstado'],
				"privilegio" => $_SESSION['privilegio_cms'],
				"codigo" => $datos['PersonaCodigo']
				// "privilegio" => $PrivilegioActual,
			);
		}

	} else {
		// $sql="SELECT * FROM personas JOIN cliente ON personas.PersonaCodigo=cliente.PersonaCodigo";

		// $result=$conexion->query($sql);

		// 	if (!$result) {
		// 		die("Error al conectar a la base de datos ");
		// 	}

		// $json = array();
		// // while($datos=$query->get_result()->fetch_assoc()){
		// while($datos=$result->fetch_assoc()){
		// 	$json["data"][] = array(
		// 		"id" =>$datos['id'],
		// 		"nombre" => $datos['ClienteNombreFull'],
		// 		"telefono" => $datos['ClienteTelefono'],
		// 		"direccion" => $datos['ClienteDireccion'],
		// 		"genero" => $datos['PersonaGenero'],
		// 		"correo" => $datos['PersonaEmail'],
		// 		"estado" => $datos['PersonaEstado'],
		// 		"privilegio" => $_SESSION['privilegio_cms'],
		// 		"codigo" => $datos['PersonaCodigo']
		// 		// "privilegio" => $PrivilegioActual,
		// 	);
		// }
	}
	
	
		
		$jsonstring = json_encode($json);
		echo $jsonstring;
				
		$conexion->close();
	

?>
