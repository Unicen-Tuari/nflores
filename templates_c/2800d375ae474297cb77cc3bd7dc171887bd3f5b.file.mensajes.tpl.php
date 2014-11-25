<?php /* Smarty version Smarty-3.1.19, created on 2014-11-25 23:51:18
         compiled from ".\templates\mensajes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13256544508591198d5-56040169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2800d375ae474297cb77cc3bd7dc171887bd3f5b' => 
    array (
      0 => '.\\templates\\mensajes.tpl',
      1 => 1416955875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13256544508591198d5-56040169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544508591b1e79_30518099',
  'variables' => 
  array (
    'nombretema' => 0,
    'mensajes' => 0,
    'mensaje' => 0,
    'temageneral' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544508591b1e79_30518099')) {function content_544508591b1e79_30518099($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<button class="login" onclick="logout()">Logout</button>
		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezeramensaje">
					<h4><?php echo $_smarty_tpl->tpl_vars['nombretema']->value;?>
</h4>
				</div>
				<?php  $_smarty_tpl->tpl_vars['mensaje'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mensaje']->_loop = false;
 $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mensajes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mensaje']->key => $_smarty_tpl->tpl_vars['mensaje']->value) {
$_smarty_tpl->tpl_vars['mensaje']->_loop = true;
 $_smarty_tpl->tpl_vars['pid']->value = $_smarty_tpl->tpl_vars['mensaje']->key;
?>
					<div class="row colorfondo">
						<div class="col-lg-2">
							<img src="imagenes/Portada_perfil.png"/ class="fotoperfil">
							<h5><?php echo $_smarty_tpl->tpl_vars['mensaje']->value['nombre'];?>
</h5>
						</div>
						<div class="col-lg-8 textomenu" id="<?php echo $_smarty_tpl->tpl_vars['mensaje']->value['idmensaje'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['mensaje']->value['mensaje'];?>

						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<a href="index.php?action=foro">Index</a><span id="colorrojo">-></span><a href="index.php?action=tema&tipo=<?php echo $_smarty_tpl->tpl_vars['temageneral']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['temageneral']->value;?>
</a>
		<br>
		<form action="index.php?action=crear&tipo=mensaje&tema=<?php echo $_smarty_tpl->tpl_vars['nombretema']->value;?>
" method="POST">
			<p id="colorrojo">Mensaje Nuevo:</p>
			<p><textarea rows="10" cols="100" name="mensajetema"></textarea></p>
			<p><input type="submit" value="Post"/></p>
		</form>
</div>	
</body>
  

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
