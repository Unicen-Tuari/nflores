<?php
class Controller
{
    private $model;
	private $view;
 
    public function __construct($model, $view) {
        $this->model = $model;
		$this->view = $view;
    }
	
		//SECCION PARA CREADO DE TEMAS Y MENSAJES
		public function Crear($tema){
			echo ($tema);
			echo ($_POST['mensajetema']);
			//SEPRAR PARA TEMAS Y MENSAJES
			if ($_REQUEST['tipo'] == 'mensaje'){
			  $xsql="INSERT INTO mensajes(idtema,mensaje,idusuario) VALUES(".$tema.",".$_REQUEST['mensajetema'].",".$_SESSION['idusuario'].");";
			  //$this->model->insertar($xsql);
			  //
			  echo $xsql;
			  $xsql="SELECT * FROM mensajes m,temas t,usuario u WHERE (nombretema like '".$tema."') AND (m.idtema = t.idtema) ;";
			  //$this->view->mostrarmensajes($this->model->query($xsql));
			  //
			  echo $xsql;
			}
		}
		
		
		
		//SECCION PARA AJAX Y RELACIONADO
		//MOSTRAR ALERT O MENSAJE CON AJAX CUANDO NO ESTA LOGEADO
		//
		public function Ajax(){
			$r = array(
				'codigoHTML' => '<h1>SALIO!!</h1>',
			);
			echo json_encode($r);
			exit();			
		}
		
		
		
		//FUNCION PARA QUERYS/MOSTRADOS
		
		public function Analizar($accion,$nombre){
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
				$consulta = "SELECT * FROM mensajes m,temas t,usuario u WHERE (nombretema like '".$nombre."') AND (m.idtema = t.idtema) ;";
				$data = $this->model->query($consulta);
				$this->view->mostrarmensajes($data,$nombre);
			}
		}
}
?>