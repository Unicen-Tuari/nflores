{include file="headerforo.tpl" title=foo}
<script>
	function llamadoajax(idE){
			$.ajax({
			url: 'index.php',
			dataType: 'JSON',
			type: "POST",
			data: {	
				action: "infoAjax",
				idevento: idE,
			},
			success: function(data) {
				$('#huecoajax').html(data.codigoHTML);
			}
			});
	}
</script>
<div class="row menumensajes">
	<div class="col-lg-4 seccion">
		<div class="row cabezera">
			<h4>Partidas</h4>
		</div>
		<div class="row partidascss">
			{foreach key=pid item=partida from=$evento}
				<div class="row">
				<span onclick="llamadoajax({$evento.idevento})"><img class="imagenpartida"/><h7>ID:{$evento.idevento} Nombre:{$evento.Nombrepartida} Tipo:{$evento.Tipo}<span>
			
				</div>
			{/foreach}
		</div>
	</div>
	
	<div class="col-lg-8 seccion">
		<div class="row cabezera">
			<h4>Informacion de la partida</h4>
		</div>
		<div class="row ajaxpartidas">
			<div class="row huecoajax">
			</div>
		</div>
		
	</div>
</div>
</div>
</body>

{include file="footer.tpl"}
