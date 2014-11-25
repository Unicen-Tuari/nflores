<?php /* Smarty version Smarty-3.1.19, created on 2014-11-23 22:10:06
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3236854443399585c95-55822848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb57af55f93ce168fc4df5c1a1e76f895cd2653' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1416776995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3236854443399585c95-55822848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5444339968f6d4_33321550',
  'variables' => 
  array (
    'rotacion' => 0,
    'rota' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5444339968f6d4_33321550')) {function content_5444339968f6d4_33321550($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'foo'), 0);?>

<body>
<img class="fondo" src="imagenes/fondo1.jpg"/>
<div class="container">
		<div class="row colorfondo ">
			<div class="col-lg-12">
				<ul class="list-inline top">
					<li><a href="#"><img src="imagenes/twiter.png" class="img-rounded"/></a></li>
					<li><a href="https://www.facebook.com/NasaTactics"><img src="imagenes/facebook.png" class="img-rounded"/></a></li>
					<li><a href="#"><img src="imagenes/youtube.png" class="img-rounded"/></a></li>
					<li><a href="#"><img src="imagenes/twitch.png" class="img-rounded"/></a></li>
				</ul>
			</div>
		</div>
		<div class="row intro">
			<div class="col-lg-12">
				<img src="imagenes/Portada_main2.png" class="img-responsive img-rounded imagenteam"/>
			</div>
		</div>
		
		<div class="row "> <!--CUERPO CON INFO-->
			<div class=" col-lg-12 menu-principal">
				<div class="col-lg-9 columna-izquierda"> <!--COLUMNA IZQUIERDA-->
					<!--CAROUSEL-->
					<div class="row" id="carousel">
						<div class="col-lg-12">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>

							   <!-- Wrapper for slides -->
								<!--USAR JS O VER LINKS PARA AFUERA-->
							  <div class="carousel-inner">
								<!--POSIBLE USO DE PHP PARA CARGAR LAS IMAGENES-->
								<div class="item active"> <!--IMAGENES IGUALES PARA MOSTRAR Y NO SE MODIFIQUE EL TAMAÑO-->
								  <a href="http://las.leagueoflegends.com/es/"><img src="imagenes/leagueoflegend.jpg" alt="imagen1"></a>
								  <div class="carousel-caption">
									El pu**
								  </div>
								</div>
								<div class="item">
								  <img src="imagenes/Portada_jack.PNG" alt="imagen2">
								  <div class="carousel-caption">
									EL g**
								  </div>
								</div>
								<div class="item">
								  <img src="imagenes/Portada_akitane.PNG" alt="imagen3">
								  <div class="carousel-caption">
									El tra*****
								  </div>
								</div>
							  </div>

							  <!-- Controls se pueden sacar y que ande solo como muestreo, tienen indicadores para elegir-->
							  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							  </a>
							</div>
						</div>
					</div>
				<div class="row columnasinfo">
					<div class="col-lg-3 colorfondo bloqinfo">
						<img src="imagenes/iconoschamp.png" class="imginfo"><br>
						<p>¿Interesado en nuestro Equipo?, Enterate sobre nosotros, el juego y MÁS en nuestro <a href="index.php?action=foro">Foro</a></p>
					</div>
					<div class="col-lg-3 colorfondo bloqinfo">
						<img src="imagenes/lolcs.png" class="imginfo"><br>
						<p>Que recuerdos dejo el último Mundial, opina e infórmate de más en el <a href="index.php?action=foro">Foro</a></p>
					</div>
					
				</div>
				</div>
				<div class='col-lg-3 columna-derecha'>
					<div class='col-lg-12 rotacion colorfondo'>
						<div class='header'>
							<p class="titulo">Rotacion Semanal</p>
							<ul class="list-inline lista-rotacion">
								<?php  $_smarty_tpl->tpl_vars['rota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rota']->_loop = false;
 $_smarty_tpl->tpl_vars['pid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rotacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rota']->key => $_smarty_tpl->tpl_vars['rota']->value) {
$_smarty_tpl->tpl_vars['rota']->_loop = true;
 $_smarty_tpl->tpl_vars['pid']->value = $_smarty_tpl->tpl_vars['rota']->key;
?>
									<li><img src="imagenes/<?php echo $_smarty_tpl->tpl_vars['rota']->value['Imagen'];?>
.png" class="img-resposive img-rotacion"/></li>
								<?php } ?>
							</ul>
						</div>
					</div>					
				</div>
			</div>
		</div>
	
	
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
