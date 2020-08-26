<?php 

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	// $id=$_POST['id'];
	// $PersonaCodigo = 7713173;
	$PersonaCodigo = $_POST['codigo'];
	// $PersonaCodigo = "992382";
	// $PersonaCodigo = decryption($PersonaCodigo);

	$sql = "SELECT * FROM administrador LEFT JOIN  personas ON administrador.PersonaCodigo=personas.PersonaCodigo WHERE personas.PersonaCodigo=? AND personas.PersonaTipo='Administrador'";

	// $result=$conexion->query($sql);

	$query=$conexion->prepare($sql);
	$query->bind_param('i',$PersonaCodigo);
	$query->execute();

	$json = array();
	if($datos=$query->get_result()->fetch_assoc()){

		// echo $datos['PersonaCodigo'];
		$json["data"][] = array(
			// "Id" =>$datos['id'],
			"AdminDNI" =>$datos['AdminDNI'],
			"AdminNombre" => $datos['AdminNombre'],
			"AdminApellido" => $datos['AdminApellido'],
			"AdminTelefono" => $datos['AdminTelefono'],
			"AdminDireccion" => $datos['AdminDireccion'],
			"PersonaEmail" => $datos['PersonaEmail'],
			"PersonaGenero" => $datos['PersonaGenero'],
			"PrivilegioCodigo" => $datos['PrivilegioCodigo'],
			"PersonaCodigo" => $encription = encryption($datos['PersonaCodigo'])
		);
	}

	$jsonstring = json_encode($json);
	echo $jsonstring;

	
?>

