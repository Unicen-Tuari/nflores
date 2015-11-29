<?php
require_once 'api_base.php';
require_once '../modelos/modelo_admin_noticia.php';
class NoticiaApi extends ApiBase {
  private $model;
  function __construct($request){
    parent::__construct($request);
    $this->model = new Modelo_Admin_Noticia();
  }
  function Noticia(){
    switch ($this->method) {
      case 'GET':
        if (isset($_REQUEST['idnoticia'])) {return $this->model->getNoticia($_REQUEST['idnoticia']);}
        else return $this->model->getNoticias();
        break;
      case 'DELETE':
        if(count($this->args) > 0) return $this->model->borrarNoticia($this->args[0]);
        break;
      case 'POST':
        return $this->model->agregarNoticia($_POST,$_FILES['imageToUpload']);
        break;
      case 'PUT':
        if(count($this->args) > 0) {return $this->model->editarNoticia($this->args);}
        else return "Error";
        break;
      case 'INFO':
        return $this->model->getNoticia();
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}
?>
