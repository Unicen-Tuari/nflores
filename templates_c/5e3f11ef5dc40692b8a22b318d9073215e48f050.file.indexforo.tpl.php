<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 20:26:49
         compiled from ".\templates\indexforo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131965444339bb27b93-28941325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e3f11ef5dc40692b8a22b318d9073215e48f050' => 
    array (
      0 => '.\\templates\\indexforo.tpl',
      1 => 1416857207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131965444339bb27b93-28941325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5444339bbc3fb5_93476722',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5444339bbc3fb5_93476722')) {function content_5444339bbc3fb5_93476722($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("headerforo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<div class="indexprincipal">
	<a href="index.php?action=index">Pagina Principal</a>
</div>
<span data-toggle="modal" data-target="#modallogin"><button class="login">Login</button></span>
		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<h4>Sobre el Equipo</h4>
				</div>
				<div class="row colorfondo">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=estrategias"><p>Estrategias</p></a>
					</div>
				</div>
				<div class="row colorfondo">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=items"><p>Items por campeon</p></a>
					</div>
				</div>
				<div class="row colorfondo">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=chat"><p>Chat</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<h4>Sobre el Juego</h4>
				</div>
				<div class="row colorfondo">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=campeones"><p>Leyendas/Campeones</p></a>
					</div>
				</div>
				<div class="row colorfondo">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=bugs"><p>Bugs</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<h4>Eventos</h4>
				</div>
				<div class="row colorfondo">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						 <a href="index.php?action=tema&tipo=partida"><p>Organizador de Partidas</p></a>
					</div>
				</div>
				<div class="row colorfondo">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=evento"><p>Eventos y Sorteos</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">	
			<div class="modal-dialog"> <!--TAMAÑO DEL MODAL-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h5 class="modal-title" id="myModalLabel">Login/Registrarse</h5>
					</div>
					<div class="modal-body " id="modal-body">
						<p>Usuario: <input type="text" name="usuario" id="usuario" class="flotarderecha"><br></p>
						<p>Contraseña: <input type="PassWord" name="password" id="contrasena" class="flotarderecha"><br></p>
					</div>
					<div id="responseajaxlogin"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" onclick="login()">Login</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
        </div>
  </body>
  
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
