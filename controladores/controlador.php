<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
	public function Analizar($variable){
		switch ($accion) {
			case 'mostrartemas':
				$consulta = "SELECT * FROM temas WHERE nombretema like '".$nombre."' ;";
				$data = $this->model->query($consulta);
				$this->view->mostrartemas($data,$nombre);					
				break;
			case 'infolegenda':
				$r = array(
					'codigoHTML' => '<p>algo</p>'
				);
				echo json_encode($r);
				break;
		}
	}
}
?>