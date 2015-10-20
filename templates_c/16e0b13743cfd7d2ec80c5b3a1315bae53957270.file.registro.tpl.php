<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 23:46:21
         compiled from ".\templates\registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2623356201ead1efb14-16372545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16e0b13743cfd7d2ec80c5b3a1315bae53957270' => 
    array (
      0 => '.\\templates\\registro.tpl',
      1 => 1443034106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2623356201ead1efb14-16372545',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56201ead20b096_43139107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56201ead20b096_43139107')) {function content_56201ead20b096_43139107($_smarty_tpl) {?><form class="form-horizontal">
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
