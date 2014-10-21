<?php /* Smarty version Smarty-3.1.19, created on 2014-10-21 16:28:42
         compiled from ".\templates\temas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12823544426c83299a5-73836771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a3a393c69fed29e93bbbc93d7ce75238b49733' => 
    array (
      0 => '.\\templates\\temas.tpl',
      1 => 1413901720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12823544426c83299a5-73836771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544426c837f8b1_81187303',
  'variables' => 
  array (
    'nombretema' => 0,
    'temas' => 0,
    'tema' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544426c837f8b1_81187303')) {function content_544426c837f8b1_81187303($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<div class="row menumensajes">
	<div class="col-lg-12 seccion">
		<div class="row cabezera">
			<p><?php echo $_smarty_tpl->tpl_vars['nombretema']->value;?>
</p>
		</div>
		<?php  $_smarty_tpl->tpl_vars['tema'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tema']->_loop = false;
 $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['temas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tema']->key => $_smarty_tpl->tpl_vars['tema']->value) {
$_smarty_tpl->tpl_vars['tema']->_loop = true;
 $_smarty_tpl->tpl_vars['pid']->value = $_smarty_tpl->tpl_vars['tema']->key;
?>
			<div class="row tema">
				<div class="col-lg-2">
					<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
				</div>
				<div class="col-lg-8 textomenu">
					<a href="index.php?action=mensaje&nombre=<?php echo $_smarty_tpl->tpl_vars['nombretema']->value;?>
"><p><?php echo $_smarty_tpl->tpl_vars['tema']->value['nombretema'];?>
</p></a>
				</div>
			</div>
		<?php } ?>
	</div>
	<a href="index.php?action=foro&nombre=nada">Index</a><br><br>
	<form action="accion.php?action=creartema" method="post">
		<p>Nuevo tema: <input type="text" name="nombretema"></p>
		<p>Mensaje:</p>
		<p><textarea rows="10" cols="100" name="mensajetema"></textarea></p>
		<p><input type="submit" value="Post"/></p>
	</form>
</div>
</div>
</body>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
