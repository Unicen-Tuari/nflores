<?php /* Smarty version Smarty-3.1.19, created on 2014-11-26 00:01:20
         compiled from ".\templates\temas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12823544426c83299a5-73836771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a3a393c69fed29e93bbbc93d7ce75238b49733' => 
    array (
      0 => '.\\templates\\temas.tpl',
      1 => 1416956474,
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

<button class="login" onclick="logout()">Logout</button>
<div class="row menumensajes">
	<div class="col-lg-12 seccion">
		<div class="row cabezera">
			<h4><?php echo $_smarty_tpl->tpl_vars['nombretema']->value;?>
</h4>
		</div>
		<?php  $_smarty_tpl->tpl_vars['tema'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tema']->_loop = false;
 $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['temas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tema']->key => $_smarty_tpl->tpl_vars['tema']->value) {
$_smarty_tpl->tpl_vars['tema']->_loop = true;
 $_smarty_tpl->tpl_vars['pid']->value = $_smarty_tpl->tpl_vars['tema']->key;
?>
			<div class="row colorfondo">
				<div class="col-lg-2">
					<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
				</div>
				<div class="col-lg-8 textomenu">
					<a href="index.php?action=mensaje&tipo=<?php echo $_smarty_tpl->tpl_vars['tema']->value['nombretema'];?>
"><h5><?php echo $_smarty_tpl->tpl_vars['tema']->value['nombretema'];?>
</h5></a>
				</div>
			</div>
		<?php } ?>
	</div>
	<a href="index.php?action=nuevo&tipo=tema&tg=<?php echo $_smarty_tpl->tpl_vars['nombretema']->value;?>
"><button>Nuevo Tema</button></a>
	<br>
	<br>
	<a href="index.php?action=foro" id="pathway">Index</a>
</div>
</div>
</body>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
