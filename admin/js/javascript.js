//-----------------------------MUSTACHE

function crearCategoria(data) {		
		
		$.ajax({
			url: 'js/templates/categorias.mst',
			success: function(template) {
				var rendered = Mustache.render(template,data);
				$('#tablabody').append(rendered);
			}
		});
	
}

function crearNoticia(data) {
	
		$.ajax({
			url: 'js/templates/noticias.mst',
			success: function(template) {
				var rendered = Mustache.render(template,data);
				$('#tablabody').append(rendered);
			}
		});
	
}

//----------------------------MODALS Y FUNCIONES PARA EDITADO 


function modalNoticia(idnoticia){
	$.ajax({		
		url:'api/Noticia',
		type: "GET",
		data: {idnoticia: idnoticia},
		success:function(data){			
			$('#modalidnot').html(data[0]['idnoticia']);
			$('#modaltitulo').val(data[0]['titulonoticia']);
			$('#modalidcat').html(data[0]['idcategoria']);							
			$('#modalbody').val(data[0]['infonoticia']);			
			$('#modalNot').modal('show');
		}
	});
	
	
}

function salvarNoticia(){
	var newtitulo = $('#modaltitulo').val();
	var newinfo = $('#modalbody').val();
	var idnot = $('#modalidnot').html();
	$.ajax({		
		url:'api/Noticia/'+idnot+'/'+newtitulo+'/'+newinfo,
		type: "PUT",
		success:function(data){
			$('#modalNot').modal('hide');
		}
	});
}

function modalCategoria(namecat,idcat){
	$("#titulocat").val(namecat);
	$("#idcat").html(idcat);
	$('#modalCat').modal('show');
}

function salvarCategoria(){
	var idcategoria = $("#idcat").val();
	var newtitulo = $("#titulocat").val();	
	$.ajax({		
		url:'api/Categoria/'+idcategoria+'/'+newtitulo,
		type: "PUT",
		success:function(data){
			$('#modalCat').modal('hide');
		}
	});
}





//----------------BORRADO DE ITEMS EN BASE DE DATOS Y EN VISTA
function borrarCategoria(idCat){
	$.ajax(
    {
      	method: "DELETE",
      	url: "api/Categoria/"+idCat
    })
  	.done(function(data) {
     	$('#categoria'+idCat).remove();
     	alert(data);     	
  	})
  	.fail(function() {
  		alert('Imposible borrar la Categoria');
  	});
}

function borrarNoticia(idNot){
	$.ajax(
    {
      	method: "DELETE",
      	url: "api/Noticia/"+idNot,
    })
  	.done(function(data) {
  		//cambiar
     	$('#noticia'+idNot).remove();
     	alert(data);
  	})
  	.fail(function() {
  		alert('Imposible borrar la Noticia');
  	});
}



//--------------------------------HANDLERS PARA EVITAR REFRESCO
function setHandlersForm(){

	$("#form-noticia").on("submit", function(event){
        event.preventDefault();

        if ($("#imageToUpload").val() == ''){
        	alert('Seleccione Imagen');
        	return;
        }
        
        if ($("#nombrecategoria").val() == ''){
        	alert('Escriba el Nombre de la nueva Categoria');
        	return;
        }

        if ($("#titulonoticia").val() == ''){
        	alert('Escriba el Nombre de la nueva Noticia');
        	return;
        }

        if ($("#idcategoria").val() == ''){
        	alert('Eliga la categoria');
        	return;
        }


        
        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: event.target.action,
          data: new FormData(this),
          success: function(data){
            $('#form-noticia')[0].reset();
            alert(data);
          },
          error: function(){
            alert("Error al Enviar el proceso");
          },
          contentType : false,
          processData : false
        });


	});

	$("#form-categoria").on("submit", function(event){
        event.preventDefault();

        if ($("#imageToUpload").val() == ''){
        	alert('Seleccione Imagen');
        	return;
        }
        
        if ($("#nombrecategoria").val() == ''){
        	alert('Escriba el Nombre de la nueva Categoria');
        	return;
        }

        if ($("#titulonoticia").val() == ''){
        	alert('Escriba el Nombre de la nueva Noticia');
        	return;
        }

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: "api/Categoria",
          data: new FormData(this),
          success: function(data){
			$("#form-categoria")[0].reset();
			alert(data);		
          },
          error: function(){
            alert("Error al Enviar el proceso");
          },
          contentType : false,
          processData : false
        });
        
	});

	$('#form-login').on("submit",function(event){
		event.preventDefault();

		var pass = (CryptoJS.MD5($('#inputPasswordlogin').val())).toString();
		$.ajax({
			url: event.target.action,
			dataType: 'html',
			type: "POST",
			data: {
				action: 'login',
				email: $('#inputEmaillogin').val(),
				password: pass,
				success: function(data){
					location.href = "index.php";
				}
			}
		});
	});

	$('#form-register').on("submit",function(event){
		event.preventDefault();
		var pass = (CryptoJS.MD5($('#inputPasswordregister').val())).toString();
		var mail = $('#inputEmailregister').val();
		$.ajax({
			url: event.target.action,
			dataType: 'JSON',
			type: "POST",
			data: {
				action: "register",
				email: mail,
				password: pass,
			},
			success: function(data){
				$('#form-register')[0].reset();
				alert("Registrado Exitosamente");
			}
		});
	});
}

