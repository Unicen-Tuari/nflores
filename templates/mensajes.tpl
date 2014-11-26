{include file="headerforo.tpl" title=foo}
<button class="login" onclick="logout()">Logout</button>
		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezeramensaje">
					<h4>{$nombretema}</h4>
				</div>
				{foreach key=pid item=mensaje from=$mensajes}
					<div class="row colorfondo">
						<div class="col-lg-2">
							<img src="imagenes/Portada_perfil.png"/ class="fotoperfil">
							<h5>{$mensaje.nombre}</h5>
						</div>
						<div class="col-lg-8 textomenu">
							{if $idu eq $mensaje.idusuario}
								<a href="index.php?action=borrar&tipo=mensaje$id={$mensaje.idmensaje}"><img src="botoncerrar.jpg" class="borrar"/></a>
								<a href="index.php?action=editar&tipo=mensaje$id={$mensaje.idmensaje}"><img src="botoneditar.png" class="editar"/></a>
							{/if}
							{$mensaje.mensaje}
						</div>
					</div>
				{/foreach}
			</div>
		</div>
		<a href="index.php?action=foro">Index</a><span id="colorrojo">-></span><a href="index.php?action=tema&tipo={$temageneral}">{$temageneral}</a>
		<br>
		<form action="index.php?action=crear&tipo=mensaje&tema={$nombretema}" method="POST">
			<p id="colorrojo">Mensaje Nuevo:</p>
			<p><textarea rows="10" cols="100" name="mensajetema"></textarea></p>
			<p><input type="submit" value="Post"/></p>
		</form>
</div>	
</body>
  

{include file="footer.tpl"}
