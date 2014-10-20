<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

require('libs/Smarty.class.php');	

include_once 'modelodb.php';
include_once 'vistas.php';
include_once 'controlador.php';
$model = new ModeloDB();
$view = new Vista();
$controller = new controller($model, $view);

if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']!=='index')
{
  $controller->Analizar($_REQUEST['action'],$_REQUEST['nombre']);
}
else {
	$view->mostrarindex();
}



?>