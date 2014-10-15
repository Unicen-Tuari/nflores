{include file="header.tpl" title=foo}
<body>
	<div class="container columna">
		<div class="row">
			<div class="col-lg-12">
				<ul class="list-inline top">
					<li><a href="#"><img src="imagenes/twiter.png" class="img-rounded"/></a></li>
					<li><a href="https://www.facebook.com/NasaTactics"><img src="imagenes/facebook.png" class="img-rounded"/></a></li>
					<li><a href="#"><img src="imagenes/youtube.png" class="img-rounded"/></a></li>
					<li><a href="#"><img src="imagenes/twitch.png" class="img-rounded"/></a></li>
				</ul>
			</div>
		</div>
		<img src="imagenes/Portada_main2.png" class="img-responsive imagenteam"/>
		<div class="row menumensajes">
			<div class="col-lg-12 seccion">
				<div class="row cabezera">
					<p>$titulo</p>
				</div>
				{foreach from=$query item=mensajes}
				<div class="row tema">
					<div class="col-lg-2">
						$perfil usuario
					</div>
					<div class="col-lg-8 textomenu">
						$texto mensaje
					</div>
				</div>
				{/foreach}
				<div value="hueco para ajax mensaje>
				</div>
			</div>
		</div>
</body>
  

{include file="footer.tpl"}
