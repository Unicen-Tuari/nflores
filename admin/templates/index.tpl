{include file="header.tpl" title=foo}
<body>
<div class="container columna">
<img src="imagenes/Portada_main2.png" class="img-responsive imagenteam"/>
    <div class="row titulo col-lg-12">
        Adminstrador
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
      <div class="table-responsive" id="tablainfo">
      </div>
      <div id="createform" class="col-lg-12">
      </div>
    </div>
    <div class="modal fade" id="modalNot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modaltitle">Id</h4><h4 class="modal-title" id="modalidnot">Error</h4>
            <h4 class="modaltitle">Titulo</h4><textarea class="modal-title" id="modaltitulo">Error</textarea>
            <h4 class="modaltitle">Id categoria</h4><h4 class="modal-title" id="modalidcat">Error</h4>
          </div>
          <div class="modal-body">
            <textarea id="modalbody" rows="10" cols="75"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="salvarNoticia()">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4>Id categoria:</h4>
            <textarea id="idcat" rows="1" cols="10" disabled></textarea>
            <h4>Titulo Categoria: </h4>            
          </div>
          <div class="modal-body">
            <textarea class="modal-title" id="titulocat">Error</textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="salvarCategoria()">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
{include file="footer.tpl"}
