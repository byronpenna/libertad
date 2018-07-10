<?php 
class Articulo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	// propiedades 
			public $_idArticulo;
			public $_titulo;
			public $_articulo;
			public $_categoria;
			public $_rutaImg;
	public function llenarByRow($row)
	{		
		$articulo = null;
		try {
			$articulo = new Articulo();
			$articulo->_idArticulo	= $row->idArticulo;
		} catch (Exception $e) {
			$articulo = null;
		}
		return $articulo;
	}
	/*
idArticuloPrimaria	int(11)			No	Ninguna		AUTO_INCREMENT	 Cambiar Cambiar	 Eliminar Eliminar	
Más
	2	titulo	varchar(100)	latin1_swedish_ci		No	Ninguna			 Cambiar Cambiar	 Eliminar Eliminar	
Más
	3	articulo	varchar(3000)	latin1_swedish_ci		No	Ninguna			 Cambiar Cambiar	 Eliminar Eliminar	
Más
	4	categoria_fkÍndice	int(11)			No	Ninguna			 Cambiar Cambiar	 Eliminar Eliminar	
Más
	5	img_miniatura	varchar(600)	latin1_swedish_ci		No	Ninguna			 Cambiar Cambiar	 Eliminar Eliminar	
Más
	6	usuarioCreador_fkÍndice	int(11)			No	Ninguna			 Cambiar Cambiar	 Eliminar Eliminar	
Más
	7	fechaCreacion	datetime			No	Ninguna			 Cambiar Cambiar	 Eliminar Eliminar	
Más
	8	fechaUltimaModificacio
	*/
}