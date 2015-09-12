<?php

require('libs/Smarty.class.php');	

class Vista{
	
	protected $smarty;
	
	public function __construct(){
		$this->smarty = new Smarty;
		$smarty->debugging = true;
	}
	
	function mostrarhome(){
		$this->smarty->display('indexforo.tpl')
	}

	function mostrartemas($temas){
		$this->smarty->assign("temas", $temas);
		$this->smarty->display('temas.tpl');
	}
}


?>