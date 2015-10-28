<?php
require_once 'categoria_api.php';
require_once 'noticia_api.php';


switch ($_REQUEST['parametros']) {
	case 'Categoria':
		$categoriaAPI = new CategoriaAPI($_REQUEST['parametros']);
		echo $categoriaAPI->processAPI();
		break;
	case 'Noticia':
		$noticiaAPI = new NoticiaAPI($_REQUEST['parametros']);
		echo $noticiaAPI->processAPI();
		break;
	
	default:
		echo processAPI();
		break;
}
?>