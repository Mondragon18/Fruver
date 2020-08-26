<?php 

    require_once'./models/vistasModelo.php'; 
    $vt= new  vistasControlador();
    $vistasR= $vt->obtener_vistas_controlador();

    if($vistasR == "login" || $vistasR == "404"):
        if ($vistasR == "login") {
            include_once "./Views/Contenidos/login.php"; 
        } else {
            include_once "./Views/Contenidos/404.php"; 
        }
    else:
            
        session_start(['name'=>'ELSURTIDOR']);
      
        require_once "./models/login/forzar.php"; 
		$lc = new forzar();
		if (!isset($_SESSION['email_cms']) || !isset($_SESSION['tipo_cms'])) {
			$lc->forzar_cierre_sesion_desing_controlador();
        }
        
        // include_once "./core/header.inc.php"; 
        require_once $vistasR; 

        require_once "./core/logoutScript.php";

    endif;  
?>

<?php include_once "./core/final.inc.php"; ?>