{include file="headerforo.tpl" title=foo}

		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<p>{$nombretema}</p>
				</div>
				{foreach key=pid item=mensaje from=$mensajes}
					<div class="row tema">
						<div class="col-lg-2">
							<img src="imagenes/{$mensaje.avatar}"/>
							{$mensaje.nombre}
						</div>
						<div class="col-lg-8 textomenu" id="{$mensaje.idmensaje}">
							{$mensaje.mensaje}
						</div>
					</div>
					<hr>
				{/foreach}
				<div id="huecoajax">
				</div>
			</div>
		</div>
		<a href="index.php?action=foro">Index</a> -> <a href="index.php?action=tema&tipo={$temageneral}">{$temageneral}</a>
		<script>
			function mensajeajax(){
					$.ajax({
					url: 'index.php',
					dataType: 'JSON',
					type: "POST",
					data: {	
						action: 'mensajeAjax',
						nombre: '{$idt}',
					},
					success: function(data) {
						alert(XMLHttpRequest.responseText);
						alert(textStatus);
						alert(errorThrown);
						$('#huecoajax').html(data.codigoHTML);
					}
					});
					
			}
		</script>
		
		<form action="index.php?action=ajaxmensaje method="POST">
			<p>Mensaje:</p>
			<p><textarea rows="10" cols="100" name="mensajem"></textarea></p>
			<p><input type="submit" value="Post" onclick="mensajeajax()"/></p>
		</form>
</div>	
</body>
  

{include file="footer.tpl"}
