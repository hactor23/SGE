<?php

/**
* 
*/
class Usuario extends CI_Model{





public function __construct(){
	
}










	
	public function ingresarUsuario($Nom_usuario, $Contraseña){
		$this->db->select('u.nom_usuario,u.contraseña');
		$this->db->from('usuario u');
		$this->db->where('u.nom_usuario', $Nom_usuario);
		$this->db->where('u.contraseña', $Contraseña);

		$resultado = $this->db->get();
		
		if ($resultado->num_rows == 1) {
			
			$r = $resultado->row();
			
			$s_usuario = array(
				's_nom_usuario' => $r->nom_usuario
			);

			$this->session->set_userdata($s_usuario);
			//$this->session->set_flasdata('asss');
			//$this->session->set_userdata('s_nom_usuario',$r->nom_usuario);
			//$this->session->userdata('s_legajo',$r->legajo);

			return 1;
		}
		else{
			return 0;
		}
		
	}




}

?>