{if $noticias}
	{foreach $noticias as $noticia}
	<div class="row cuerponoticia">
	  
	    <div class="col-lg-2">
	      <img src="admin/{$noticia['pathimagen']}" class="img-responsive" id="imgpost">
	    </div>
	    <div class="col-lg-8">
	      <label class="titulonoticia">{$noticia['titulonoticia']}</label>
	      <label id="categoria">{$noticia['nombrecategoria']}</label>
	      <hr>
	      <p class="infonoticia">{$noticia['infonoticia']}</p>
	    </div>
	</div>
	<hr>
	{/foreach}
{else}
	<div class="row cuerponoticia">	  
	    <h4 id="textoerror">Sin Noticias por ahora..</h4>
	</div>
{/if}