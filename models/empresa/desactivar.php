<?php 
	
	include_once '../core/conexion.inc.php';

	$conexion=conexion();
	$PersonaCodigo = $_POST['codigo'];
	// $PersonaCodigo = "7793352";

	$sql = "UPDATE personas set PersonaEstado='Inhabilitada' 
						where PersonaCodigo=?";
	
	$query=$conexion->prepare($sql);
	$query->bind_param('i',$PersonaCodigo);

	echo $query->execute();

	$query->close();


?>