{include file="header.tpl" title=foo}
<body>
<div class="container columna">
<img src="imagenes/Portada_main2.png" class="img-responsive imagenteam"/>

    <div class="row titulo col-lg-12">
        Adminstrador de Noticias
    </div>
    <div class="row">
        <div class="col-lg-12 buscador">
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Buscar.. <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a onclick="inforequest('Categoria')">Categorias</a></li>
                <li><a onclick="inforequest('Noticia')">Noticia</a></li>
                <li><a onclick="inforequest('Usuario')">Usuarios</a></li>
              </ul>
              <button type="button" class="btn btn-success" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>
    <div class="row huecotabla">
      <div id="titulo-tabla" class="col-lg-12">
      </div>
      <div id="tablainfo" class="table-respoinsive">
      </div>
      <div id="createform" class="col-lg-12">
      </div>
    </div>
</div>

</div>
{include file="footer.tpl"}
