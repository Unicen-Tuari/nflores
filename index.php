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

//SI FUNCIONA COLOCAR ANTES LLAMAR AL CREADO DE COSAS O VISTA DE PARTIDAS, ETC
if(!isset($_SESSION['user']){
	$view->mostrarforo();
}


if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']!=='index')
{
	if(array_key_exists('action', $_REQUEST) == 'crear'){
		$controller->Crear();
	}
	if(array_key_exists('action', $_REQUEST) == 'infoAjax'){
	}
	if(array_key_exists('tipo', $_REQUEST)){
	$controller->Analizar($_REQUEST['action'],$_REQUEST['tipo']);
	}
	else {$view->mostrarforo();}
}
else {
	$view->mostrarindex();
}



?>