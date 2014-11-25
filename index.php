<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

require('libs/Smarty.class.php');	
session_start();

include_once 'modelodb.php';
include_once 'vistas.php';
include_once 'controlador.php';
$model = new ModeloDB();
$view = new Vista();
$controller = new controller($model, $view);

print_r($_SESSION);
if(array_key_exists('action', $_REQUEST) && ($_REQUEST['action']=='loginAjax' or $_REQUEST['action']=='infoAjax'))
{
	$controller->Ajax();
}
if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']=='logout')
{
	unset($_SESSION['idusuario']);
	$view->mostrarforo();
}

if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']!=='index')
{
	if (isset($_SESSION['idusuario']))
	{
				
			if($_REQUEST['action'] == 'crear') $controller->Crear($_REQUEST['tema']);
			
			if($_REQUEST['action'] == 'foro') $view->mostrarforo();
			
			if(isset($_REQUEST['tipo'])) $controller->Analizar($_REQUEST['action'],$_REQUEST['tipo']);
			
			
	}
	else $view->mostrarforo();
}
else 
{
	$xsql = "SELECT * FROM Rotacion R WHERE R.rotacion = 1";
	$data = $model->query($xsql);
	$view->mostrarindex($data);
}



?>