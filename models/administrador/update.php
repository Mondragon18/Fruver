<?php 
	
	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	//CODIGO DEL USUARIO QUE SE MODIFICARA
	// $PersonaCodigo = "7793352";
	$PersonaCodigo=$_POST['id'];
	$PersonaCodigo = decryption($PersonaCodigo);

	//DATOS PERSONALES
	$AdminDNI=$_POST['identificacionu'];
	$AdminNombre=$_POST['nombresu'];
	$AdminApellido=$_POST['apellidou'];
	// $ciudad=$_POST['ciudad'];
	// $departamento=$_POST['departamento'];
	$AdminDireccion=$_POST['direccionu'];
	$AdminTelefono=$_POST['telefonou'];

	//DATOS DE LA CUENTA
	$PersonaEmail= $_POST['correou'];
	$PersonaClave= $_POST['claveu1'];
	$PersonaClave2= $_POST['claveu2'];
	$PersonaGenero = $_POST['generou'];
	$PrivilegioCodigo = $_POST['privilegiou'];
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

			$sql = "UPDATE personas set PersonaEmail=?, PersonaClave=?, PersonaGenero =?, PrivilegioCodigo = ? where PersonaCodigo=?";
			$query=$conexion->prepare($sql);
			$query->bind_param('ssssi',$PersonaEmail, $PersonaClave, $PersonaGenero, $PrivilegioCodigo, $PersonaCodigo);
			
			// echo $query->execute();
			if($query->execute()){
				$sql3 = "UPDATE administrador set AdminDNI=?, AdminNombre=?, AdminApellido=?, AdminDireccion=?,  AdminTelefono=? where PersonaCodigo=?";
				$query3=$conexion->prepare($sql3);
				$query3->bind_param('issssi',$AdminDNI, $AdminNombre, $AdminApellido, $AdminDireccion, $AdminTelefono, $PersonaCodigo);
				echo $query3->execute();
				// echo $cont = 1;
			}
			
		}

	}else{
		if ($PersonaClave == $PersonaClave2) {

			$PersonaClave = encryption($PersonaClave);
			
			$sql = "UPDATE personas set PersonaEmail=?, PersonaClave=? where PersonaCodigo=?";
			$query=$conexion->prepare($sql);
			$query->bind_param('ssssi',$PersonaEmail, $PersonaClave, $PersonaCodigo);
			
			// echo $query->execute();
			if($query->execute()){
				$sql3 = "UPDATE administrador set AdminDNI=?, AdminNombre=?, AdminApellido=?, AdminDireccion=?,  AdminTelefono=? where PersonaCodigo=?";
				$query3=$conexion->prepare($sql3);
				$query3->bind_param('issssi',$AdminDNI, $AdminNombre, $AdminApellido, $AdminDireccion, $AdminTelefono, $PersonaCodigo);
				echo $query3->execute();
				// echo $cont = 1;
			}
			// echo $cont = 1;
		} else {
			echo $cont = -1;
		}
	}
?>