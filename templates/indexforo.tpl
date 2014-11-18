{include file="headerforo.tpl" title=foo}

<button type="button" class="login"><span data-toggle="modal" data-target="#modallogin"></span></button>
<div class="indexprincipal">
	<a href="index.php?action=index">Pagina Principal</a>
</div>
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
						<h4 class="modal-title" id="myModalLabel">Login/Registrarse</h4>
					</div>
					<div class="modal-body">
						Nombre: <input type="text" name="nombrecuenta"><br>
						PassWord: <input type="PassWord" name="password"><br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default">Login</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
        </div>
  </body>
  
{include file="footer.tpl"}
