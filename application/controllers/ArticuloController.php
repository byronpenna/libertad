<?php
include_once(APPPATH.'controllers/PadreController.php'); 
class ArticuloController extends PadreController
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		echo "hola";
	}
	function detalle($id){
		$this->load->model("entidades/Articulo");
		$articulo = new Articulo();
		$articulo = $articulo->buscar($id);
		$data = array(
			'articulo' => $articulo
		 );
		$this->load->view("Articulo/detalle.php",$data);
	}
}