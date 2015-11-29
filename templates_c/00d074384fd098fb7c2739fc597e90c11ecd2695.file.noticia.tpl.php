<?php /* Smarty version Smarty-3.1.19, created on 2015-11-29 21:16:16
         compiled from ".\templates\noticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27329563e7335a52261-07468278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00d074384fd098fb7c2739fc597e90c11ecd2695' => 
    array (
      0 => '.\\templates\\noticia.tpl',
      1 => 1448828113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27329563e7335a52261-07468278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563e7335a98771_52588321',
  'variables' => 
  array (
    'noticias' => 0,
    'noticia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563e7335a98771_52588321')) {function content_563e7335a98771_52588321($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['noticias']->value) {?>
	<?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noticia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
?>
	<div class="row cuerponoticia">
	  
	    <div class="col-lg-2">
	      <img src="admin/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['pathimagen'];?>
" class="img-responsive" id="imgpost">
	    </div>
	    <div class="col-lg-8">
	      <label class="titulonoticia"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulonoticia'];?>
</label>
	      <label id="categoria"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['nombrecategoria'];?>
</label>
	      <hr>
	      <p class="infonoticia"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['infonoticia'];?>
</p>
	    </div>
	</div>
	<hr>
	<?php } ?>
<?php } else { ?>
	<div class="row cuerponoticia">	  
	    <h4 id="textoerror">Sin Noticias por ahora..</h4>
	</div>
<?php }?><?php }} ?>
