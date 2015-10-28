<?php
require_once 'api_base.php';
require_once '../../modelos/modelo_base.php';
require_once '../modelos/modelo_admin.php';
class NoticiaApi extends ApiBase {
  private $model;
  function __construct($request){
    parent::__construct($request);
    $this->model = new Modelo_Admin();
  }
  function Noticia(){
    switch ($this->method) {
      case 'GET':
        return $this->model->getNoticias();
        break;
      case 'DELETE':
        if(count($this->args) > 0) return $this->model->borrarTarea($this->args[0]);
        break;
      case 'POST':
        if(isset($_POST['tarea'])) return $this->model->agregarTarea($_POST['tarea']);
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}
?>