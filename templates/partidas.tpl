{include file="headerforo.tpl" title=foo}

<script>
	function partidaajax(ide){
			alert('ajaxpartida');
			$.ajax({
			url: 'index.php',
			dataType: 'JSON',
			type: "POST",
			data: {	
				action: "infoAjax",
				idevento: ide,
			},
			success: function(data) {
				$('#huecoajax').html(data.info);
			}
			});
	}
</script>
<div class="row menumensajes">
	<div class="col-lg-4 seccion">
		<div class="row cabezera">
			<h4>Partidas</h4>
		</div>
		<div class="row ubicacion">
			{foreach key=pid item=partida from=$evento}
				<span onclick="partidaajax({$evento.0.idevento})">
				<div class="row">
					<img src="{$foto}" class="fotopartida"/>
					{$evento.0.Nombrepartida}
					{$evento.0.idusuario}
				</div>
				</span>
			{/foreach}
		</div>
	</div>
	<div class="col-lg-8 seccion">
		<div class="row cabezera" id="infopartida">
			<h4>Informacion de la partida</h4>
		</div>
		<div class="row huecoajax">
		</div>
		
	</div>
	
</div>
<a href="index.php?action=foro">Index</a>
</div>
</body>

{include file="footer.tpl"}
