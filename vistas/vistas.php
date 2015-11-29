<?php

require('libs/Smarty.class.php');

class Vista{

	protected $smarty;

	public function __construct(){
		$this->smarty = new Smarty;
		//$this->smarty->debugging = true;
	}

	function mostrarhome(){
        $this->smarty->display('indexforo.tpl');
	}

	function mostrarabout($categorias){
		$this->smarty->assign("categorias", $categorias);
		$this->smarty->display('about.tpl');
	}

	function mostrarLogin(){
	    $this->smarty->display('loginform.tpl');
	}

	function mostrarinfonav($seccion){
		$this->smarty->display($seccion.'.tpl');
	}

	function formulario($heroe){
		$form = 'form'.$heroe.'.tpl';
		$this->smarty->display($form);
	}

	function mostrarnoticia($datos){
		$this->smarty->assign("noticias",$datos);
		$this->smarty->display('noticia.tpl');
	}

}


?>
