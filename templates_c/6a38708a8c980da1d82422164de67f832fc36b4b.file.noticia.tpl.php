<?php /* Smarty version Smarty-3.1.19, created on 2015-09-30 18:03:25
         compiled from "./templates/noticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:950364565560b18b4ba6212-54462815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a38708a8c980da1d82422164de67f832fc36b4b' => 
    array (
      0 => './templates/noticia.tpl',
      1 => 1443646983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '950364565560b18b4ba6212-54462815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560b18b4c23b79_98126447',
  'variables' => 
  array (
    'noticias' => 0,
    'noticia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560b18b4c23b79_98126447')) {function content_560b18b4c23b79_98126447($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noticia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
?>
<div class="row cuerponoticia">
  <label><?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombrecategoria'];?>
</label>
    <div class="col-lg-2">
      <img src="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['pathimagen'];?>
" class="img-responsive">
    </div>
    <div class="col-lg-8">
      <label class="titulonoticia"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulonoticia'];?>
</label>
      <p class="infonoticia"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['infonoticia'];?>
</p>
    </div>
</div>
<?php } ?>
<?php }} ?>
