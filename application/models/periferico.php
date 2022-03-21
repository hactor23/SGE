<?php

/**
* 
*/
class Periferico extends CI_Model{




public function __construct(){
	
}






//Metodos





    public function registrarPeriferico($Id_periferico, $Nom_periferico, $Desc_periferico){
		$campos = array(
			'id_periferico' => $Id_periferico,
			'nom_periferico' => $Nom_periferico,
			'desc_periferico' => $Desc_periferico,
			'estado_periferico' => 0
		);

		$this->db->insert('periferico',$campos);
		
	}




	public function buscarPeriferico($Id_periferico){      
        $this->db->select('p.id_periferico, p.nom_periferico, p.desc_periferico, p.estado_periferico');
        $this->db->from('periferico p');    
        $this->db->where('p.id_periferico', $Id_periferico);    
        $resultado = $this->db->get()->result();
        
        return $resultado;

    }





    public function listarPerifericos(){	  
	    $this->db->select('p.id_periferico, p.nom_periferico, p.desc_periferico, p.estado_periferico');
		$this->db->from('periferico p');		
		$resultado = $this->db->get()->result();
		
		return $resultado;

    }






    public function actualizarPeriferico($param, $Id_periferico){
        $this->db->where('periferico.id_periferico', $Id_periferico);
		$this->db->update('periferico',$param);
    }






    public function quitarPeriferico($Id_periferico){
        $this->db->where('periferico.id_periferico', $Id_periferico);
		$this->db->delete('periferico');
    }

















}

?>