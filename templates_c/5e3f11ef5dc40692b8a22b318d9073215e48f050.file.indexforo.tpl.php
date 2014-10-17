<?php /* Smarty version Smarty-3.1.19, created on 2014-10-17 22:38:19
         compiled from ".\templates\indexforo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13287543a065c511e22-90182090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e3f11ef5dc40692b8a22b318d9073215e48f050' => 
    array (
      0 => '.\\templates\\indexforo.tpl',
      1 => 1413578297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13287543a065c511e22-90182090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543a065c5e0ed6_91720203',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543a065c5e0ed6_91720203')) {function content_543a065c5e0ed6_91720203($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

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
		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<p>Sobre el Equipo</p>
				</div>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=estrategias"><p>Estrategias</p></a>
					</div>
				</div>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=builds"><p>Items por campeon</p></a>
					</div>
				</div>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=chat"><p>Chat</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<p>Sobre el Juego</p>
				</div>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=campeones"><p>Leyendas/Campeones</p></a>
					</div>
				</div>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=bugs"><p>Bugs</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<p>Eventos</p>
				</div>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						 <a href="index.php?action=partidas"><p>Organizador de Partidas</p></a>
					</div>
				</div>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=eventos"><p>Eventos y Sorteos</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
  </body>
  

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
