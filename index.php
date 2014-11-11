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


if((!isset($_SESSION['user'])) && ($_REQUEST['action']!=='index'))
{
	$xsql="SELECT * FROM Usuario";
	$dato=$model->query($xsql);
	print_r($dato);
	$_SESSION['idusuario']=$dato[0]['idusuario'];
	$_SESSION['nombre']=$dato[0]['nombre'];
	$_SESSION['avatar']=$dato[0]['Avatar'];
	$_SESSION['edad']=$dato[0]['edad'];
	$_SESSION['nacion']=$dato[0]['Nacion'];
}


if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']!=='index')
{
	if(array_key_exists('tipo', $_REQUEST))
	{
		if($_REQUEST['action'] == 'crear')
		{
			$controller->Crear($_REQUEST['tema']);
			//echo $_REQUEST['tema'];
		}
		$controller->Analizar($_REQUEST['action'],$_REQUEST['tipo']);
		}
	else {
		if ($_REQUEST['action'] =='mensajeAjax'){
			//SEPARAR AJAX EN ARCHIVO APARTE YA QUE NO SIEMPRE ENTRAR A PARTIDAS
			$controller->Ajax();
		}
		else {
			//tipo = tema a donde insertar
			if ($_REQUEST['action'] =='insertar'){
				$controller->insertar($_REQUEST['mensaje'],$_REQUEST['tipo']);
			}
			else $view->mostrarforo();
		}
	}
	else $view->mostrarforo();
	
	//
	if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']== 'infoAjax'){
		$controller->Ajax();
	}
}
else {
	$view->mostrarindex();
}



?>