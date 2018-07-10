<?php 
class ControlArticulo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("entidades/Articulo");
	}
	public function buscar($txtBusqueda){
		$articulos;
		try {
			$articulos 	= array();
			$sql 		= "call sp_controlArticulo_buscar('".$txtBusqueda."')";
			$query 		= $this->db->query($sql);
			foreach ($query->result() as $key => $row) {
				$articulo = new Articulo();
				$articulo = $articulo->llenarByRow($row);
			}
			$query->next_result();
			$query->free_result();
			return $articulos;
		} catch (Exception  $e) {
			return null;
		}
	}
}