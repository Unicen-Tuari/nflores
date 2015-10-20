<?php /* Smarty version Smarty-3.1.19, created on 2015-09-29 18:28:16
         compiled from "./templates/loginform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77071007956018c0e4d3904-56303374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12725c316ad2b934ef4ae2be75d8813f15e7d142' => 
    array (
      0 => './templates/loginform.tpl',
      1 => 1443035374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77071007956018c0e4d3904-56303374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56018c0e56d532_78145179',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56018c0e56d532_78145179')) {function content_56018c0e56d532_78145179($_smarty_tpl) {?><form>
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
