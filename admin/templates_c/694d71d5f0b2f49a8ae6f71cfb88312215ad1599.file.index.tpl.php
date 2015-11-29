<?php /* Smarty version Smarty-3.1.19, created on 2015-11-29 19:15:15
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130645621548aac3147-90824552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '694d71d5f0b2f49a8ae6f71cfb88312215ad1599' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1448820862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130645621548aac3147-90824552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5621548ab9dd89_14374121',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5621548ab9dd89_14374121')) {function content_5621548ab9dd89_14374121($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<body>
<div class="container columna">
<img src="imagenes/Portada_main2.png" class="img-responsive imagenteam"/>
    <div class="row titulo col-lg-12">
        Adminstrador
    </div>
    <div class="row">
        <div class="col-lg-12 buscador">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Buscar.. <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a onclick="inforequest('Categoria')">Categorias</a></li>
                <li><a onclick="inforequest('Noticia')">Noticia</a></li>
                <li><a onclick="inforequest('Usuario')">Usuarios</a></li>
              </ul>
              <button type="button" class="btn btn-success" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>
    <div class="row huecotabla">
      <div id="titulo-tabla" class="col-lg-12">
      </div>
      <div class="table-responsive" id="tablainfo">
      </div>
      <div id="createform" class="col-lg-12">
      </div>
    </div>
    <div class="modal fade" id="modalNot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modaltitle">Id</h4><h4 class="modal-title" id="modalidnot">Error</h4>
            <h4 class="modaltitle">Titulo</h4><textarea class="modal-title" id="modaltitulo">Error</textarea>
            <h4 class="modaltitle">Id categoria</h4><h4 class="modal-title" id="modalidcat">Error</h4>
          </div>
          <div class="modal-body">
            <textarea id="modalbody" rows="10" cols="75"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="salvarNoticia()">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4>Id categoria:</h4>
            <textarea id="idcat" rows="1" cols="10" disabled></textarea>
            <h4>Titulo Categoria: </h4>            
          </div>
          <div class="modal-body">
            <textarea class="modal-title" id="titulocat">Error</textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="salvarCategoria()">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
