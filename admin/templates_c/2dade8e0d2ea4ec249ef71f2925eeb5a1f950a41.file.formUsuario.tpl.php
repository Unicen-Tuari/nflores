<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 22:41:51
         compiled from "./templates/formUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168362217756031ef815f941-55395288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dade8e0d2ea4ec249ef71f2925eeb5a1f950a41' => 
    array (
      0 => './templates/formUsuario.tpl',
      1 => 1443127303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168362217756031ef815f941-55395288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56031ef81ba9f2_97934501',
  'variables' => 
  array (
    'datos' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56031ef81ba9f2_97934501')) {function content_56031ef81ba9f2_97934501($_smarty_tpl) {?><table class="table table-hover tablaheroe">
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
