<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function Analizar(){
		if (array_key_exists('action',$_REQUEST)){
		switch ($_REQUEST['action']) {
			case 'mostrartemas':
				$consulta = "SELECT * FROM temas WHERE nombretema like '".$nombre."' ;";
				$data = $this->model->query($consulta);
				$this->view->mostrartemas($data,$nombre);					
				break;
			case 'login':
				$r = '<form>
					<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>';
				echo $r;
				break;
			default:
				$this->view->mostrarhome();
		}
		}
		else $this->view->mostrarhome();
	}
}
?>