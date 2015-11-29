<?php /* Smarty version Smarty-3.1.19, created on 2015-11-27 21:52:35
         compiled from ".\templates\indexforo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20169561e87ee4d3298-77637811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d28efcd4bd6c99419bb9571e1326bac04840f73' => 
    array (
      0 => '.\\templates\\indexforo.tpl',
      1 => 1447115240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20169561e87ee4d3298-77637811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561e87ee5d8e40_96827941',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561e87ee5d8e40_96827941')) {function content_561e87ee5d8e40_96827941($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

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
			<li><a onclick="infonavegacion('categoria')" class="cursorpointer">About</a></li>
			<li><a onclick="infonavegacion('contactos')" class="cursorpointer">Contactos</a></li>
		</ul>
		<div class="row" id="huecobody">
			<?php echo $_smarty_tpl->getSubTemplate ("home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo2'), 0);?>

		</div>
	</div>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("footerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
