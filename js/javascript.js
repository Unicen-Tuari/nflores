$(".rotacion").mousemove(function (event){
	$("#siguelo").css("left",event.clientX+10);
	$("#siguelo").css("top",event.clientY+5);
	$("#siguelo").css("opacity","1");
});
				
$(".rotacion").mouseout(function (event){
	$("#siguelo").css("opacity","0");
});
