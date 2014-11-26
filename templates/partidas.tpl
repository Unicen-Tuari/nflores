{include file="headerforo.tpl" title=foo}

<script>
	function partidaajax(ide){
			$.ajax({
			url: 'index.php',
			dataType: 'JSON',
			type: "POST",
			data: {	
				action: "infoAjax",
				idevento: ide,
			},
			success: function(data) {
				$('#comentJ').innerhtml(data.info);
				$('#passJ').html(data.pass);
				$('#nombreJ').html(data.creador);
				$('#listaJ').html(data.cola);
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
					Nombre: {$evento.0.Nombrepartida}/{$evento.0.Tipo}
				</div>
				</span>
			{/foreach}
		</div>
	</div>
	<div class="col-lg-8 seccion">
		<div class="row cabezera" id="infopartida">
			<h4>Informacion de la partida</h4>
		</div>
		<div class="row" id="partida">
			<div id="nombreJ"></div>
			<div id="passJ"></div>
			<div id="listaJ"></div>
			<div id="comentJ"></div>
		</div>		
	</div>	
</div>
<br>
<form action="index.php?action=crear&tipo=partida" method="post" class="colorfondo">
		<p>Crea tu partida!</p>
		<p>Nombre Partida:<br> <input type="text" name="nombrepartida"></p>
		<p>Tipo: 
		<input type="radio" name="group1" value="5v5" checked> 5v5
		<input type="radio" name="group1" value="3v3"> 3v3</p>
		<p>Password: <input type="text" name="pass"></p>
		<p>Comentarios:</p>
		<p><textarea rows="3" cols="20" name="coments"></textarea></p>
		<p><input type="submit" value="Post"/></p>
	</form>
<br>
<br>
<a href="index.php?action=foro">Index</a>
</div>
</body>

{include file="footer.tpl"}
