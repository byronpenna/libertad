function buscar(frm,callback){
	
	var url = $(".txtHdBuscar").val();	
	var peticion = new PeticionAjax(url,frm,"POST");
	peticion.peticion(function(data){
		callback(data);
	})	
}