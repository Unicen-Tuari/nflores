$(".rotacion").mousemove(function (event){
	$("#siguelo").css("left",event.clientX+10);
	$("#siguelo").css("top",event.clientY+5);
	$("#siguelo").css("opacity","1");
});
				
$(".rotacion").mouseout(function (event){
	$("#siguelo").css("opacity","0");
});


function login(){
			var user = document.getElementById('usuario').value;
			var password = document.getElementById('contrasena').value;
			//alert("login js para ajax");
			$.ajax({
			url: 'index.php',
			dataType: 'JSON',
			type: "POST",
			data: {	
				action: "loginAjax",
				usuario: user,
				contraseña: password,
			},
			success: function(data) {
				$('#responseajaxlogin').html(data.mensaje);
				alert(data.mensaje);
			}
			});
			
			
			
	}