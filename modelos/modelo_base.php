<?php

class Modelo_Base{

private $user = 'root';
	private $pass = '';
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
}
?>