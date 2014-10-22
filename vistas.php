<?php
class Vista{
	
	protected $smarty;
		
	public function __construct() {
        $this->smarty = new Smarty();
    }
	
	public function mostrarindex(){
		$this->smarty->display('index.tpl');		
	}
	
	public function mostrarforo(){
		$this->smarty->display('indexforo.tpl');		
	}
	
	public function mostrareventos($data){
		$this->smarty->assign('evento', $data);
		$this->smarty->display('partidas.tpl');
	}
	
	public function mostrartemas($data,$nombre){
		$this->smarty->assign('temas', $data);
		$this->smarty->assign('nombretema', $nombre);
		$this->smarty->assign('idt',$data[0]['idtema']);
		var_dump($data);
		$this->smarty->display('temas.tpl');
	}
	
	public function mostrarmensajes($data,$nombre){
		$this->smarty->assign('mensajes', $data);
		$this->smarty->assign('nombretema', $nombre);
		$this->smarty->assign('idt',$data[0]['idtema']);
		var_dump($data);
		$this->smarty->display('mensajes.tpl');
	}
	
}


?>