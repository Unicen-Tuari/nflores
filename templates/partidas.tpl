{include file="headerforo.tpl" title=foo}
<script>
	function llamadoajax(msg){
			$.ajax({
			url: 'index.php',
			dataType: 'JSON',
			type: "POST",
			data: {	
				action: "infoAjax",
				nombre: '{$idt}',
				mensaje: msg,
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
		
		</div>
	</div>
	{foreach key=pid item=partida from=$evento}
		<div class="row">
			
		</div>
	{/foreach}
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
