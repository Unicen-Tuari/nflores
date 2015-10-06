<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 22:43:51
         compiled from "./templates/formNoticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33682388656045b2bd286e8-81370475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd339939da6ceef4275e824fd8118ba94b4ee7cff' => 
    array (
      0 => './templates/formNoticia.tpl',
      1 => 1443127418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33682388656045b2bd286e8-81370475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56045b2bd58b23_21031988',
  'variables' => 
  array (
    'datos' => 0,
    'noticia' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56045b2bd58b23_21031988')) {function content_56045b2bd58b23_21031988($_smarty_tpl) {?><table class="table table-hover tablaheroe">
    <?php if ($_smarty_tpl->tpl_vars['datos']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noticia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
?>
            <tr class="success">
                <td>Id noticia: </td>
                <td>Info noticia: </td>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['idnoticia'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['infonoticia'];?>
</td>
            </tr>
        <?php } ?>
    <?php } else { ?>
    <p>TABLA VACIA</p>
    <?php }?>
</table><?php }} ?>
