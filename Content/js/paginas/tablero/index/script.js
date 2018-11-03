$(document).ready(function(){
	$(document).on("click",".btnBuscarTablero",function(e){
		e.preventDefault();
		alert("Busqueda tablero");
	})
	$(document).on("click",".parametroBusqueda",function(){
		//$(".contenidoParametro").hide();
		var contenedor = $(this).next();
		if(contenedor.attr("estado") == 0){
			contenedor.find(".contenidoParametro").show("slow");
			contenedor.attr("estado",1);
		}else{
			contenedor.find(".contenidoParametro").hide("slow");
			contenedor.attr("estado",0);
		}
		
	})
})