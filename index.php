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


if(!isset($_SESSION['user'])) $_SESSION['user'] = 'free';

if(array_key_exists('action', $_REQUEST) && ($_REQUEST['action']=='loginAjax' or $_REQUEST['action']=='infoAjax'))
{
	$controller->Ajax();
}
/*{
	$xsql="SELECT * FROM Usuario";
	$dato=$model->query($xsql);
	print_r($dato);
	$_SESSION['idusuario']=$dato[0]['idusuario'];
	$_SESSION['nombre']=$dato[0]['nombre'];
	$_SESSION['avatar']=$dato[0]['Avatar'];
	$_SESSION['edad|']=$dato[0]['edad'];
	$_SESSION['nacion']=$dato[0]['Nacion'];
}*/

if(array_key_exists('action', $_REQUEST) && $_REQUEST['action']!=='index')
{
	if ($_SESSION['user'] != 'free')
	{
		if(array_key_exists('tipo', $_REQUEST))
		{
			if($_REQUEST['action'] == 'crear')
			{
				$controller->Crear($_REQUEST['tema']);
			}
			else
			{
				$controller->Analizar($_REQUEST['action'],$_REQUEST['tipo']);
			}
		}
		else $view->mostrarforo();
	}
	else $view->mostrarforo();
}
else 
{
	$view->mostrarindex();
}



?>