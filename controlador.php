<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
		public function mensajes (){
			$this->view->mostrar_mensajes($this->model->data);
		}
		public function eventos (){
			$this->view->mostrar_eventos($this->model->data);
		}
		public function temas (){
			$this->view->mostrar_temas($this->model->data);
		}
		//funcion para analisis general
		public function Analizar($pagina){
			if ($pagina = 'foro'){
				$this->view->mostrarforo();
				die();
			}
			if ($pagina = 'estrategias'){
				$consulta = "SELECT * FROM temas WHERE nombretema like '".$pagina."' ;";
				$data = $this->model->query($consulta);
				$this->view->mostrartemas($data);
				die();
			}
			/*if ($pagina = 'builds'){
				$this->model->query();
				$this->view->mostrar();
			}
			if ($pagina = 'chat'){
				$this->model->query();
				$this->view->mostrar();
			}
			if ($pagina = 'campeones'){
				$this->model->query();
				$this->view->mostrar();
			}
			if ($pagina = 'bugs'){
				$this->model->query();
				$this->view->mostrar();
			}
			if ($pagina = 'partidas'){
				$this->model->query();
				$this->view->mostrar();
			}
			if ($pagina = 'eventos'){
				$this->model->query();
				$this->view->mostrar();
			}*/
		}
		
		//public function analizartemas(){}
}
?>