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
				$data = $this->model->query($xsql);
				$this->view->mostrarmensajes($data,$tema);
			}
			
			if ($_REQUEST['tipo'] == 'tema')
			{
				$xsqltema = "INSERT INTO temas(nombretema,idusuario,temageneral) VALUES('".$_REQUEST['nombretema']."',".$_SESSION['idusuario'].",'".$_REQUEST['tema']."');";
				$this->model->insertar($xsqltema);
				
				$xsql= "SELECT idtema FROM temas WHERE nombretema = '".$_REQUEST['nombretema']."'";
				$data = $this->model->query($xsql);
				$xsql = "INSERT INTO mensajes(idtema,mensaje,idusuario) VALUES(".$data[0]['idtema'].",'".$_REQUEST['mensajetema']."',".$_SESSION['idusuario'].");";
				
				$this->model->insertar($xsql);
				
				$xsqltema ="SELECT * FROM temas WHERE temageneral ='".$_REQUEST['tema']."' ";
				
				$data = $this->model->query($xsqltema);
				
				$this->view->mostrartemas($data,$tema);
			}
		}
		
		
		
		//SECCION PARA AJAX Y RELACIONADO
		//MOSTRAR ALERT O MENSAJE CON AJAX CUANDO NO ESTA LOGEADO
		//
		public function Ajax(){
			
			//LOGIN AJAX
			if (!isset($_SESSION['idusuario']))
			{
				$xsql = "SELECT * FROM Usuario U WHERE U.nombre = '".$_REQUEST['usuario']."' AND U.contrasena = '".$_REQUEST['contraseña']."' ";
				$data = $this->model->query($xsql);
				
				if ($data != null)
				{	
					$r = array('mensaje' => 'Logeado con exito!');
					//funcion con todos los datos en $_session
					print_r($data);
					$_SESSION['idusuario'] = $data[0]['idusuario'];
					$_SESSION['nombre'] = $data[0]['nombre'];
					$_SESSION['avatar'] = $data[0]['Avatar'];
					$_SESSION['edad'] = $data[0]['edad'];
					$_SESSION['nacion'] = $data[0]['Nacion'];
					$_SESSION['email'] = $data[0]['Email'];
				}
				else					
				{
					$r = array('mensaje' => 'Usuario o Contraseña Incorrecta');
				}
			}
				//AJAX PARA MOSTRAR INFO PARTIDAS
			if (isset($_REQUEST['idevento']))
			{
				$xsql = "SELECT * FROM eventos e ,usuario u WHERE e.idevento = ".$_REQUEST['idevento']." ";
				$data = $this->model->query($xsql);				
					
				$r = array(
							'info' => $data[0]['comentarios'],
							'cola'=> $data[0]['Lista'],
							'pass' => $data[0]['Password'],
							'creador' =>$data[0]['nombre']
							);
			}
			else
			{
				$r = array('mensaje' => 'Ya estas logeado');	
			}
			
			echo json_encode($r);
			exit();			
		}
		
		
		
		//FUNCION PARA QUERYS/MOSTRADOS
		
		public function Analizar($accion,$nombre){
			if ($accion == 'tema')
			{
				if ($nombre == 'partida'){
					$consulta = "SELECT u.idusuario, e.Nombrepartida, e.Tipo, e.Password,e.idevento ,u.nombre, u.Avatar FROM eventos e, usuario u WHERE e.idusuario = u.idusuario";
					$data = $this->model->query($consulta);
					//print_r($data);
					$this->view->mostrareventos($data);
				}
				else{
					$consulta = "SELECT * FROM temas t, usuario u WHERE temageneral = '".$nombre."' ;";
					$data = $this->model->query($consulta);
					$this->view->mostrartemas($data,$nombre);
				}
			}
			
			if ($accion == 'mensaje'){
				$consulta = "SELECT * FROM mensajes m,temas t,usuario u WHERE nombretema = '".$nombre."' AND m.idtema = t.idtema ";
				$data = $this->model->query($consulta);
				echo($consulta);
				$this->view->mostrarmensajes($data,$nombre);
			}
			
			if ($accion == 'nuevo')
			{
				$this->view->mostrarnuevoX();
			}
		}
}
?>