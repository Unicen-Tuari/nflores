<?php /* Smarty version Smarty-3.1.19, created on 2015-09-23 23:34:42
         compiled from "./templates/formcategoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:646995656031af255a643-30902755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f9625308f08dfcf07e6aebc4e566e2ac6ab88af' => 
    array (
      0 => './templates/formcategoria.tpl',
      1 => 1442960608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '646995656031af255a643-30902755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56031af2628fc4_60971942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56031af2628fc4_60971942')) {function content_56031af2628fc4_60971942($_smarty_tpl) {?><table class="table-hover tablaheroe">
	<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
		<tr>
			<td>Nombre Categoria: </td>
			<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombrecategoria'];?>
</td>
		</tr>
		<tr>
			<td>Id categoria: </td>
			<td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['idcategoria'];?>
</td>
		</tr>
	<?php } ?>
</table>
<?php }} ?>
