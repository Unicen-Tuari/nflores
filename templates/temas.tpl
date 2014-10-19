{include file="headerforo.tpl" title=foo}
<body>
<div class="row menumensajes">
	<div class="col-lg-12 seccion">
		<div class="row cabezera">
			<p>Nombre del tema</p>
		</div>
		{foreach from=$data item=temas}
			<div class="row tema">
				<div class="col-lg-2">
					<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
				</div>
				<div class="col-lg-8 textomenu">
					<a href="index.php?action={$temas}"><p>{$temas.nombretema}</p></a>
				</div>
			</div>
		{/foreach}
	</div>
</div>
</body>
{include file="footer.tpl"}
