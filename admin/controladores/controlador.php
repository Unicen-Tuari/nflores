<?php

class Controller{
    private $model;
    private $view;


    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }

	public function Analizar(){
		if (array_key_exists('action',$_REQUEST)){
		  switch ($_REQUEST['action']) {
			  case 'login':
				  $loginController = new LoginController($this->view);
				  $loginController->mostrar();
				  break;
			  case 'datarequest':
				  $cons = "SELECT * FROM ".$_REQUEST['tabla'];
				  $arreglo = "";
				  $datos = $this->model->query($cons,$arreglo);
          //var_dump($datos);
				  $this->view->formreply($datos,$_REQUEST['tabla']);
				  break;
			  case 'nuevacategoria':
				  $valores = $_REQUEST;
				  $imagen = $_FILES['imageToUpload'];
          $this->model->agregarcategoria($valores,$imagen);
          $this->view->index();
				  break;
        case 'nuevanoticia':
          $valores = $_REQUEST;
          $imagen = $_FILES['imageToUpload'];
          $this->model->agregarnoticia($valores,$imagen);
          $this->view->index();
          break;
		  }
		}
		else{$this->view->index();}
	}
}
?>
