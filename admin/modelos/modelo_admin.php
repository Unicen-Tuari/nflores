<?php

include_once '../../modelos/modelo_base.php';

class Modelo_Admin extends Modelo_Base{	

    public function agregarcategoria($valores,$imagen){
        try{
			$db = $this->coneccion();
			//Copio la imagen seleccionada
			$carpeta = 'imagenes/'.uniqid().$imagen["name"][0];
			$this->subirimagen("../".$carpeta,$imagen['tmp_name'][0]);
            $db->beginTransaction();

			//INSERTO LA Categoria
            $insercion = $db->prepare("INSERT INTO Categoria (nombrecategoria) VALUES (?)");
            $insercion->execute(array($valores['nombrecategoria']));
            
			//CONSULTO ID DE CATEGORIA AGREGADO PARA INSERTAR NOTICIA
			$cons = "SELECT idcategoria FROM Categoria WHERE nombrecategoria LIKE '".$valores['nombrecategoria']."'";
			$idcat = $this->query($cons,array());
			$titulo = $valores['titulonoticia'];
			$texto = $valores['informacion'];
            $insercionnoticia = $db->prepare("INSERT INTO Noticia(idcategoria,titulonoticia,infonoticia,pathimagen) VALUES (?,?,?,?)");
            $insercionnoticia->execute(array($idcat[0]['idcategoria'],$titulo,$texto,$carpeta));
            $db->commit();
			return 'SUCCESS';
        }
        catch(Exception $e){
            $this->db->rollback();
			return $e;
        }
    }


		//SUBIDA DE IMAGEN
		public function subirimagen($destino,$imagen){
			move_uploaded_file($imagen,$destino);
		}



		public function agregarnoticia($valores,$imagen){
			try{
					$db = $this->coneccion();
					//Copio la imagen seleccionada
					$carpeta = 'imagenes/'.uniqid().$imagen["name"][0];
					$this->subirimagen("../".$carpeta,$imagen['tmp_name'][0]);

					$db->beginTransaction();

					//INSERTO La Noticias
					$titulo = $valores['titulonoticia'];
					$texto = $valores['informacion'];
					$cons = $db->prepare("INSERT INTO Noticia(idcategoria,titulonoticia,infonoticia,pathimagen) VALUES (?,?,?,?)");
					$cons->execute(array($valores['idcategoria'],$titulo,$texto,$carpeta));
					$db->commit();
					return 'SUCCESS';
			}
			catch(Exception $e){
					$this->db->rollback();
					return $e;
			}
		}

		public function getCategorias(){
			try{
				$consulta = "SELECT * FROM Categoria";
				$datos = $this->query($consulta,array());
				return $datos;
			}	
			catch(Exception $e){
					return $e;
			}		
		}

		public function getNoticias(){
			try{
				$consulta = "SELECT * FROM Categoria, Noticia ";
				$datos = $this->query($consulta,array());
				return $datos;
			}	
			catch(Exception $e){
					return $e;
			}		
		}

		public function deleteCategoria($idcat){
			try {
				$consulta = "DELETE FROM categoria WHERE idcategoria = ?";
				$datos = $this->query($consulta,array($idcat));
				return "Success";
				
			} catch (Exception $e) {
				return $e;
			}
		}


		public function getUsuario($email){
			try{
				$consulta = "SELECT email,password FROM Usuario Where email LIKE '(?)'";
				$datos = $this->query($consulta,array($email));
				return $datos->fetch(PDO::FETCH_ASSOC);
			}
			catch(Exception $e){
				return $e;
			}
		}
}

?>
