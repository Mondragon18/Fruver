<?php

  include_once '../core/onexion.inc.php';
  $conexion=conexion();

  $cedula = $_POST['identificacion'];
  // $cedula = "1000";

	$sql = "SELECT *
			from administrador where AdminDNI=?";
	
	$query=$conexion->prepare($sql);
	$query->bind_param('s',$cedula);
	$query->execute();
  
  $con = $query->get_result()->num_rows;
  // echo $datos=$query->get_result()->fetch_assoc();
  if ($con != 1) {
    echo $con;
    // echo "<br> correcto";
  }else{
    echo $con;
    // echo "<br> incorrecto";
  }
