<?php

/**
* 
*/
class Observacion extends CI_Model{





public function __construct(){
	
}





//Metodos




    public function registrarObservacion($Cod_registro, $Descripcion){
		$campos = array(
			'cod_registro' => $Cod_registro,
			'descripcion' => $Descripcion
		);

		$this->db->insert('observacion',$campos);
		
	}






	public function listarObservaciones($Fecha){
	    $this->db->select('ri.cod_registro, o.descripcion, ri.hora_registro, ri.usuario');
		$this->db->from('registro_impresion ri');
        $this->db->join('observacion o','o.cod_registro = ri.cod_registro');       		
		$this->db->where('ri.fecha_registro', $Fecha);
		
		return $this->db->get()->result();

    }




    public function verObservacion($Cod_registro){
	    $this->db->select('o.cod_registro, o.descripcion');
        $this->db->from('observacion o');       		
		$this->db->where('o.cod_registro', $Cod_registro);
		
		return $this->db->get()->result();

    }



	



}

?>