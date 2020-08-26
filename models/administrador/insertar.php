<?php 

	session_start(['name'=>'ELSURTIDOR']);

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	//Datos obtenidos del formulario personales
	$AdminDNI = $_POST['identificacion'];
	$AdminNombre = $_POST['nombres'];
	$AdminApellido = $_POST['apellidos'];
	$AdminTelefono = $_POST['telefono'];
	$AdminDireccion = $_POST['direccion'];

	//Datos obtenidos del formulario cuenta
	$PersonaEmail = $_POST['correo'];
	$PersonaClave = $_POST['clave1'];
	$PersonaClave = encryption($PersonaClave);
	$PersonaGenero = $_POST['genero'];
	$PrivilegioCodigo = $_POST['privilegio'];

	// //Datos 
	$consulta1  = "SELECT * FROM administrador";
	$numero1 = ejecutar_consulta_conteo($consulta1);
	$PersonaCodigo = generar_codigo_aleatorio(99, 3, $numero1);
	$EmpresaCodigo = $_SESSION['eCodigo_cms'];
	$PersonaTipo = "Administrador";
	$PersonaEstado = "Activo";
	if ($PersonaGenero = "Masculino") {
		$PersonaFoto = "";
	} else {
		$PersonaFoto = "";
	}

	$sql = "INSERT INTO personas (PersonaCodigo, PersonaEmail, PersonaClave, PersonaTipo, PersonaEstado, PersonaGenero, PersonaFoto, PrivilegioCodigo, EmpresaCodigo)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$query=$conexion->prepare($sql);
	$query->bind_param('issssssss',$PersonaCodigo,
						$PersonaEmail,
						$PersonaClave,
						$PersonaTipo,
						$PersonaEstado,
						$PersonaGenero,
						$PersonaFoto,
						$PrivilegioCodigo,
						$EmpresaCodigo
					);  
	
	$resultado = $query->execute();
	

	if ($resultado == 1) {
		$sql = "INSERT INTO administrador (AdminDNI, AdminNombre, AdminApellido, AdminTelefono, AdminDireccion, PersonaCodigo, EmpresaCodigo)
			VALUES (?, ?, ?, ?, ?, ?, ?)";

		$query=$conexion->prepare($sql);
		$query->bind_param('issssis',$AdminDNI,
							$AdminNombre,
							$AdminApellido,
							$AdminTelefono,
							$AdminDireccion,
							$PersonaCodigo,
							$EmpresaCodigo
						);  
		
		$resultado2 = $query->execute();
		if ($resultado2 == 1) {
			$cont = $resultado2;
		}else {
			$cont = 0;
		}
	}else{
		$cont = 0;
	}
	
	echo $cont;


?>



