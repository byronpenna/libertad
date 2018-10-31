<?php 
include_once(APPPATH.'controllers/PadreController.php'); 
class Tablero extends PadreController
{
	function __construct()
	{
		parent::__construct();
	}
	 function index(){
		$data = array();
		$this->load->view("Tablero/index.php",$data);
	}
}