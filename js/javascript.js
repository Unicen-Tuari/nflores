function backlogin(){
	$('#huecologin').html('<a onclick="login()">Login</a>')
}




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
			//usuario: user,
			//contraseña: password,
		},
		success: function(data) {
			$('#infolegendas').html(data);
		},
		error: function(data){
			alert(data);
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
		},
		error: function(data){
			$('#huecobody').html(data);
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
