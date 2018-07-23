function agregar(frm,callback){
	var url = $(".txtHdCambiarEstado").val();	
	var peticion = new PeticionAjax(url,frm,"POST");

	peticion.peticion(function(data){
		callback(data);
	})	
}