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
		  }
		}
	}
}
?>
