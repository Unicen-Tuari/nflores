<?php
/*
 * Example Application
 *
 * @package Example-application
 */
error_reporting(E_ALL);
ini_set("display_errors",1);


//ini_set("session.cookie_lifetime","600");
//ini_set("session.gc_maxlifetime","600");

include_once 'vistas/vistas.php';
include_once 'vistas/vista_login.php';
include_once 'controladores/controlador.php';
include_once 'controladores/logincontroller.php';
include_once 'modelos/modelo_login.php';
$view_login = new Vista_Login();
$modellog = new Modelo_login();
$controler_login = new LoginController($view_login,$modellog);

if ($controler_login->checksession() || array_key_exists('action', $_REQUEST) ){
	if (array_key_exists('action', $_REQUEST)){
		switch ($_REQUEST['action']) {
		    case 'login':
		        return $controler_login->Procesar_login($_REQUEST["email"],$_REQUEST["password"]);
		        break;
		    case 'register':
		        $a = $controler_login->Procesar_register($_REQUEST["email"],$_REQUEST["password"]);
		        return $a;
		        break;
		    case 'logout':
		        return $controler_login->logout();
		        break;
		}
	}
	else{
		$vista = new Vista();
		$vista->index();
	}
}
else{
	$view_login->indexlogin();
}


?>
