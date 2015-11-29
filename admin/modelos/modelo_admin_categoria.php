<?php
include_once "modelo_admin.php";

class Modelo_Admin_Categoria extends Modelo_Admin {
	
	
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
            
			return 'Agregada con Exito';
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
		
		
	public function deleteCategoria($idcat){
		try{

	        $db = $this->coneccion();

	        $db->beginTransaction();

	        $consulta = $db->prepare("DELETE FROM Categoria WHERE idcategoria = (?)");
	        $consulta->execute(array($idcat));
	        $db->commit();
	        return "Borrada con Exito";
	      }
	      catch(Exception $e){
	        $this->db->rollback();
	        return $e;
	      }
	}

	public function editarCategoria($args){
		try {
			
			$db = $this->coneccion();

			$db->beginTransaction();

			//INSERTO La Categoria
			$id = $args[0];
			$titulo = $args[1];
			$cons = $db->prepare("UPDATE Categoria SET nombrecategoria =(?) WHERE idcategoria =(?)");
			$cons->execute(array($titulo,$id));
			$db->commit();
			return 'Edición con exito';			
		} catch (Exception $e) {
			return $e;
		}
	}

}
?>