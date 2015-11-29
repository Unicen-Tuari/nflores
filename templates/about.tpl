<div class="row menumensajes">
			<div class="col-lg-12 seccion">
                <div class="row cabezera">
					<p>Novedades</p>
				</div>
				{if $categorias}
                {foreach $categorias as $categoria}
					<div class="row tema">
						<div class="col-lg-2">
							<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
						</div>
						<div class="col-lg-8 textomenu">
							<a onclick="vernoticias('{$categoria['idcategoria']}')"><p>{$categoria['nombrecategoria']}</p></a>
						</div>
					</div>
                {/foreach}
                {else}
                	<h4>Sin noticias para comunicar</h4>
                {/if}
			</div>

		</div>
		<div class="row listalegendas">
			<div class="row cabezera">
				<p>Legendas</p>
			</div>
			<ul class="list-inline">
			<br>
				<!--index.php?action=verlegenda&legenda=Aatrox-->
				<li><a onclick="infoheroe('Aatrox')"><img src="http://ddragon.leagueoflegends.com/cdn/5.2.1/img/champion/Aatrox.png" class="img-responsive"/></a></li>
				<li><a onclick="infoheroe('Thresh')"><img src="http://ddragon.leagueoflegends.com/cdn/5.2.1/img/champion/Thresh.png" class="img-responsive"/></a></li>
				<li><a onclick="infoheroe('Annie')"><img src="http://ddragon.leagueoflegends.com/cdn/5.2.1/img/champion/Annie.png" class="img-responsive"/></a></li>
				<li><a onclick="infoheroe('Anivia')"><img src="http://ddragon.leagueoflegends.com/cdn/5.2.1/img/champion/Anivia.png" class="img-responsive"/></a></li>
				<li><a onclick="infoheroe('Janna')"><img src="http://ddragon.leagueoflegends.com/cdn/5.2.1/img/champion/Janna.png" class="img-responsive"/></a></li>
				<li><a onclick="infoheroe('Ashe')"><img src="http://ddragon.leagueoflegends.com/cdn/5.2.1/img/champion/Ashe.png" class="img-responsive"/></a></li>
			</ul>
		</div>
		<div class="row" id="infolegendas" >
		</div>
	</div>
