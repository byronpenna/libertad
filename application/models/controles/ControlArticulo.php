<?php 
class ControlArticulo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("entidades/Articulo");
	}
	public function obtenerUltimas(){
		$articulos = null;
		//echo "aca";
		try {
			$articulos 	= array();
			$sql 		= "call sp_controlArticulo_ultimas()";
			$query 		= $this->db->query($sql);
			foreach ($query->result() as $key => $row) {
				$articulo = new Articulo();
				$articulo = $articulo->llenarByRow($row);
				array_push($articulos, $articulo);
			}
			$query->next_result();
			$query->free_result();
		}catch (Exception  $e) {
			return $e;
		}
		//print_r($articulos);
		return $articulos;
	}
	public function buscar($txtBusqueda){
		$articulos = null;
		//echo "aca";
		try {
			$articulos 	= array();
			$sql 		= "call sp_controlArticulo_buscar('".$txtBusqueda."')";
			//echo "aquito";
			$query 		= $this->db->query($sql);
			foreach ($query->result() as $key => $row) {
				//echo "forsito";
				$articulo = new Articulo();
				$articulo = $articulo->llenarByRow($row);
				array_push($articulos, $articulo);
				//print_r($row);
			}
			$query->next_result();
			$query->free_result();
			
		} catch (Exception  $e) {
			return $e;
		}
		//print_r($articulos);
		return $articulos;
	}
}