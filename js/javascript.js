$(".rotacion").mousemove(function (event){
	$("#siguelo").css("left",event.clientX);
	$("#siguelo").css("top",event.clientY);
	$("#siguelo").css("opacity","1");
});
				
$(".rotacion").mouseout(function (event){
	$("#siguelo").css("opacity","0");
});