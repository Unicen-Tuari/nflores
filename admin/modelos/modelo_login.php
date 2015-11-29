<?php
include_once '../modelos/modelo_base.php';

class Modelo_Login extends Modelo_Base{

	public function getUsuario($email){
		try{
			$consulta = "SELECT email,password FROM Usuario Where email LIKE (?)";
			$valores = array($email);
			$datos = $this->query($consulta,$valores);
			return $datos[0];
		}
		catch(Exception $e){
			return $e;
		}
	}

	public function nuevoUsuario($email,$password){
		try {
			$consulta = "INSERT INTO usuario(email,password) VALUES (?,?)";
			$valores = array($email, $password);			
			$this->query($consulta,$valores);
			return "Success";			
		} catch (Exception $e) {
			return $e;
		}
	}
}

?>
