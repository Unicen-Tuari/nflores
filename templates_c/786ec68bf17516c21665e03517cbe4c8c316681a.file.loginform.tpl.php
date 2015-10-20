<?php /* Smarty version Smarty-3.1.19, created on 2015-09-23 16:09:36
         compiled from ".\templates\loginform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1621455fc53147997e6-64315357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '786ec68bf17516c21665e03517cbe4c8c316681a' => 
    array (
      0 => '.\\templates\\loginform.tpl',
      1 => 1443035372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621455fc53147997e6-64315357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55fc53147c3758_50824803',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fc53147c3758_50824803')) {function content_55fc53147c3758_50824803($_smarty_tpl) {?><form>
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
