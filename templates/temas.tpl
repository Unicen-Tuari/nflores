{include file="headerforo.tpl" title=foo}

<div class="row menumensajes">
	<div class="col-lg-12 seccion">
		<div class="row cabezera">
			<p>{$nombretema}</p>
		</div>
		{foreach key=pid item=tema from=$temas}
			<div class="row tema">
				<div class="col-lg-2">
					<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
				</div>
				<div class="col-lg-8 textomenu">
					<a href="index.php?action=mensaje&nombre={$nombretema}"><p>{$tema.nombretema}</p></a>
				</div>
			</div>
		{/foreach}
	</div>
</div>
</div>
</body>

{include file="footer.tpl"}
