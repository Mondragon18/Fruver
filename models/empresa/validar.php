<?php

  	include_once '../core/conexion.inc.php';
  	$conexion=conexion();

	$nit = $_POST['nit'];
  	// $nit = 1020;
  	// $cedula = "1010";

	$sql = "SELECT *
			from empresa where EmpresaNit=?";
	
	$query=$conexion->prepare($sql);
	$query->bind_param('s',$nit);
	$query->execute();
	
	$con = $query->get_result()->num_rows;
	// echo $datos=$query->get_result()->fetch_assoc();
	if ($con != 1) {
		echo $con;
	}else{
		echo $con;
	}
  