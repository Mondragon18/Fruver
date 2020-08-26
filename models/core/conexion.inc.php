<?php 

	require_once "configuracion.inc.php";
	
	function conexion(){
		$conexion= new mysqli(SERVER, USER ,PASS, DB);
		if($conexion->connect_errno){
			echo "Fallo al conectar :". $conexion->connect_error;
		}
		return $conexion;
	}

	