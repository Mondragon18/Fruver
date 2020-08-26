<?php 

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	// $id=$_POST['id'];
	// $PersonaCodigo = "2215242";
	$PersonaCodigo = $_POST['codigo'];
	// $PersonaCodigo = "992382";
	// $PersonaCodigo = decryption($PersonaCodigo);

	$sql = "SELECT * FROM cliente LEFT JOIN  personas ON cliente.PersonaCodigo=personas.PersonaCodigo WHERE personas.PersonaCodigo=? AND personas.PersonaTipo='Cliente'";

	// $result=$conexion->query($sql);

	$query=$conexion->prepare($sql);
	$query->bind_param('i',$PersonaCodigo);
	$query->execute();

	$json = array();
	if($datos=$query->get_result()->fetch_assoc()){

		// echo $datos['PersonaCodigo'];
		$json["data"][] = array(
			// "Id" =>$datos['id'],
			// "AdminDNI" =>$datos['AdminDNI'],
			"ClienteNombreFull" => $datos['ClienteNombreFull'],
			"ClienteTelefono" => $datos['ClienteTelefono'],
			"ClienteDireccion" => $datos['ClienteDireccion'],
			"PersonaEmail" => $datos['PersonaEmail'],
			"PersonaGenero" => $datos['PersonaGenero'],
			"PersonaCodigo" => $encription = encryption($datos['PersonaCodigo'])
		);
	}

	$jsonstring = json_encode($json);
	echo $jsonstring;

	
?>

