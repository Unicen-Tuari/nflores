<?php

class Controller{
    private $model;
    private $view;


    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }

	public function Analizar(){
	  if (isset($_REQUEST['action'])){
		  switch ($_REQUEST['action']) {
			case 'infoheroe':
				$heroeController = new HeroeController($this->view);
				$heroeController->formheroe($_REQUEST['heroe']);
				break;
			case 'infonav':
				if ($_REQUEST['seccion'] == 'categoria'){
					$datos = $this->model->getcategorias();
					$this->view->mostrarabout($datos);
				}
				else{
					$this->view->mostrarinfonav($_REQUEST['seccion']);
				}
				break;
			case 'infocat':
				$datos = $this->model->infoporcate($_REQUEST['idcategoria']);
        		$this->view->mostrarnoticia($datos);
        		break;
			case 'mail':
				$modelmail = new Modelo_Mail();			
				return $modelmail->sendMail($_POST);
				break;
		  }
	  }
	  else{
		$this->view->mostrarhome();
	  }
	}
}
?>
