<?php /* Smarty version Smarty-3.1.19, created on 2015-10-16 21:52:33
         compiled from ".\templates\formCategoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218756215581283b00-18982041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67774a8b3ce1addf2f6890c090f7f610569d24d8' => 
    array (
      0 => '.\\templates\\formCategoria.tpl',
      1 => 1445024236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218756215581283b00-18982041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562155812c6194_29363588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562155812c6194_29363588')) {function content_562155812c6194_29363588($_smarty_tpl) {?><div class="titulo">
	<p>Categorias</p>
</div>
<table class="table table-hover tablaheroe">
    <?php if ($_smarty_tpl->tpl_vars['datos']->value) {?>

            <tr class="success">
                <td>Nombre Categoria: </td>
                <td>Id categoria: </td>
            </tr>
				<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombrecategoria'];?>
 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
                <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['idcategoria'];?>
</td>
            </tr>
        <?php } ?>
    <?php }?>
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
<?php }} ?>
