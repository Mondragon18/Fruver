<?php 
	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();


	$sql="SELECT * FROM personas JOIN empresa ON personas.PersonaCodigo=empresa.PersonaCodigo WHERE  personas.PrivilegioCodigo!='1'";


	$result=$conexion->query($sql);

	if (!$result) {
		die("Error al conectar a la base de datos ");
	}


	$json = array();
	while($datos=$result->fetch_assoc()){
		$json["data"][] = array(
			"id" =>$datos['id'],
			"nit" =>$datos['EmpresaNit'],
			"nombre" => $datos['EmpresaNombre'],
			"marca" => $datos['EmpresaMarca'],
			"telefono" => $datos['EmpresaTelefono'],
			"correo" => $datos['PersonaEmail'],
			"estado" => $datos['PersonaEstado'],
			"codigo" => $datos['PersonaCodigo']
		);
	}
	
	$jsonstring = json_encode($json);
	echo $jsonstring;
			
	$conexion->close();
// <!-- <span class="badge badge-primary badge-pill" _msthash="1423773" _msttexthash="4914">6</span> -->

?>