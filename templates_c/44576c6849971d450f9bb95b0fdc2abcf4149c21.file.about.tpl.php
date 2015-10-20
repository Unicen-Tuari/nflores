<?php /* Smarty version Smarty-3.1.19, created on 2015-09-29 20:02:35
         compiled from "./templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19678176125605854aeaddf2-28139880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44576c6849971d450f9bb95b0fdc2abcf4149c21' => 
    array (
      0 => './templates/about.tpl',
      1 => 1443566756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19678176125605854aeaddf2-28139880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5605854af11fc9_55777737',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5605854af11fc9_55777737')) {function content_5605854af11fc9_55777737($_smarty_tpl) {?><div class="row menumensajes">
			<div class="col-lg-12 seccion">
                <div class="row cabezera">
					<p>Novedades</p>
				</div>
                <?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
				<div class="row tema">
					<div class="col-lg-2">
						<img src="imagenes/iconobronce.png" class="img-responsive iconomenu" />
					</div>
					<div class="col-lg-8 textomenu">
						<a onclick="vernoticias('<?php echo $_smarty_tpl->tpl_vars['categoria']->value['idcategoria'];?>
')"><p><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombrecategoria'];?>
</p></a>
					</div>
				</div>
                <?php } ?>
			</div>

		</div>
		<div class="row listalegendas">
			<p>Legendas</p>
			<ul class="list-inline">
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
<?php }} ?>
