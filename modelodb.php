<?php

class ModeloDB{
	
	private $user = 'root';
	private $pass = '';
	private $host = 'localhost';
	private $db = 'web2';
	protected $conn = null;
	
	protected function conectar(){
		try{
			$this->conn = new PDO(
				"mysql:host=$this->host;dbname=$this->db",
				$this->user,
				$this->pass
			);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
		return $this->conn;
	}

	
	public function coneccion(){
		if ($this->conn == null)
			$this->conectar();
		return $this->conn;	
	}
	
	
	public function query($sql){
	
		$this->conn = $this->coneccion();		
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($this->conn->errorInfo()));
		}
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
		var_dump($data);
		return $data;
		
	}
	 
	
}
?>