<?php 

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	// $id=$_POST['id'];
	// $PersonaCodigo = 7713173;
	$PersonaCodigo = $_POST['codigo'];
	// $PersonaCodigo = decryption($encription);

	$sql = "SELECT * FROM personas JOIN empresa ON personas.PersonaCodigo=empresa.PersonaCodigo WHERE personas.PersonaCodigo=? AND personas.PersonaTipo='Empresa'";

	// $result=$conexion->query($sql);

	$query=$conexion->prepare($sql);
	$query->bind_param('i',$PersonaCodigo);
	$query->execute();

	$json = array();
	if($datos=$query->get_result()->fetch_assoc()){

		// echo $datos['PersonaCodigo'];
		$json["data"][] = array(
			// "Id" =>$datos['id'],
			"EmpresaNit" =>$datos['EmpresaNit'],
			"EmpresaNombre" => $datos['EmpresaNombre'],
			"EmpresaMarca" => $datos['EmpresaMarca'],
			"EmpresaTelefono" => $datos['EmpresaTelefono'],
			"EmpresaDireccion" => $datos['EmpresaDireccion'],
			"PersonaEmail" => $datos['PersonaEmail'],
			"PersonaCodigo" => $encription = encryption($datos['PersonaCodigo'])
		);
	}

	$jsonstring = json_encode($json);
	echo $jsonstring;
	


?>

