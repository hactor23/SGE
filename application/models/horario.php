<?php

/**
* 
*/
class Horario extends CI_Model{




public function __construct(){
	
}






//Metodos





    public function registrarHorario($Id_horario, $Desde, $Hasta){
		$campos = array(
			'id_horario' => $Id_horario,
			'desde' => $Desde,
			'hasta' => $Hasta
		);

		$this->db->insert('horario',$campos);
		
	}




    public function listarHorarios(){	  
	    $this->db->select('h.id_horario, h.desde, h.hasta');
		$this->db->from('horario h');		
		$resultado = $this->db->get()->result();
		
		return $resultado;

    }






    public function actualizarHorario($param, $Id_horario){
        $this->db->where('horario.id_horario', $Id_horario);
		$this->db->update('horario',$param);
    }






    public function quitarHorario($Id_horario){
        $this->db->where('horario.id_horario', $Id_horario);
		$this->db->delete('horario');
    }

















}

?>