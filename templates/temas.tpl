{include file="headerforo.tpl" title=foo}
<button class="login" onclick="logout()">Logout</button>
<div class="row menumensajes">
	<div class="col-lg-12 seccion">
		<div class="row cabezera">
			<h4>{$nombretema}</h4>
		</div>
		{foreach key=pid item=tema from=$temas}
			<div class="row colorfondo">
				<div class="col-lg-2">
					<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
				</div>
				<div class="col-lg-8 textomenu">
					<a href="index.php?action=mensaje&tipo={$tema.nombretema}"><h5>{$tema.nombretema}</h5></a>
				</div>
			</div>
		{/foreach}
	</div>
	<a href="index.php?action=nuevo&tipo=tema&tg={$nombretema}"><button>Nuevo Tema</button></a>
	<br>
	<br>
	<a href="index.php?action=foro" id="pathway">Index</a>
</div>
</div>
</body>

{include file="footer.tpl"}
