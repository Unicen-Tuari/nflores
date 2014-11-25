<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 20:57:11
         compiled from ".\templates\nuevoX.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201485473361cdb59a5-06371033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f22e8837916ce0000e7b73ce82be35e4e21d36c' => 
    array (
      0 => '.\\templates\\nuevoX.tpl',
      1 => 1416859024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201485473361cdb59a5-06371033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473361ce07a35_02304622',
  'variables' => 
  array (
    'temageneral' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473361ce07a35_02304622')) {function content_5473361ce07a35_02304622($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<br>
<br>
	<p>Nuevo Tema en <?php echo $_smarty_tpl->tpl_vars['temageneral']->value;?>
</p>
	<form action="index.php?action=crear&tipo=tema&tema=<?php echo $_smarty_tpl->tpl_vars['temageneral']->value;?>
" method="post" class="colorfondo">
		<p>Nuevo tema:<br> <input type="text" name="nombretema"></p>
		<p>Mensaje:</p>
		<p><textarea rows="10" cols="120" name="mensajetema"></textarea></p>
		<p><input type="submit" value="Post"/></p>
	</form>
	<a href="index.php?action=foro">Index</a><span id="separador">-></span><a href="index.php?action=tema&tipo=<?php echo $_smarty_tpl->tpl_vars['temageneral']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['temageneral']->value;?>
</a>
	
	
</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
