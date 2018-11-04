$(document).ready(function(){
	$(document).on("click",".barraNavegacionNoticia",function(){
		window.location.replace($(".txtHdUrlPrincipal").val()+"/Tablero/index/1");
	})
});