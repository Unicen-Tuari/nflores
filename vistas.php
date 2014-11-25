<?php
class Vista{
	
	protected $smarty;
		
	public function __construct() {
        $this->smarty = new Smarty();
    }
	
	public function mostrarindex($rotacion){
		$this->smarty->assign('rotacion', $rotacion);		
		$this->smarty->display('index.tpl');		
	}
	
	public function mostrarforo(){
		$this->smarty->assign('nombre',$_SESSION['nombre']);
		$this->smarty->display('indexforo.tpl');		
		die();
	}
	
	public function mostrareventos($data){
		echo('<br>');
		print_r($data);	
		$this->smarty->assign('evento', $data);
		$this->smarty->assign('foto','imagenes/'.$data[0]['Avatar']);
		$this->smarty->display('partidas.tpl');
	}
	
	public function mostrartemas($data,$nombre){
		//print_r($data);
		$this->smarty->assign('temas', $data);
		$this->smarty->assign('nombretema', $nombre);
		$this->smarty->assign('creador',$data[0]['idusuario']);
		$this->smarty->assign('idt',$data[0]['idtema']);
		$this->smarty->display('temas.tpl');
	}
	
	public function mostrarmensajes($data){
		
		$this->smarty->assign('mensajes', $data);
		$this->smarty->assign('nombretema', $data[0]['nombretema']);
		$this->smarty->assign('user', $data[0]['nombre']);
		$this->smarty->assign('idt',$data[0]['idtema']);
		$this->smarty->assign('temageneral', $data[0]['temageneral']);
		//print_r($data);
		$this->smarty->display('mensajes.tpl');
	}
	
	public function mostrarnuevoX(){
		$this->smarty->assign('temageneral', $_REQUEST['tg']);
		$this->smarty->display('nuevoX.tpl');
	}
}


?>