<?php 
	 session_start(['name'=>'ELSURTIDOR']);

	$_SESSION['codigo_cms'] = null;
	$_SESSION['email_cms'] = null;
	$_SESSION['tipo_cms'] = null;
	$_SESSION['privilegio_cms'] = null;
	$_SESSION['eCodigo_cms'] = null;
	$_SESSION['nombre_cms'] = null;
	$_SESSION['apellido_cms'] = null;


	
	session_unset();
	session_destroy();

	// $redireccion = "<script> window.location.href='login'></script>";
	// echo $redireccion;
	header("location:../");
?>