<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
		//funcion para analisis general
		public function Analizar($pagina){
			if ($pagina == 'foro'){
				$this->view->mostrarforo();
			};
			if ($pagina == 'estrategias'){
				$consulta = "SELECT * FROM temas WHERE nombretema like '".$pagina."' ;";
				$data = $this->model->query($consulta);
				$this->view->mostrartemas($data);
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