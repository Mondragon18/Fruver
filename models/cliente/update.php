<?php 

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	//CODIGO DEL USUARIO QUE SE MODIFICARA
	// $PersonaCodigo = "7793352";
	$PersonaCodigo=$_POST['id'];
	$PersonaCodigo = decryption($PersonaCodigo);

	//DATOS PERSONALES
	$ClienteNombreFull=$_POST['nombresu'];
	// $ciudad=$_POST['ciudad'];
	// $departamento=$_POST['departamento'];
	$ClienteDireccion=$_POST['direccionu'];
	$ClienteTelefono=$_POST['telefonou'];

	//DATOS DE LA CUENTA
	$PersonaEmail= $_POST['correou'];
	$PersonaGenero = $_POST['generou'];
	// $PersonaEmail= "surtidir@gmail.com";

	// echo $cont = 1;
	$sql = "UPDATE personas set PersonaEmail=?, PersonaGenero=? where PersonaCodigo=?";
	$query=$conexion->prepare($sql);
	$query->bind_param('ssi',$PersonaEmail, $PersonaGenero, $PersonaCodigo);
			
	$query->execute();
	if($query->execute()){
		$sql3 = "UPDATE cliente set  ClienteNombreFull=?, ClienteDireccion=?,  ClienteTelefono=? where PersonaCodigo=?";
		$query3=$conexion->prepare($sql3);
		$query3->bind_param('sssi',$ClienteNombreFull, $ClienteDireccion, $ClienteTelefono, $PersonaCodigo);
		echo $query3->execute();
		// echo $cont = 1;
	}
			
		

?>