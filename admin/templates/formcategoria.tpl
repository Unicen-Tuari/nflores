<div class="titulo">
	<p>Categorias</p>
</div>
<table class="table table-hover tablaheroe">
    {if $datos}

            <tr class="success">
                <td>Nombre Categoria: </td>
                <td>Id categoria: </td>
            </tr>
				{foreach $datos as $categoria}
            <tr>
                <td>{$categoria['nombrecategoria']} <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
                <td>{$categoria['idcategoria']}</td>
            </tr>
        {/foreach}
    {/if}
</table>
<div class="titulo">
	<p>Agregar Nueva Categoria</p>
</div>
<form class="form-horizontal" action="index.php?action=nuevacategoria" method="POST" enctype="multipart/form-data" id="form-categoria">
	<div class="form-group">
		<label for="nombrecategoria" class="col-sm-3">Nombre Categoria:</label>
		<div class="col-sm-5">
		  <input type="text" class="form-control" id="nombrecategoria" placeholder="Nombre categoria" name="nombrecategoria">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3" for="imageToUpload">Imagen</label>
		<input type="file" name="imageToUpload[]"  id="imageToUpload"/>
	</div>
	<div class="form-group">
		<label class="col-sm-3" for="titulonoticia">Titulo Noticia</label>
		<div class="col-sm-5">
			<input class="form-control" type="text"  id="titulonoticia" placeholder="Titulo informacion" name="titulonoticia" >
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3" for="informacion">Texto</label>
		<textarea class="form-control" rows="8" placeholder="Informacion" id="informacion" name="informacion"></textarea>
	</div>
	<br>
	<button type="submit" class="btn btn-default cargarcategoria">Agregar</button>
</form>
