<?php
require_once 'categoria_api.php';
require_once 'noticia_api.php';
require_once 'api_base.php';

$route = substr($_REQUEST["parametros"], 0, 3);
switch ($route) {
	case 'Cat':
		$categoriaAPI = new CategoriaAPI($_REQUEST['parametros']);
		echo $categoriaAPI->processAPI();
		break;
	case 'Not':
		$noticiaAPI = new NoticiaAPI($_REQUEST['parametros']);
		echo $noticiaAPI->processAPI();
		break;
}

?>