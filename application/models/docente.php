<?php

/**
* 
*/
class Docente extends CI_Model{





public function __construct(){
	
}





//Metodos




    public function registrarDocente($Dni_docente, $Ape_docente, $Nom_docente, $Saldo_docente){
		$campos = array(
			'dni_docente' => $Dni_docente,
			'ape_docente' => $Ape_docente,
			'nom_docente' => $Nom_docente,
			'saldo_docente' => $Saldo_docente
		);

		$this->db->insert('docente',$campos);
		
	}



	

	public function buscarDocente($dni_docente){
		$this->db->select('d.dni_docente, d.nom_docente, d.ape_docente, d.saldo_docente');
		$this->db->from('docente d');
		$this->db->where('d.dni_docente', $dni_docente);

		return $this->db->get()->result();
						
	}








	public function buscarDocente2($dni_docente){
		$this->db->select('d.dni_docente, d.nom_docente, d.ape_docente, d.saldo_docente');
		$this->db->from('docente d');
		$this->db->where('d.dni_docente', $dni_docente);

		$resultado = $this->db->get()->result();
			
		$r = $resultado->row(0);

		$campos = array(		
			'dni_docente' => $Dni_docente,
			'ape_docente' => $Ape_docente,
			'nom_docente' => $Nom_docente,
			'saldo_docente' => $Saldo_docente
		);

		return $campos;

    }








public function listarDocentes(){
	    $this->db->select('d.dni_docente, d.nom_docente, d.ape_docente, d.saldo_docente');
		$this->db->from('docente d');
		
		$resultado = $this->db->get()->result();
		
		return $resultado;

}






public function actualizarDatosDocente($param, $dni_docente){

        $this->db->where('docente.dni_docente', $dni_docente);
		$this->db->update('docente',$param);
}





    public function verSaldosDocente($Dni_docente){
		$this->db->select('d.dni_docente, s.fecha_saldo, s.hora_saldo, s.saldo, s.cred, s.usuario');
		$this->db->from('saldo s');
        $this->db->join('docente d','d.dni_docente = s.dni');	
		$this->db->where('d.dni_docente', $Dni_docente);

		return $this->db->get()->result();

    }











}

?>