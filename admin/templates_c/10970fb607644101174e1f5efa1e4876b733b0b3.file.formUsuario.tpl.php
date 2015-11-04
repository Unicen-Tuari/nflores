<?php /* Smarty version Smarty-3.1.19, created on 2015-10-20 17:34:36
         compiled from ".\templates\formUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192455626a55c5f5e14-34637983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10970fb607644101174e1f5efa1e4876b733b0b3' => 
    array (
      0 => '.\\templates\\formUsuario.tpl',
      1 => 1443127302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192455626a55c5f5e14-34637983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5626a55c63a8b5_61250374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5626a55c63a8b5_61250374')) {function content_5626a55c63a8b5_61250374($_smarty_tpl) {?><table class="table table-hover tablaheroe">
    <?php if ($_smarty_tpl->tpl_vars['datos']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
            <tr class="success">
                <td>Nombre Usuario: </td>			
                <td>Id usuario: </td>
                <td>Avatar name: </td>
                <td>Edad: </td>
                <td>Nacion: </td>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['idusuario'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['useravatar'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['edad'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['nacion'];?>
</td>
            </tr>
        <?php } ?>
    <?php } else { ?>
    <p>TABLA VACIA</p>
    <?php }?>
</table><?php }} ?>