//------------------------------------------------------------



//-------------------PEDIDOS DE INFORMACION
function inforequest(nombretabla){
	$('#dropdownMenu1').html(nombretabla+" <span class='caret'></span>");

	$.ajax({
		url:'api/'+nombretabla,
		dataType:'JSON',
		type:"GET",
		success:function(data){
			$('#huecotabla').html("");
			$('#tablainfo').html("");

			if (data != ""){
				if (typeof data[0]['idnoticia'] == "undefined"){

					$('#titulo-tabla').html("<h2>Categorias</h2>");
					var tabla = "<table class='table table-hover' id='tablabody'><thead><tr class='success'><th>Nombre Categoria</th><th>Id Categoria</th><th>Accion</th></tr></thead></table>";
					$('#tablainfo').append(tabla);
					
					for(var key in data) {
						crearCategoria(data[key]);
					}

					;
					//formulario para agregar
					$.ajax({
						url:'js/templates/formcategoria.mst',
						success:function(template){
							var rendered = Mustache.render(template);
							$('#createform').html(rendered);
							setHandlersForm();
						}
					});
				}
				else{

					$('#titulo-tabla').html("<h2>Noticias</h2>");
					var tabla = "<table class='table table-hover' id='tablabody'><thead><tr class='success'><th>Titulo Noticia</th><th>Id Not</th><th>Url Imagen</th><th>Accion</th></tr></thead></table>";
					$('#tablainfo').append(tabla);

					for(var key in data) {
						crearNoticia(data[key]);
					}

					$.ajax({
						url:'js/templates/formnoticia.mst',
						success:function(template){
							var rendered = Mustache.render(template,data[key]);
							$('#createform').html(rendered);
							setHandlersForm();
						}
					});

					$.ajax({
						type:"GET",
						url:'api/Categoria',
						datatype: "JSON",
						success:function(data){
							for (var key in data){
								renderDropCategorias(data[key]);	
							}							
						}
					});

				}
			}
			else{
				$.ajax({
					url:'js/templates/formcategoria.mst',
					success:function(template){
						var rendered = Mustache.render(template);
						$('#createform').html(rendered);
						setHandlersForm();
					}
				});
			}

			
		}
	});
}







//minifuncion para mostrar lo seleccionado
function cargarid($id,$nombre){
  $('#dropdownMenu2').html($nombre+"<span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = $id;
}

function renderDropCategorias(data){	
	$.ajax({
		url:'js/templates/dropcategoria.mst',
		success:function(template){
			var rendered = Mustache.render(template,data);
			$('#menucategorias').append(rendered);
		}
	});
}

function logout(){

	$.ajax({
		url:'index.php?action=logout',
		type:"POST",
		dataType:'JSON',		
		success: function(data){
			alert(data);
			location.href = "index.php";
		}
	});
	
}


//activacion de los handlers
$(document).ready(function(){
	setHandlersForm();
});
