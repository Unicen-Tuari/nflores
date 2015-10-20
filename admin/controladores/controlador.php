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
          if ($_REQUEST['tabla'] == 'Noticia'){
            $cons2 = "SELECT * FROM Categoria";
            $datos2 = $this->model->query($cons2,$arreglo);
            $this->view->formfull($datos,$datos2,$_REQUEST['tabla']);
          }
          else{
				        $this->view->formreply($datos,$_REQUEST['tabla']);
          }
				  break;
			  case 'nuevacategoria':
				  $valores = $_REQUEST;
				  $imagen = $_FILES['imageToUpload'];
          $this->model->agregarcategoria($valores,$imagen);
          $cons = "SELECT * FROM Categoria";
          $datos = $this->model->query($cons,"");
          $this->view->formreply($datos,"Categoria");
				  break;
        case 'nuevanoticia':
          $valores = $_REQUEST;
          $imagen = $_FILES['imageToUpload'];
          $this->model->agregarnoticia($valores,$imagen);
          $cons = "SELECT * FROM Noticia";
          $datos = $this->model->query($cons,"");
          $cons = "SELECT * FROM Categoria";
          $datos2 = $this->model->query($cons,"");
          $this->view->formfull($datos,$datos2,"Noticia");
          break;
		  }
		}
	}
}
?>
