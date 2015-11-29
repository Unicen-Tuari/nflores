<?php

include_once '../../modelos/modelo_base.php';

class Modelo_Admin extends Modelo_Base{


	//SUBIDA DE IMAGEN
	public function subirimagen($destino,$imagen){
		move_uploaded_file($imagen,$destino);
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
