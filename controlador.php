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
		
			if ($_REQUEST['tipo'] == 'mensaje'){
				$consulta = "SELECT idtema FROM temas WHERE nombretema = '".$tema."' ;";
				$data = $this->model->query($consulta);
				$xsql="INSERT INTO mensajes(idtema,mensaje,idusuario) VALUES(".$data[0]['idtema'].",'".$_REQUEST['mensajetema']."',".$_SESSION['idusuario'].");";
				$this->model->insertar($xsql);
				//echo $xsql;
			  
				$xsql="SELECT * FROM mensajes m,temas t,usuario u WHERE (nombretema = '".$tema."') AND (m.idtema = t.idtema) ;";
				$xdato = $this->model->query($xsql);
				$this->view->mostrarmensajes($xdato,$tema);
			}
			else
			{/*
				echo $_REQUEST['idtema'];
				echo $_REQUEST['nombretema'];
				echo $_REQUEST['mensajetema'];
				echo $_REQUEST['tema'];*/
				$xsqltema="INSERT INTO temas(nombretema,idusuario,temageneral) VALUES('".$_REQUEST['nombretema']."',".$_SESSION['idusuario'].",'".$_REQUEST['tema']."');";
				$xidtc = "SELECT idtema FROM temas WHERE nombretema = '".$_REQUEST['nombretema']."'";
				$data = $this->model->query($xidtc);
				$xsqlmensaje="INSERT INTO mensajes(idtema,mensaje,idusuario) VALUES(".$data[0]['idtema'].",".$_REQUEST['mensajetema'].",".$_SESSION['idusuario'].");";
				$this->model->insertar($xsqltema);
			  
				$xsql="SELECT * FROM mensajes m,temas t,usuario u WHERE (nombretema like '".$$_REQUEST['nombretema']."') AND (m.idtema = t.idtema) ;";
				$this->view->mostrarmensajes($this->model->query($xsql));
			}
		}
		
		
		
		//SECCION PARA AJAX Y RELACIONADO
		//MOSTRAR ALERT O MENSAJE CON AJAX CUANDO NO ESTA LOGEADO
		//
		public function Ajax(){
			$xsql = "SELECT  Nombre,comentarios,tipo FROM EVENTOS WHERE idevento = ".$_REQUEST['idevento']." ;";
			$dato = $this->model->query($xsql);
			$r = array(
				'codigoHTML' => "<p>$dato[0]['comentarios']</p><p>$dato[0]['Nombre']</p><p>$dato[0]['Tipo']</p>",
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