<?php /* Smarty version Smarty-3.1.19, created on 2015-09-25 14:33:01
         compiled from "./templates/registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20192491065605854d6385b5-81617502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e891f60cb792ec4b769cb477402504006fcde98b' => 
    array (
      0 => './templates/registro.tpl',
      1 => 1443034106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20192491065605854d6385b5-81617502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5605854d647fb8_57325898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5605854d647fb8_57325898')) {function content_5605854d647fb8_57325898($_smarty_tpl) {?><form class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Puntero">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Name/Nickname</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nickname" placeholder="Identidad">
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="Secreto">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Edad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="edad" placeholder="Antiguedad">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Avatar </label>
    <input type="file" id="avatarfile">
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Register</button>
    </div>
  </div>
</form><?php }} ?>
