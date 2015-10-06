<?php
class HeroeController extends Controller {

private $vista;

function __construct($view){
  $this->vista = $view;
}


function formheroe($heroe){
  $this->vista->formulario($heroe);
}


}
?> 
