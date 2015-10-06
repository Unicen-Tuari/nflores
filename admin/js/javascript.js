$(".cargarcategoria").on("click", function(event){
        event.preventDefault();

        var archivos = $("#imageToUpload").prop('file');

        if(typeof(archivos) == 'undefined'){
          mostrarMensaje("No pusiste imagenes");
          return;
        }

        var datos = new FormData();

        $.each(archivos, function(key,value){
          datos.append(key,value);
        });
        $.ajax({
          type: "POST",
          dataType: "json",
          url: event.target.href,
          data: datos,
          success: function(data){
            //alert('volvio bien');
          },
          error: function(){
            alert("No anduvo la llamada AJAX");
          },
          contentType : false,
          processData : false
        });

});

function inforequest($nombretabla){
	$('#dropdownMenu1').html($nombretabla+" <span class='caret'></span>");
	$.ajax({
		url:'index.php',
		dataType:'html',
		type:"POST",
		data:{
			action: 'datarequest',
			tabla: $nombretabla,
		},
		success:function(data){
			$('#huecoreply').html(data);
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
