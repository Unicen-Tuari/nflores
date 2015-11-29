<?php

class LoginController extends Controller {

private $vista;
private $model;

function __construct($view,$model){
  $this->vista = $view;
  $this->model = $model;
}

function checksession(){
  session_start();
  if (isset($_SESSION['email'])) return true;
  return false;
}

function Procesar_login($email,$password){

	$usuario = $this->model->getUsuario($email);
	if ($usuario['password'] === $password){
		$_SESSION['email'] = $_REQUEST['email'];
		return "succes";
	}
	else{
		return "PassWord o Usuario Incorrecto";
	}
}

function logout(){
	session_destroy();
	return "SUCCESS";
}

function Procesar_register($email,$password){
	return $this->model->nuevoUsuario($email,$password);
}


}
?>
