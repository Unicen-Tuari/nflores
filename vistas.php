<?php
class Vista{
	
	protected $smarty;
		
	public function __construct() {
        $this->smarty = new Smarty();
		$this->smarty->debugging = true;
    }
	
	public function mostrarindex(){
		$this->smarty->display('index.tpl');		
	}
	
	public function mostrarforo(){
		$this->smarty->display('indexforo.tpl');		
	}
	
	public function mostrartemas($data){
		print_r($data);
		$this->smarty->assign('tema', $data);
		$this->smarty->display('temas.tpl');
	}
	
}


?>