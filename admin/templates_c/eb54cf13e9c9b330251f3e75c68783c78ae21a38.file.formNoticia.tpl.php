<?php /* Smarty version Smarty-3.1.19, created on 2015-10-20 17:23:11
         compiled from ".\templates\formNoticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41555626a2af3eb430-27277642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb54cf13e9c9b330251f3e75c68783c78ae21a38' => 
    array (
      0 => '.\\templates\\formNoticia.tpl',
      1 => 1444841242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41555626a2af3eb430-27277642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noticias' => 0,
    'noticia' => 0,
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5626a2af4247c3_80030387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5626a2af4247c3_80030387')) {function content_5626a2af4247c3_80030387($_smarty_tpl) {?><table class="table table-hover tablaheroe">
    <?php if ($_smarty_tpl->tpl_vars['noticias']->value) {?>
            <tr class="success">
                <td>Id noticia: </td>
                <td>Id categoria: </td>
                <td>Titulo Noticia: </td>
                <td>Texto Noticia: </td>
                <td>Ruta Imagen: </td>
            </tr>
        <?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noticia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['idnoticia'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['idcategoria'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulonoticia'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['infonoticia'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['pathimagen'];?>
</td>
            </tr>
        <?php } ?>
    <?php } else { ?>
    <p>TABLA VACIA</p>
    <?php }?>
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
              <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
              <li onclick="cargarid('<?php echo $_smarty_tpl->tpl_vars['categoria']->value['idcategoria'];?>
','<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombrecategoria'];?>
')"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombrecategoria'];?>
</li>
              <?php } ?>
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
<?php }} ?>
