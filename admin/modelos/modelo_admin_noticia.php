<?php
include_once "modelo_admin.php";

class Modelo_Admin_Noticia extends Modelo_Admin {
	
	
	public function borrarNoticia($idnoticia){
      try{

        $db = $this->coneccion();

        $db->beginTransaction();


        $consulta = $db->prepare("SELECT pathimagen FROM Noticia WHERE idnoticia=(?)");
        $consulta->execute(array($idnoticia));
        $urlimg = $consulta->fetch(PDO::FETCH_ASSOC);
        unlink("../".$urlimg['pathimagen']);
        
        
        $consulta = $db->prepare("DELETE FROM Noticia WHERE idnoticia = (?)");
        $consulta->execute(array($idnoticia));
        
        $db->commit();
        return "Borrada con Esito";
      }
      catch(Exception $e){
        $this->db->rollback();
        return $e;
      }

    }

    public function editarNoticia($args){
      try{
          $db = $this->coneccion();

          $db->beginTransaction();

          //INSERTO La Noticias
          $id = $args[0];
          $titulo = $args[1];
          $texto = $args[2];
          $cons = $db->prepare("UPDATE Noticia SET titulonoticia =(?),infonoticia=(?) WHERE idnoticia =(?)");
          $cons->execute(array($titulo,$texto,$id));
          $db->commit();
          return 'Editado con Exito';
      }
      catch(Exception $e){
          $this->db->rollback();
          return $e;
      }
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
				return "Agregada con Exito";
		}
		catch(Exception $e){
				$this->db->rollback();
				return $e;
		}
	}



	public function getNoticias(){
		try{
			$consulta = "SELECT * FROM Noticia";
			$datos = $this->query($consulta,array());
			return $datos;
		}
		catch(Exception $e){
				return $e;
		}
	}
	
	public function getNoticia($idnoticia){
		try{
		  $consulta = "SELECT * FROM Noticia WHERE idnoticia=(?)";
		  $datos = $this->query($consulta,array($idnoticia));
		  return $datos;
		}
		catch(Exception $e){
		  return $e;
		}
	}

}
?>