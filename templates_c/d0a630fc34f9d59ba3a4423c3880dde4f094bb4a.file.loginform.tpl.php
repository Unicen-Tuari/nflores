<?php /* Smarty version Smarty-3.1.19, created on 2015-11-07 22:55:09
         compiled from ".\templates\loginform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27730563e733dc73ec3-47751504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0a630fc34f9d59ba3a4423c3880dde4f094bb4a' => 
    array (
      0 => '.\\templates\\loginform.tpl',
      1 => 1443035374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27730563e733dc73ec3-47751504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563e733dca2cd3_78117385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563e733dca2cd3_78117385')) {function content_563e733dca2cd3_78117385($_smarty_tpl) {?><form>
	<div class="form-group">
	  <label for="exampleInputEmail1">Nick Name</label>
	  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	</div>
  <div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
	  <button type="button" class="btn btn-default" aria-label="Left Align" onclick="backlogin()">
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	  </button>
  <button type="submit" class="btn btn-default">Submit</button>				      
</form><?php }} ?>
