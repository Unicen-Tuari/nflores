function crearCategoria(data) {
	var columnas = "<table class='table table-hover'> <tr class='success'><th>Nombre Categoria</th><th>Id Categoria</th></tr>";
	$('#tablainfo').append(columnas);
	$('#titulo-tabla').html ="<div class='titulo'><p>Categorias</p></div>"; 
	for(var key in data) {
		$.ajax({ 
			url: 'js/templates/categorias.mst',
			success: function(template) {
				$('#tablainfo').append("<tr>");
				var rendered = Mustache.render(template,data[key]);
				$('#tablainfo').append(rendered);
				$('#tablainfo').append("</tr>");
			}
		});
	}
	$('#tablainfo').append('</table>');
	//formulario para agregar
	$.ajax({
		url:'js/templates/formcategoria.mst',
		success:function(template){
			var rendered = Mustache.render(template);
			$('#createform').html(rendered);
		}
	});	
}

function crearNoticia(data) {
	var columnas = "<table class='table table-hover'> <tr class='success'><th>Categoria</th><th>Id Cat</th><th>Titulo Noticia</th><th>Id Not</th><th>Url Imagen</th></tr>";
	$('#titulo-tabla').html ="<div class='titulo'><p>Noticias</p></div>"; 
	$('#tablainfo').html(columnas);
	for(var key in data) {
		$.ajax({ 
			url: 'js/templates/noticias.mst',
			success: function(template) {
				$('#tablainfo').append("<tr>");
				var rendered = Mustache.render(template,data[key]);
				$('#tablainfo').append(rendered);				
				$('#tablainfo').append("</tr>");
			}
		});
	}

	$('#tablainfo').append('</table>');
	$.ajax({
		url:'js/templates/formnoticia.mst',
		success:function(template){
			var rendered = Mustache.render(template,data[key]);
			$('#createform').html(rendered);
		}
	});

	$.ajax({
		type:"GET",
		url:'api/Categoria',
		datatype: "JSON",
		success:function(data){
			renderDropCategorias(data);
		}
	});	
}



function borrarCategoria(idCat){
	$.ajax(
    {
      	method: "DELETE",
      	url: "api/Categoria/"+idCat
    })
  	.done(function(data) {
  		//cambiar
     	//$('#tarea'+idCat).remove();
     	alert(data);
  	})
  	.fail(function() {
  		alert('Imposible borrar la tarea');
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
        else{
	        $.ajax({
	          type: "POST",
	          dataType: "JSON",
	          url: event.target.action,
	          data: {noticia: new FormData(this)},
	          success: function(data){
	            alert(data);
	          },
	          error: function(){
	            alert("Error al Enviar el proceso");
	          },
	          contentType : false,
	          processData : false
	        });
        }
	});

	$("#form-categoria").on("submit", function(event){
        event.preventDefault();
        
        if ($("#imageToUpload").val() == ''){
        	alert('Seleccione Imagen');
        	return;
        }        
        else{
	        $.ajax({
	          type: "POST",
	          dataType: "HTML",
	          url: event.target.action,
	          data: {categoria: new FormData(this)},
	          success: function(data){
	          	alert(data);
	          },
	          error: function(){
	            alert("Error al Enviar el proceso");
	          },
	          contentType : false,
	          processData : false
	        });
        }
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
			}
		});
	});
}

function inforequest($nombretabla){
	$('#dropdownMenu1').html($nombretabla+" <span class='caret'></span>");

	$.ajax({
		url:'api/'+$nombretabla,
		dataType:'JSON',
		type:"GET",
		success:function(data){
			$('#huecotabla').html("");
			$('#tablainfo').html("");
			
			if (data != ""){
				if (typeof data[0]['idnoticia'] == "undefined"){
					crearCategoria(data);
				}
				else{
					crearNoticia(data);
				}
			}	
			else{
				$.ajax({
					url:'js/templates/formcategoria.mst',
					success:function(template){
						var rendered = Mustache.render(template);
						$('#createform').html(rendered);
					}
				});
			}		
			setHandlersForm();
		}
	});
}

function getNoticia(idnoticia){
	$.ajax({
		url:'api/Noticia',
		datatype:'JSON',
		type:"GET",
		data:{noticia: idnoticia},
		success:function(data){
			$('#huecotabla').html("");
			$('#tablainfo').html("");
			mostrarNoticia(data);
			setHandlersForm();
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
	for (var key in data) {
		$.ajax({
			url:'js/templates/dropcategoria.mst',
			success:function(template){
				var rendered = Mustache.render(template,data[key])
				$('#menucategorias').append(rendered);
			}
		});
	};
}

function logout(){
	$.ajax({
		url:'index.php?action=logout',
		dataType:'JSON',
		type:"POST"
	})
	.done(function(){

	});
	location.href = "index.php";
}


//activacion de los handlers
$(document).ready(function(){
	setHandlersForm();
});