<?php /* Smarty version Smarty-3.1.19, created on 2015-09-28 13:14:36
         compiled from ".\templates\contactos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231835602ef3a5b5072-69044685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31ba5029863a5f0152da982369e59ba13f5415e' => 
    array (
      0 => '.\\templates\\contactos.tpl',
      1 => 1443033436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231835602ef3a5b5072-69044685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5602ef3a5cbea6_97127838',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602ef3a5cbea6_97127838')) {function content_5602ef3a5cbea6_97127838($_smarty_tpl) {?><form>
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
