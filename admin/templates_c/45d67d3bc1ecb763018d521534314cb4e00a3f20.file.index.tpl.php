<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 23:21:38
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169496246656031af02837b4-54623638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45d67d3bc1ecb763018d521534314cb4e00a3f20' => 
    array (
      0 => './templates/index.tpl',
      1 => 1443129696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169496246656031af02837b4-54623638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56031af02ecec3_07729409',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56031af02ecec3_07729409')) {function content_56031af02ecec3_07729409($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<div class="container">
    <div class="row titulo">
        
    </div>
    <div class="row"> 
        <div class="col-lg-12">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Buscar..
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a onclick="inforequest('Categoria')">Categorias</a></li>
                <li><a onclick="inforequest('Noticia')">Noticia</a></li>
                <li><a onclick="inforequest('Usuario')">Usuarios</a></li>
              </ul>
            </div>
        </div>
    </div>
	<div id="huecoreply" class="col-lg-9">
	</div>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
