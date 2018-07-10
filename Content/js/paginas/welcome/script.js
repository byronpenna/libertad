$(document).ready(function(){
	$(document).on("click",".btnBuscador",function(e){
		var frm = {
			textoBusqueda: $(".txtBuscar").val()
		};
		console.log("Formulario a enviar",frm);
		buscar(frm,function(data){
			//console
			console.log("La data devuelta es",data);
			/*var obj = jQuery.parseJSON(data);
			if (obj.estado){
				console.log(data);
				console.log(obj);
				tr.remove();
			}*/
		})
	})
})