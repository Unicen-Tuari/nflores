<?php
/*
 * Example Application
 *
 * @package Example-application
 */
error_reporting(E_ALL);
ini_set("display_errors",1);



include_once 'modelos/modelodb.php';
include_once 'vistas/vistas.php';
include_once 'controladores/controlador.php';

$model = new ModeloDB();
$view = new Vista();
$controller = new controller($model, $view);

if (isset($_REQUEST['action'])){
	$controller->Analizar();
}
else $view->index();



?>