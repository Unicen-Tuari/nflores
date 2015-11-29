<?php /* Smarty version Smarty-3.1.19, created on 2015-11-29 21:20:58
         compiled from ".\templates\contactos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1004856201eaca91d32-27501900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c6d08abb7c41551c127400e66191cfedf0b4ae' => 
    array (
      0 => '.\\templates\\contactos.tpl',
      1 => 1448820328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1004856201eaca91d32-27501900',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56201eacad6934_93789030',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56201eacad6934_93789030')) {function content_56201eacad6934_93789030($_smarty_tpl) {?><form class="form-horizontal" action="index.php?action=mail" method="POST" id="form-contactos">
  <div class="form-group">
    <label for="nickname" class="col-sm-3">Nickname</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="nickname" placeholder="Nick" name="nickname">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3" for="e-mail">E-Mail</label>
    <div class="col-sm-5">
      <input class="form-control" type="email"  id="e-mail" placeholder="E-mail" name="e-mail" >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3" for="informacion">Texto</label>
    <textarea class="form-control" rows="8" placeholder="Informacion" id="informacion" name="informacion"></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-default cargarcategoria">Send</button>
</form><?php }} ?>
