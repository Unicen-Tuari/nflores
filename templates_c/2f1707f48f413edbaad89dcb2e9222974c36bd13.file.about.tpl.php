<?php /* Smarty version Smarty-3.1.19, created on 2015-09-23 14:18:17
         compiled from ".\templates\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77055602ded95db2d9-99008652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f1707f48f413edbaad89dcb2e9222974c36bd13' => 
    array (
      0 => '.\\templates\\about.tpl',
      1 => 1443028130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77055602ded95db2d9-99008652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5602ded95e69e0_32415057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5602ded95e69e0_32415057')) {function content_5602ded95e69e0_32415057($_smarty_tpl) {?><div class="row menumensajes">
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
						<a href="index.php?action=novedad&id=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['idcategoria'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombrecategoria'];?>
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
	</div><?php }} ?>
