<?php /* Smarty version Smarty-3.1.19, created on 2014-10-17 23:22:29
         compiled from ".\templates\temas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17318543a328bc80265-12000356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a3a393c69fed29e93bbbc93d7ce75238b49733' => 
    array (
      0 => '.\\templates\\temas.tpl',
      1 => 1413580947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17318543a328bc80265-12000356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543a328bcd22f1_97520205',
  'variables' => 
  array (
    'tema' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543a328bcd22f1_97520205')) {function content_543a328bcd22f1_97520205($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<div class="row menumensajes">
	<div class="col-lg-12 seccion">
		<div class="row cabezera">
			<p><?php echo $_smarty_tpl->tpl_vars['tema']->value['nombretema'];?>
</p>
		</div>
		<?php  $_smarty_tpl->tpl_vars['tema'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tema']->_loop = false;
 $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tema']->key => $_smarty_tpl->tpl_vars['tema']->value) {
$_smarty_tpl->tpl_vars['tema']->_loop = true;
 $_smarty_tpl->tpl_vars['pid']->value = $_smarty_tpl->tpl_vars['tema']->key;
?>
			<div class="row tema">
				<div class="col-lg-2">
					<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
				</div>
				<div class="col-lg-8 textomenu">
					<a href="index.php?action=<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['tema']->value['nombretema'];?>
</p></a>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
