<?php /* Smarty version Smarty-3.1.19, created on 2015-09-25 14:33:00
         compiled from "./templates/contactos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16709593005605854cbc91d5-52197726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '617f9a6bc63441ecbad0ab603748de596fa4f43c' => 
    array (
      0 => './templates/contactos.tpl',
      1 => 1443033436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16709593005605854cbc91d5-52197726',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5605854cbe57e2_09175956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5605854cbe57e2_09175956')) {function content_5605854cbe57e2_09175956($_smarty_tpl) {?><form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre/Nickname</label>
    <input type="text" class="form-control" placeholder="Identidad" id="nickname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-Mail</label>
	<input type="email" class="form-control" id="email" placeholder="Puntero">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Comentarios</label>
    <textarea class="form-control" rows="3" placeholder="Imaginacion"></textarea>
  <div>
  <button type="submit" class="btn btn-default">Submit</button>
</form><?php }} ?>
