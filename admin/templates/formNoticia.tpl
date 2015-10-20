<table class="table table-hover tablaheroe">
    {if $noticias}
            <tr class="success">
                <td>Id noticia: </td>
                <td>Id categoria: </td>
                <td>Titulo Noticia: </td>
                <td>Texto Noticia: </td>
                <td>Ruta Imagen: </td>
            </tr>
        {foreach $noticias as $noticia}
            <tr>
                <td>{$noticia['idnoticia']}</td>
                <td>{$noticia['idcategoria']}</td>
                <td>{$noticia['titulonoticia']}</td>
                <td>{$noticia['infonoticia']}</td>
                <td>{$noticia['pathimagen']}</td>
            </tr>
        {/foreach}
    {else}
    <p>TABLA VACIA</p>
    {/if}
</table>
    <div class="titulo">
    	<p>Agregar Nueva Noticia</p>
    </div>
    <form class="form-horizontal" action="index.php?action=nuevanoticia" method="POST" enctype="multipart/form-data" id="form-noticia" >
      <div class="form-group">
    		<label for="idcategoria" class="col-sm-3">Id Categoria:</label>
    		<div class="col-sm-5">
    		  <input type="text" class="form-control" id="idcategoria" placeholder="ID Categoria" name="idcategoria">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Categoria<span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              {foreach $categorias as $categoria}
              <li onclick="cargarid('{$categoria['idcategoria']}','{$categoria['nombrecategoria']}')">{$categoria['nombrecategoria']}</li>
              {/foreach}
            </ul>
          </div>
    		</div>
    	</div>
    	<div class="form-group">
    		<label for="titulonoticia" class="col-sm-3">Titulo Noticia:</label>
    		<div class="col-sm-5">
    		  <input type="text" class="form-control" id="titulonoticia" placeholder="Nombre categoria" name="titulonoticia">
    		</div>
    	</div>
    	<div class="form-group">
    		<label class="col-sm-3" for="imageToUpload">Imagen</label>
    		<input type="file" name="imageToUpload[]"  id="imageToUpload"/>
    	</div>
    	<div class="form-group">
    		<label class="col-sm-3" for="informacion">Texto Noticia</label>
    		<textarea class="form-control" rows="8" placeholder="Informacion" id="informacion" name="informacion"></textarea>
    	</div>
    	<br>
    	<button type="submit" class="btn btn-default cargarcategoria">Agregar</button>
    </form>
