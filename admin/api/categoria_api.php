<?php
require_once 'api_base.php';
require_once '../../modelos/modelo_base.php';
require_once '../modelos/modelo_admin.php';
class CategoriaApi extends ApiBase {
  private $model;
  function __construct($request){
    parent::__construct($request);
    $this->model = new Modelo_Admin();
  }
  function Categoria(){
    switch ($this->method) {
      case 'GET':
        return $this->model->getCategorias();
        break;
      case 'DELETE':
        if(count($this->args) > 0) return $this->model->deleteCategoria($this->args[0]);
        break;
      case 'POST':
        return $this->model->agregarcategoria($_POST,$_FILES["imageToUpload"]);
        break;
      default:
            return 'Verbo no soportado';
        break;
    }
  }
}
?>