<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 23:46:20
         compiled from ".\templates\contactos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1004856201eaca91d32-27501900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c6d08abb7c41551c127400e66191cfedf0b4ae' => 
    array (
      0 => '.\\templates\\contactos.tpl',
      1 => 1443033436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1004856201eaca91d32-27501900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56201eacad6934_93789030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56201eacad6934_93789030')) {function content_56201eacad6934_93789030($_smarty_tpl) {?><form>
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
