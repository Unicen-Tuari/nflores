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
		$this->smarty->assign('user',$_SESSION['user']);
		$this->smarty->display('indexforo.tpl');		
	}
	
	public function mostrareventos($data){
		$this->smarty->assign('evento', $data);
		$this->smarty->assign('foto','imagenes/'.$data[0]['Avatar']);
		$this->smarty->display('partidas.tpl');
	}
	
	public function mostrartemas($data,$nombre){
		$this->smarty->assign('temas', $data);
		$this->smarty->assign('nombretema', $nombre);
		$this->smarty->assign('idt',$data[0]['idtema']);
		$this->smarty->display('temas.tpl');
	}
	
	public function mostrarmensajes($data,$nombre){
		$this->smarty->assign('mensajes', $data);
		$this->smarty->assign('nombretema', $data[0]['nombretema']);
		$this->smarty->assign('user', $data[0]['nombre']);
		$this->smarty->assign('idt',$data[0]['idtema']);
		$this->smarty->assign('temageneral', $data[0]['temageneral']);
		$this->smarty->display('mensajes.tpl');
	}
	
}


?>