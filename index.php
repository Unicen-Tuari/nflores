<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

require('libs/Smarty.class.php');	
session_start();
$_SESSION['idusuario'] = 'nahuel';

include_once 'modelodb.php';
include_once 'vistas.php';
include_once 'controlador.php';
$model = new ModeloDB();
$view = new Vista();
$controller = new controller($model, $view);

//SI FUNCIONA COLOCAR ANTES LLAMAR AL CREADO DE COSAS O VISTA DE PARTIDAS, ETC
//if((!isset($_SESSION['user']) && ($_REQUEST['action']!=='index')) $view->mostrarforo()


if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']!=='index')
{
		if(array_key_exists('tipo', $_REQUEST)){
		$controller->Analizar($_REQUEST['action'],$_REQUEST['tipo']);
		}
		else {
			if ($_REQUEST['action'] =='mensajeAjax'){
				$controller->Ajax($_REQUEST['mensaje']);
			}
			else {
				//tipo = tema a donde insertar
				if ($_REQUEST['action'] =='insertar'){
					$controller->insertar($_REQUEST['mensaje'],$_REQUEST['tipo']);
				}
				else $view->mostrarforo();
			}
		}
	if(array_key_exists('action', $_REQUEST) && $_REQUEST['action'] == 'crear'){
		$controller->Crear($_REQUEST['tema']);
		//echo $_REQUEST['tema'];
	}
	//
	if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']== 'infoAjax'){
		$controller->Ajax();
	}
}
else {
	$view->mostrarindex();
}



?>