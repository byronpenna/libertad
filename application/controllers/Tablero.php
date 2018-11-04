<?php 

include_once(APPPATH.'controllers/PadreController.php'); 
class Tablero extends PadreController
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');	
		$this->load->model("controles/ControlArticulo");
	}

	function index(){
		$control = new ControlArticulo();
		$articulos = $control->obtenerUltimas();
		$data = array(
			'articulos' => $articulos );
		$this->load->view("Tablero/Index.php",$data);
	}
	function detalle($id){
		$this->load->model("entidades/Articulo");
		$articulo = new Articulo();
		$articulo = $articulo->buscar($id);
		$data = array(
			"articulo" => $articulo
		);
		$this->load->view("Tablero/Detalle.php",$data);	
	}
}