{include file="headerforo.tpl" title=foo}

		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezeramensaje">
					<h4>{$nombretema}</h4>
				</div>
				{foreach key=pid item=mensaje from=$mensajes}
					<div class="row temamensaje">
						<div class="col-lg-2">
							<img src="imagenes/Portada_perfil.png"/ class="fotoperfil">
							<h5>{$mensaje.nombre}</h5>
						</div>
						<div class="col-lg-8 textomenu" id="{$mensaje.idmensaje}">
							{$mensaje.mensaje}
						</div>
					</div>
				{/foreach}
				<div id="huecoajax">
				</div>
			</div>
		</div>
		<a href="index.php?action=foro">Index</a> -> <a href="index.php?action=tema&tipo={$temageneral}">{$temageneral}</a>		
		<form method="POST" href="index.php?action=insertar&tipo={$nombretema}">
			<p>Mensaje:</p>
			<p><textarea rows="10" cols="100" name="mensaje"></textarea></p>
			<p><input type="submit" value="Post" onclick=""/></p>
		</form>
</div>	
</body>
  

{include file="footer.tpl"}
