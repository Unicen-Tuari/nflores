{include file="headerforo.tpl" title=foo}

<div class="row menumensajes">
	<div class="col-lg-4 seccion">
		<div class="row cabezera">
			<p>Partidas</p>
		</div>
		<div class="row partidascss">
		
		</div>
	</div>
	{foreach key=pid item=partida from=$evento}
		<div class="row">
			
		</div>
	{/foreach}
	<div class="col-lg-8 seccion">
		<div class="row cabezera">
			<p>Informacion de la partida</p>
		</div>
		<div class="row infoeventoajax">
			
		</div>
	</div>
</div>
</div>
</body>

{include file="footer.tpl"}
