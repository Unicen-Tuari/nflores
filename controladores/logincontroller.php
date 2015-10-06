<?php
class LoginController extends Controller {

private $vista;
function __construct($view){
  $this->vista = $view;
}


function mostrar(){
  $this->vista->mostrarLogin();
}


}
?> 
