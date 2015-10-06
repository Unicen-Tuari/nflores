{include file="headerforo.tpl" title=foo}
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
		<ul class="list-inline">
			<li><a onclick="infonavegacion('home')" class="cursorpointer" >Home</a></li>
			<li><a onclick="infonavegacion('categoria')" class="cursorpointer">About</li>
			<li><a onclick="infonavegacion('contactos')" class="cursorpointer">Contactos</li>
			<li><a onclick="infonavegacion('registro')" class="cursorpointer">Registrarse</li>
		</ul>
		<div id="huecologin" class="estilologin">
			<a onclick="login()">Login</a>
		</div>
		<div class="row" id="huecobody">
			{include file="home.tpl" title=foo2}
		</div>
	</div>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
{include file="footerforo.tpl"}
