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
	}
	
	public function mostrareventos($data){
		$this->smarty->assign('evento', $data);
		$this->smarty->assign('foto','imagenes/'.$data[0]['Avatar']);
		$this->smarty->display('partidas.tpl');
	}
	
	public function mostrartemas($data,$nombre){
		$this->smarty->assign('temas', $data);
		$this->smarty->assign('nombretema', $nombre);
		$this->smarty->assign('creador',$data[0]['idusuario']);
		$this->smarty->assign('idt',$data[0]['idtema']);
		$this->smarty->display('temas.tpl');
	}
	
	public function mostrarmensajes($data,$nombre,$data2){
		
		$this->smarty->assign('mensajes', $data);
		$this->smarty->assign('nombretema', $data[0]['nombretema']);
		$this->smarty->assign('user', $data[0]['nombre']);
		$this->smarty->assign('idt',$data[0]['idtema']);
		$this->smarty->assign('idu',$data[0]['idusuario']);
		$this->smarty->assign('temageneral', $data[0]['temageneral']);
		$this->smarty->display('mensajes.tpl');
	}
	
	public function mostrarnuevoX(){
		$this->smarty->assign('temageneral', $_REQUEST['tg']);
		$this->smarty->display('nuevoX.tpl');
	}
}


?>