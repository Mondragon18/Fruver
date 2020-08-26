<?php 
	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	$id=$_POST['id'];
	// $id = 'CC26642493';

	$sql = "DELETE from personas where PersonaCodigo=?"; //sentencia preparada
	$query=$conexion->prepare("$sql");
	$query->bind_param("s",$id);

	$query->execute();



?>