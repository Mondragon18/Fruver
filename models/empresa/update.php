<?php 
	
	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	//CODIGO DEL USUARIO QUE SE MODIFICARA
	// $PersonaCodigo = "7793352";
	$PersonaCodigo=$_POST['id'];
	$PersonaCodigo = decryption($PersonaCodigo);

	//DATOS PERSONALES
	$EmpresaNit=$_POST['nit'];
	$EmpresaNombre=$_POST['nombres'];
	$EmpresaMarca=$_POST['marca'];
	// $ciudad=$_POST['ciudad'];
	// $departamento=$_POST['departamento'];
	$EmpresaDireccion=$_POST['direccion'];
	$EmpresaTelefono=$_POST['telefono'];

	//DATOS DE LA CUENTA
	$PersonaEmail= $_POST['correo'];
	$PersonaClave= $_POST['clave1'];
	$PersonaClave2= $_POST['clave2'];
	// $PersonaEmail= "surtidir@gmail.com";

	if ($PersonaClave == "" && $PersonaClave2 == "") {
		// echo $cont = 1;

		$sql = "SELECT * from personas where PersonaCodigo=?";
		$query=$conexion->prepare($sql);
		$query->bind_param('i',$PersonaCodigo);
		$query->execute();
		// echo $cont = 1;
		if($datos2=$query->get_result()->fetch_assoc()){

			$PersonaClave = $datos2['PersonaClave'];

			$sql = "UPDATE personas set PersonaEmail=?, PersonaClave=? where PersonaCodigo=?";
			$query=$conexion->prepare($sql);
			$query->bind_param('ssi',$PersonaEmail, $PersonaClave, $PersonaCodigo);
			
			// echo $query->execute();
			if($query->execute()){
				$sql3 = "UPDATE empresa set EmpresaNit=?, EmpresaNombre=?, EmpresaMarca=?, EmpresaDireccion=?,  EmpresaTelefono=? where PersonaCodigo=?";
				$query3=$conexion->prepare($sql3);
				$query3->bind_param('issssi',$EmpresaNit, $EmpresaNombre, $EmpresaMarca, $EmpresaTelefono, $EmpresaDireccion, $PersonaCodigo);
				echo $query3->execute();
				// echo $cont = 1;
			}
			
		}

	}else{
		if ($PersonaClave == $PersonaClave2) {

			$PersonaClave = encryption($PersonaClave);
			
			$sql = "UPDATE personas set PersonaEmail=?, PersonaClave=? where PersonaCodigo=?";
			$query=$conexion->prepare($sql);
			$query->bind_param('ssi',$PersonaEmail, $PersonaClave, $PersonaCodigo);
			
			// echo $query->execute();
			if($query->execute()){
				$sql3 = "UPDATE empresa set EmpresaNit=?, EmpresaNombre=?, EmpresaMarca=?, EmpresaDireccion=?,  EmpresaTelefono=? where PersonaCodigo=?";
				$query3=$conexion->prepare($sql3);
				$query3->bind_param('issssi',$EmpresaNit, $EmpresaNombre, $EmpresaMarca, $EmpresaTelefono, $EmpresaDireccion, $PersonaCodigo);
				echo $query3->execute();
				// echo $cont = 1;
			}
			// echo $cont = 1;
		} else {
			echo $cont = -1;
		}
	}
?>