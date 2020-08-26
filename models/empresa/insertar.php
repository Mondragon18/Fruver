<?php 

	include_once '../core/conexion.inc.php';
	include_once '../core/config.inc.php';
	$conexion=conexion();

	// Datos obtenidos del formulario personales
	$EmpresaNit=$_POST['nit'];
	$EmpresaNombre=$_POST['nombres'];
	$EmpresaMarca=$_POST['marca'];
	// $ciudad=$_POST['ciudad'];
	// $departamento=$_POST['departamento'];
	$EmpresaDireccion=$_POST['direccion'];
	$EmpresaTelefono=$_POST['telefono'];
	
	//Datos obtenidos del formulario, de la cuenta
	$PersonaEmail= $_POST['correo'];
	$PersonaClave= $_POST['clave1'];
	$PersonaClave = encryption($PersonaClave);
	$PersonaGenero="Otro";
	$PrivilegioCodigo = 2;
	// $PrivilegioCodigo=decryption($PrivilegioCodigo);
	// echo var_dump($privilegioCodigo);

	$consulta1  = "SELECT * FROM personas";
	$numero1 = ejecutar_consulta_conteo($consulta1);
	$PersonaCodigo = generar_codigo_aleatorio(77, 4, $numero1);

	$PersonaTipo = "Empresa";
	$PersonaEstado = "Activo";

	$consulta2  = "SELECT * FROM empresa";
	$numero2 = ejecutar_consulta_conteo($consulta2);
	$EmpresaCodigo = generar_codigo_aleatorio(88, 7, $numero2);

	$sql = "INSERT INTO personas (PersonaCodigo, PersonaEmail, PersonaClave, PersonaTipo, PersonaEstado, PersonaGenero, PersonaFoto, PrivilegioCodigo, EmpresaCodigo)
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$query=$conexion->prepare($sql);
	$query->bind_param('issssssss',$PersonaCodigo,
						$PersonaEmail,
						$PersonaClave,
						$PersonaTipo,
						$PersonaEstado,
						$PersonaGenero,
						$PersonaGenero,
						$PrivilegioCodigo,
						$EmpresaCodigo
					);  
	
	$resultado = $query->execute();

	if ($resultado == 1) {
		$sql = "INSERT INTO empresa (EmpresaNit, EmpresaNombre, EmpresaMarca, EmpresaTelefono, EmpresaDireccion, PersonaCodigo, EmpresaCodigo)
			VALUES (?, ?, ?, ?, ?, ?, ?)";

		$query=$conexion->prepare($sql);
		$query->bind_param('issssis',$EmpresaNit,
							$EmpresaNombre,
							$EmpresaMarca,
							$EmpresaTelefono,
							$EmpresaDireccion,
							$PersonaCodigo,
							$EmpresaCodigo
						);  
		
		$resultado2 = $query->execute();
		if ($resultado2 == 1) {
			$cont = $resultado2;
		}else {
			// $consulta3 = "DELETE from personas where PersonaCodigo=?"; //sentencia preparada
			// $delete = ejecutar_consulta_eliminar($delete, $PersonaCodigo);
			// $sql = "DELETE from personas where PersonaCodigo=?"; //sentencia preparada
			// $query=$conexion->prepare("$sql");
			// $query->bind_param("s",$PersonaCodigo);

			// $query->execute();
			$cont = 0;
		}
	}else{
		// $sql = "DELETE from personas where PersonaCodigo=?"; //sentencia preparada
		// $query=$conexion->prepare("$sql");
		// $query->bind_param("s",$PersonaCodigo);
		// $query->execute();
		// // echo $cont = 0;
		$cont = 0;
	}
	
	echo $cont;