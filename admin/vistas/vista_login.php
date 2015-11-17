<?php

class Vista_Login extends Vista{

	protected $smarty;

	public function __construct(){
		$this->smarty = new Smarty;
		//$this->smarty->debugging = true;
	}

	function indexlogin(){
		$this->smarty->display('loginindex.tpl');
	}
}


?>
