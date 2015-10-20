<?php /* Smarty version Smarty-3.1.19, created on 2015-09-28 13:14:37
         compiled from ".\templates\registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203625602f27f5b1366-51007806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14413ee231aca0e3b1d38430bc28bd60ca236d0e' => 
    array (
      0 => '.\\templates\\registro.tpl',
      1 => 1443034106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203625602f27f5b1366-51007806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5602f27f5cbea7_77891814',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602f27f5cbea7_77891814')) {function content_5602f27f5cbea7_77891814($_smarty_tpl) {?><form class="form-horizontal">
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
