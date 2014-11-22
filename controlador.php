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
			  
				$xsql="SELECT * FROM mensajes m,temas t,usuario u WHERE (t.nombretema = '".$tema."') AND (m.idtema = t.idtema) ;";
				$xdato = $this->model->query($xsql);
				$this->view->mostrarmensajes($xdato,$tema);
			}
			else
			{
				echo $_REQUEST['idtema'];
				echo $_REQUEST['nombretema'];
				echo $_REQUEST['mensajetema'];
				echo $_REQUEST['tema'];
				/*$xsqltema="INSERT INTO temas(nombretema,idusuario,temageneral) VALUES('".$_REQUEST['nombretema']."',".$_SESSION['idusuario'].",'".$_REQUEST['tema']."');";
				$xsqlmensaje="INSERT INTO mensajes(idtema,mensaje,idusuario) VALUES(".$tema.",".$_REQUEST['mensajetema'].",".$_SESSION['idusuario'].");";
				$this->model->insertar($xsql);
			  
				$xsql="SELECT * FROM mensajes m,temas t,usuario u WHERE (nombretema like '".$tema."') AND (m.idtema = t.idtema) ;";
				$this->view->mostrarmensajes($this->model->query($xsql));*/
			}
		}
		
		
		
		//SECCION PARA AJAX Y RELACIONADO
		//MOSTRAR ALERT O MENSAJE CON AJAX CUANDO NO ESTA LOGEADO
		//
		public function Ajax(){
			
			//LOGIN AJAX
			if (isset($_REQUEST['usuario'])){
				$xsql = "SELECT * FROM Usuario U WHERE U.nombre = '".$_REQUEST['usuario']."' "; // AND U.password = '".$_REQUEST['contraseña']."'";
				$data = $this->model->query($xsql);
				
				
				//$r = array(
				//	'codigoHTML' => '<h1>SALIO!!</h1>',
				//);
				
				//$this->view->mostrarindex();
				if ($data != null)
				{
					$r = array('mensaje' => 'exito');
					$_SESSION['user'] = 'user';
				}
				else
				{
					$r = array('mensaje' => 'vacio');
					$_SESSION['user'] = 'free';
				}
			}
			else
			{
				//AJAX PARA MOSTRAR INFO PARTIDAS
				if (isset($_REQUEST['ide']))
				{
					$xsql = "SELECT * FROM eventos e WHERE e.idevento = '".$_REQUEST['ide']."'";
					$data = $this->model->query($xsql);
					
					$texto = "<img src='imagenes/".$data[0]['TIPO']."png class='imagenpartida' />";
					
					
					$r = array('info' => $texto);
					echo $texto;
				}
			}
			echo json_encode($r);
			exit();			
		}
		
		
		
		//FUNCION PARA QUERYS/MOSTRADOS
		
		public function Analizar($accion,$nombre){
			if ($accion == 'tema')
			{
				if ($nombre == 'partida'){
					$consulta = "SELECT * FROM eventos e, usuario u WHERE e.idusuario = u.idusuario";
					$data = $this->model->query($consulta);
					//print_r($data);
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