<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 21:07:53
         compiled from "./templates/loginform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91220439356044a0975b6f0-19356916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a5e2065a5a1a53b1529ba4718292ab3e7897d60' => 
    array (
      0 => './templates/loginform.tpl',
      1 => 1443035374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91220439356044a0975b6f0-19356916',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56044a09a9f6f2_09098198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56044a09a9f6f2_09098198')) {function content_56044a09a9f6f2_09098198($_smarty_tpl) {?><form>
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
