<?php

/**
* 
*/
class Alumno extends CI_Model{





public function __construct(){
	
}





//Metodos




    public function registrarAlumno($Dni_alumno, $Ape_alumno, $Nom_alumno, $Curso, $Saldo_alumno){
		$campos = array(
			'dni_alumno' => $Dni_alumno,
			'ape_alumno' => $Ape_alumno,
			'nom_alumno' => $Nom_alumno,
			'curso' => $Curso,			
			'saldo_alumno' => $Saldo_alumno
		);

		$this->db->insert('alumno',$campos);
		
	}










	

	

	public function buscarAlumno($dni_alumno){
		$this->db->select('a.dni_alumno, a.nom_alumno, a.ape_alumno, a.curso, a.saldo_alumno');
		$this->db->from('alumno a');
		$this->db->where('a.dni_alumno', $dni_alumno);

		return $this->db->get()->result();
						
	}








	public function buscarAlumno2($dni_alumno){
		$this->db->select('a.dni_alumno, a.nom_alumno, a.ape_alumno, a.curso, a.saldo_alumno');
		$this->db->from('alumno a');
		$this->db->where('a.dni_alumno', $dni_alumno);

		$resultado = $this->db->get()->result();
			
		$r = $resultado->row(0);

		$campos = array(		
			'dni_alumno' => $Dni_alumno,
			'ape_alumno' => $Ape_alumno,
			'nom_alumno' => $Nom_alumno,
			'curso' => $Curso,			
			'saldo_alumno' => $Saldo_alumno
		);

		return $campos;

    }








public function listarAlumnos(){
	    
		$this->db->select('a.dni_alumno, a.nom_alumno, a.ape_alumno, a.curso, a.saldo_alumno');
		$this->db->from('alumno a');
		
		$resultado = $this->db->get()->result();
		
		return $resultado;

}






public function actualizarDatosAlumno($param, $dni_alumno){

        $this->db->where('alumno.dni_alumno', $dni_alumno);
		$this->db->update('alumno',$param);
}







    public function verSaldosAlumno($dni_alumno){
		$this->db->select('a.dni_alumno, s.fecha_saldo, s.hora_saldo, s.saldo, s.cred, s.usuario');
		$this->db->from('saldo s');
        $this->db->join('alumno a','a.dni_alumno = s.dni');	
		$this->db->where('a.dni_alumno', $dni_alumno);

		return $this->db->get()->result();

    }












}

?>