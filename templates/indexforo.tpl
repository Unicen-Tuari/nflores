{include file="headerforo.tpl" title=foo}
<div class="indexprincipal">
	<a href="index.php?action=index">Pagina Principal</a>
</div>
{if $user eq 'free'}
<span data-toggle="modal" data-target="#modallogin"><button class="login">Login</button></span>
{else}
<span data-toggle="modal" data-target="#modallogin"><button class="login">USUARIO</button></span>
{/if}
		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<h4>Sobre el Equipo</h4>
				</div>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=estrategias"><p>Estrategias</p></a>
					</div>
				</div>
				<div class="row tema2">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=items"><p>Items por campeon</p></a>
					</div>
				</div>
				<div class="row tema">
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
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a href="index.php?action=tema&tipo=campeones"><p>Leyendas/Campeones</p></a>
					</div>
				</div>
				<div class="row tema2">
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
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						 <a href="index.php?action=tema&tipo=partida"><p>Organizador de Partidas</p></a>
					</div>
				</div>
				<div class="row tema2">
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
  
{include file="footer.tpl"}
