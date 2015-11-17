function crearCategoria(data) {
	var title = "<div class='titulo'><p>Categorias</p></div><table class='table table-hover'> <tr class='success'><td>Nombre Categoria</td><td>Id Categoria</td></tr>";
	$('#huecoreply').append(title);
	for(var key in data) {
		$.ajax({ 
			url: 'js/templates/categorias.mst',
			success: function(template) {
				var rendered = Mustache.render(template,data[key]);
				$('#huecoreply').append(rendered);
			}
		});
	}		
	$('#huecoreply').append('</table>');
}



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
	          dataType: "HTML",
	          url: event.target.action,
	          data: new FormData(this),
	          success: function(data){
	            $('#huecoreply').html(data);
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
	          data: new FormData(this),
	          success: function(data){
	            $('#huecoreply').html(data);
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
					$(document).html(data);
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
			success:function(data){
				//$('#replyregister').html(data);
				alert("Registrado exitosamente: "+data);
			}
		});
	});
}

function logout(){
	$.ajax({
		url:'index.php?action=logout',
		dataType:'JSON',
		type:"POST",
	});
}

function inforequest($nombretabla){
	$('#dropdownMenu1').html($nombretabla+" <span class='caret'></span>");

	$.ajax({
		url:'api/'+$nombretabla,
		dataType:'JSON',
		type:"GET",
		success:function(data){
			$('#huecoreply').html("");
			if (data[0]['idcategoria']){
				crearCategoria(data);
			}
			//else {crearNoticia(data);}
			setHandlersForm();
		}
	});

}

function cargarid($id,$nombre){
  $('#dropdownMenu2').html($nombre+"<span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = $id;
}	


$(document).ready(function(){
	setHandlersForm();
});