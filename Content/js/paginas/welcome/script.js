$(document).ready(function(){
	$(document).on("click",".btnBuscador",function(e){
		var frm = {
			textoBusqueda: $(".txtBuscar").val()
		};
		console.log("Formulario a enviar",frm);
		buscar(frm,function(data){
			//console
			console.log("La data devuelta es",data);
			var obj = jQuery.parseJSON(data);
			if (obj.estado){
				$(".divContenidoArticulo").empty();
				var divArticulos = "";
				$.each(obj.resultado,function(i,articulo){
					console.log("Entro aca",articulo);
					//var img = $(".txtHdBaseUrl").val()+"Content/img/articulos/"+articulo._idArticulo+"/min.jpg";
					var img = $(".txtHdBaseUrl").val()+"Content/img/generales/noImagenArticulo.png";
					divArticulos += "\
					   	<div class='col-lg-4'>\
							<a href='"+$(".txtHdSiteUrl").val()+"/ArticuloController/detalle/"+articulo._idArticulo+"'>\
								<div class='row marginNull articulo'>\
									<h3>"+articulo._titulo+" </h3>\
									<img src='"+img+"'  >\
									<div class='contenidoArticulo'>\
										"+articulo._breveDescripcion+"\
									</div>\
								</div>\
							</a>\
						</div>\
					";
				});
				$(".divContenidoArticulo").append(divArticulos);
			}
		})
	})
})