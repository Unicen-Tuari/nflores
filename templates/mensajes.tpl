{include file="headerforo.tpl" title=foo}

		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<p>{$nombretema}</p>
				</div>
				{foreach key=pid item=mensaje from=$mensajes}
				<div class="row tema">
					<div class="col-lg-2">
						{$mensaje.nombre}
					</div>
					<div class="col-lg-8 textomenu">
						{$mensaje.mensaje}
					</div>
				</div>
				{/foreach}
				<div id="hueco para ajax mensaje>
				</div>
			</div>
		</div>
</body>
  

{include file="footer.tpl"}
