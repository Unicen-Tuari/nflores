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
		public function Analizar($accion,$nombre){
			if ($accion == 'foro'){
				$this->view->mostrarforo();
			};
			if ($accion == 'tema'){
				if ($nombre == 'partida'){
					$consulta = "SELECT * FROM eventos WHERE tipo like '".$nombre."' ;";
					$data = $this->model->query($consulta);
					$this->view->mostrareventos($data);
				}
				else{
					$consulta = "SELECT * FROM temas WHERE temageneral like '".$nombre."' ;";
					$data = $this->model->query($consulta);
					$this->view->mostrartemas($data,$nombre);
				}
			}
			if ($accion == 'mensaje'){
				//SELECT * FROM mensajes m,temas t WHERE (temageneral like 'estrategias') AND (m.idtema = t.idtema) ;
				$consulta = "SELECT * FROM mensajes m,temas t,usuario u WHERE (temageneral like '".$nombre."') AND (m.idtema = t.idtema) ;";
				$data = $this->model->query($consulta);
				$this->view->mostrarmensajes($data,$nombre);
			}
		}
}
?>