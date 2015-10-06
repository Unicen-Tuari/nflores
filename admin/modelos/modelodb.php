<?php

class ModeloDB{

	private $user = 'root';
	private $pass = 'root';
	private $host = 'localhost';
	private $db = 'dbForum';
	protected $conn = null;

	//protected abstract function carga();//????


	protected function conectar(){
		$conn = null;
		try{
			$conn = new PDO(
				"mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass
			);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
		$this->conn = $conn;
		return $conn;
	}


	public function coneccion(){
		if ($this->conn == null)
			$this->conectar();
		return $this->conn;
	}


	public function query($sql,$arreglo){
		$conn = $this->coneccion();
		try{
			$resultado = $conn->prepare($sql);
			$resultado->execute(array($arreglo));
			if(!$resultado){
				die(print($conn->errorInfo()));
			}

			$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

			return $data;
		}
		catch (Exeption $e){
			return "ERROR";
		}
	}

    public function agregarcategoria($valores,$imagen){
        try{
						$db = $this->coneccion();
						//Copio la imagen seleccionada
						$carpeta = 'imagenes/'.uniqid().$imagen["name"][0];
						$this->subirimagen("../".$carpeta,$imagen['tmp_name'][0]);
            //move_uploaded_file($imagen['tmp_name'][0], "../".$carpeta);
            $db->beginTransaction();

						//INSERTO LA Categoria
            $insercion = $db->prepare("INSERT INTO Categoria (nombrecategoria) VALUES (?)");
            $insercion->execute(array($valores['nombrecategoria']));

						//CONSULTO ID DE CATEGORIA AGREGADO PARA INSERTAR NOTICIA
						$cons = "SELECT idcategoria FROM Categoria WHERE nombrecategoria LIKE '".$valores['nombrecategoria']."'";
						$arreglo = "";
						$idcat = $this->query($cons,$arreglo);
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
}

?>
