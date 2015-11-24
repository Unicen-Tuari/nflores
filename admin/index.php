<?php
/*
 * Example Application
 *
 * @package Example-application
 */
error_reporting(E_ALL);
ini_set("display_errors",1);


ini_set("session.cookie_lifetime","600");
ini_set("session.gc_maxlifetime","600");

include_once 'vistas/vistas.php';
include_once 'vistas/vista_login.php';
include_once 'controladores/controlador.php';
include_once 'controladores/logincontroller.php';
include_once 'modelos/modelo_login.php';
session_start();
$view_login = new Vista_Login();
$modellog = new Modelo_login();
$controler_login = new LoginController($view_login,$modellog);
//$controler_login->checksession();
if (array_key_exists('email', $_SESSION) || array_key_exists('action', $_REQUEST) ){
	if (array_key_exists('action', $_REQUEST)){

		switch ($_REQUEST['action']) {
		    case 'login':
		        $controler_login->Procesar_login($_REQUEST["email"],$_REQUEST["password"]);
		        break;
		    case 'register':
		        $controler_login->Procesar_register($_REQUEST["email"],$_REQUEST["password"]);
		        break;
		    case 'logout':
		        $controler_login->logout();
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