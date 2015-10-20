<?php /* Smarty version Smarty-3.1.19, created on 2015-09-28 13:15:36
         compiled from ".\templates\indexforo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2520355fc527c4bd120-22780243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af29dae0971995e4f7fdde80d97592065cbab139' => 
    array (
      0 => '.\\templates\\indexforo.tpl',
      1 => 1443456935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2520355fc527c4bd120-22780243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55fc527c4df683_88588997',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fc527c4df683_88588997')) {function content_55fc527c4df683_88588997($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<body>
	<div class="container columna">
		<div class="row">
			<div class="col-lg-12">
				<ul class="list-inline top">
					<li><a href="#"><img src="imagenes/twiter.png" class="img-rounded"/></a></li>
					<li><a href="https://www.facebook.com/NasaTactics"><img src="imagenes/facebook.png" class="img-rounded"/></a></li>
					<li><a href="#"><img src="imagenes/youtube.png" class="img-rounded"/></a></li>
					<li><a href="#"><img src="imagenes/twitch.png" class="img-rounded"/></a></li>
				</ul>
			</div>
		</div>
		<img src="imagenes/Portada_main2.png" class="img-responsive imagenteam"/>
		<ul class="list-inline">
			<li><a onclick="infonavegacion('home')" class="cursorpointer" >Home</a></li>
			<li><a onclick="infonavegacion('categoria')" class="cursorpointer">About</li>
			<li><a onclick="infonavegacion('contactos')" class="cursorpointer">Contactos</li>
			<li><a onclick="infonavegacion('registro')" class="cursorpointer">Registrarse</li>
		</ul>
		<div id="huecologin" class="estilologin">
			<a onclick="login()">Login</a>
		</div>
		<div class="row" id="huecobody">
			<?php echo $_smarty_tpl->getSubTemplate ("home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo2'), 0);?>

		</div>
	</div>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.js"></script>
</body> 
<?php echo $_smarty_tpl->getSubTemplate ("footerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
