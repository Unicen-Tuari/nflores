<?php

class LoginController extends Controller {

private $vista;
private $model;

function __construct($view,$model){
  $this->vista = $view;
  $this->model = $model;
}



function Procesar_login($email,$password){
	$usuario = $this->model->getUsuario($email);
	//chequeo usuaro['pass'] con el pass pasado y devolver

	if ($usuario['password'] == $password){
		session_start();
		$_SESSION['email'] = $_REQUEST['email'];
		die();
		//exit;
	}
	else{
		return "PassWord o Usuario Incorrecto";
	}

	$this->view->index();
}

function logout(){
	session_start();
	session_destroy();
	return "success";
}

function Procesar_register($email,$password){
	return $this->model->nuevoUsuario($email,$password);
}


}
?> 
