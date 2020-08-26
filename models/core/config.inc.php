<?php 

	include_once 'conexion.inc.php';
	require_once "configuracion.inc.php";
	

	function ejecutar_consulta_conteo($consulta){

		$conexion=conexion();
		$result=$conexion->query($consulta);
		if (!$result) {
			die("Error al conectar a la base de datos ");
		}

		$cont = 1;
		while($datos=$result->fetch_assoc()){
			$cont++;
		}

		return $cont;
	}

	function encryption($string){
		$output=FALSE;
		$key=hash('sha256', SECRET_KEY);
		$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
		$output=base64_encode($output);
		return $output;
	}

	function decryption($string){
		$key=hash('sha256', SECRET_KEY);
		$iv=substr(hash('sha256', SECRET_IV), 0, 16);
		$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
		return $output;
	}
	
	function generar_codigo_aleatorio($letra, $longitud, $num){
		for ($i=1; $i<=$longitud; $i++) { 
			$numero = rand(0,9);
			$letra.= $numero;
		}
		return $letra.$num;
	}

	function limpiar_cadena($cadena){
		//si tiene espacio se lo quita 
		$cadena = trim($cadena);
		//quitar las barras de un string con comillas escapadas
		$cadena = stripslashes($cadena);
		//remplaza un valor por 
		$cadena = str_ireplace("<script>", "", $cadena);
		$cadena = str_ireplace("</script>", "", $cadena);
		$cadena = str_ireplace("<script src>", "", $cadena);
		$cadena = str_ireplace("<script type=>", "", $cadena);
		$cadena = str_ireplace("SELECT * FROM", "", $cadena);
		$cadena = str_ireplace("DELETE * FROM", "", $cadena);
		$cadena = str_ireplace("INSERT INTO", "", $cadena);
		$cadena = str_ireplace("--", "", $cadena);
		$cadena = str_ireplace("^", "", $cadena);
		$cadena = str_ireplace("[", "", $cadena);
		$cadena = str_ireplace("]", "", $cadena);
		$cadena = str_ireplace("==", "", $cadena);
		$cadena = str_ireplace(";", "", $cadena);
		$cadena = str_ireplace(", ", "", $cadena);
		return $cadena;
	} 
?>