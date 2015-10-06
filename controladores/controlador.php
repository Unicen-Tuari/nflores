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
			case 'login':
				$loginController = new LoginController($this->view);
				$loginController->mostrar();
				break;
			case 'infoheroe':
				$heroeController = new HeroeController($this->view);
				$heroeController->formheroe($_REQUEST['heroe']);
				break;
			case 'infonav':
				if ($_REQUEST['seccion'] == 'categoria'){
					$cons = "SELECT * FROM Categoria";
					$valores = "";
					$datos = $this->model->query($cons,$valores);
					$this->view->mostrarabout($datos);
				}
				else{
					$this->view->mostrarinfonav($_REQUEST['seccion']);
				}
				break;
			case 'infocat':
        $cons = "SELECT * FROM Noticia n, Categoria c WHERE n.idcategoria =c.idcategoria AND c.idcategoria = ?";
        $valor = $_REQUEST['idcategoria'];
        $datos = $this->model->query($cons,$valor);
        $this->view->mostrarnoticia($datos);
        break;
		  }
	  }
	  else{
		$this->view->mostrarhome();
	  }
	}
}
?>
