function vernoticias($categoria){
	$.ajax({
		url: 'index.php',
		dataType: 'HTML',
		type: "POST",
		data: {
			action: "infocat",
			idcategoria: $categoria,
		},
		success: function(data) {
			$('#huecobody').html(data);
			setHandlers();
		},
		error: function(data){
			alert(data);
		}
	});
}


function infoheroe($heroe){
	$.ajax({
		url: 'index.php',
		dataType: 'HTML',
		type: "POST",
		data: {
			action: "infoheroe",
			heroe: $heroe,
		},
		success: function(data) {
			$('#infolegendas').html(data);
			setHandlers();
		},
		error: function(data){
			//alert(data);
		}
	});
}

function infonavegacion($seccion){
	$.ajax({
		url: 'index.php',
		dataType: 'HTML',
		type: "POST",
		data: {
			action: "infonav",
			seccion: $seccion,
		},
		success: function(data){
			$('#huecobody').html(data);
			setHandlers();
		},
		error: function(data){
			$('#huecobody').html(data);
			setHandlers();
		}
	});
}

function setHandlers(){

	$("#form-contactos").on("submit", function(event){

        event.preventDefault();
	    $.ajax({
	        type: "POST",
	        dataType: "JSON",
	        url: event.target.action,
	        data: new FormData(this),
	        succes: function(data){
	        	$('#form-contactos')[0].reset();
	        	alert(data);
	        },
	        contentType : false,
	        processData : false
	    });
	});
}

$(document).ready(function(){
	setHandlers();
});

