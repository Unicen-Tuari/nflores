<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 22:40:49
         compiled from "./templates/formCategoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71256561556031ceedaf303-74517245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f742a81c3dd36f6a1b158be425e61d93d7f5c8' => 
    array (
      0 => './templates/formCategoria.tpl',
      1 => 1443127245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71256561556031ceedaf303-74517245',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56031ceee164a4_29427946',
  'variables' => 
  array (
    'datos' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56031ceee164a4_29427946')) {function content_56031ceee164a4_29427946($_smarty_tpl) {?><table class="table table-hover tablaheroe">
    <?php if ($_smarty_tpl->tpl_vars['datos']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
            <tr class="success">
                <td>Nombre Categoria: </td>			
                <td>Id categoria: </td>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombrecategoria'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['idcategoria'];?>
</td>
            </tr>
        <?php } ?>
    <?php }?>
</table>
<?php }} ?>
