<?php

require('libs/Smarty.class.php');	

class Vista{
	
	protected $smart;
		
	public function __construct() {
        $smart = new Smarty();
		$smart->debugging = true;
    }
	
	public function monstrarindex(){
		$this->smart->display('index.tpl');		
	}
	
}


?>