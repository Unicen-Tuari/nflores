<?php /* Smarty version Smarty-3.1.19, created on 2015-09-17 12:44:50
         compiled from ".\templates\loginform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1983555fadff2c78e62-26968434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d123a141324dd663e0e18c4ea398050155ba70a' => 
    array (
      0 => '.\\templates\\loginform.tpl',
      1 => 1442444612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1983555fadff2c78e62-26968434',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55fadff2c78e66_11031636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fadff2c78e66_11031636')) {function content_55fadff2c78e66_11031636($_smarty_tpl) {?><form>
  <div class="col-lg-3">
	<div class="form-group">					
	  <label for="exampleInputEmail1">Email address</label>
	  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	</div>
  </div>
  <div class="col-lg-3">
	<div class="form-group">				
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
  <button type="submit" class="btn btn-default">Submit</button>				      
</form><?php }} ?>
