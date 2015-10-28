function crearCategoria(data) {

  $.ajax({ url: 'js/templates/categorias.mst',
  		success: function(template) {
    		//var rendered = Mustache.render(template);
    		//var rendered = Mustache.render(template);
			$('#huecoreply').html(data);
      	}
    });
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


}

function inforequest($nombretabla){
	$('#dropdownMenu1').html($nombretabla+" <span class='caret'></span>");

	$.ajax({
		url:'api/'+$nombretabla,
		dataType:'JSON',
		type:"GET",
		success:function(data){			
			crearCategoria(data[0]);
			setHandlersForm();
		}
	});

}



function login(){
			$.ajax({
				url: 'index.php',
				dataType: 'html',
				type: "POST",
				data: {
					action: "login",
				},
				success: function(data) {
					$('#huecologin').html(data);
				}
			});
}

function logout(){
	$.ajax({
			url: 'index.php',
			dataType: 'JSON',
			type: "POST",
			data: {
				action: "logout"
			}
			});
}


function cargarid($id,$nombre){
  $('#dropdownMenu2').html($nombre+"<span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = $id;
}
