{foreach $noticias as $noticia}
<div class="row cuerponoticia">
  <label>{$noticia['nombrecategoria']}</label>
    <div class="col-lg-2">
      <img src="{$noticia['pathimagen']}" class="img-responsive">
    </div>
    <div class="col-lg-8">
      <label class="titulonoticia">{$noticia['titulonoticia']}</label>
      <p class="infonoticia">{$noticia['infonoticia']}</p>
    </div>
</div>
{/foreach}
