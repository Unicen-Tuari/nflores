<?php /* Smarty version Smarty-3.1.19, created on 2014-10-20 17:01:41
         compiled from ".\templates\partidas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3110554451a8aab1ce0-64150169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2954ae408ed80bfb821b75ba1cc737d3eb25a28e' => 
    array (
      0 => '.\\templates\\partidas.tpl',
      1 => 1413817298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3110554451a8aab1ce0-64150169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54451a8aafc076_97091652',
  'variables' => 
  array (
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54451a8aafc076_97091652')) {function content_54451a8aafc076_97091652($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>


<div class="row menumensajes">
	<div class="col-lg-4 seccion">
		<div class="row cabezera">
			<p>Partidas</p>
		</div>
		<div class="row partidascss">
		
		</div>
	</div>
	<?php  $_smarty_tpl->tpl_vars['partida'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partida']->_loop = false;
 $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['evento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partida']->key => $_smarty_tpl->tpl_vars['partida']->value) {
$_smarty_tpl->tpl_vars['partida']->_loop = true;
 $_smarty_tpl->tpl_vars['pid']->value = $_smarty_tpl->tpl_vars['partida']->key;
?>
		<div class="row">
			
		</div>
	<?php } ?>
	<div class="col-lg-8 seccion">
		<div class="row cabezera">
			<p>Informacion de la partida</p>
		</div>
		<div class="row infoeventoajax">
			
		</div>
	</div>
</div>
</div>
</body>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
