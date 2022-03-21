<?php

/**
* 
*/
class Tipo_impresion extends CI_Model{




public function __construct(){
	
}






//Metodos





    public function registrarTipoDeImpresion($Id_impresion, $Nom_impresion, $Valor){
		$campos = array(
			'id_impresion' => $Id_impresion,
			'nom_impresion' => $Nom_impresion,
			'valor' => $Valor
		);

		$this->db->insert('tipo_impresion',$campos);
		
	}







    public function listarTiposDeImpresion(){	  
	    $this->db->select('ti.id_impresion, ti.nom_impresion, ti.valor');
		$this->db->from('tipo_impresion ti');		
		$resultado = $this->db->get()->result();
		
		return $resultado;

    }






    public function actualizarDatosTipoDeImpresion($param, $Id_impresion){
        $this->db->where('tipo_impresion.id_impresion', $Id_impresion);
		$this->db->update('tipo_impresion',$param);
    }






    public function quitarTipoDeImpresion($Id_impresion){
        $this->db->where('tipo_impresion.id_impresion', $Id_impresion);
		$this->db->delete('tipo_impresion');
    }





    public function verTipoDeImpresion($Id_impresion){
	    $this->db->select('ti.id_impresion, ti.nom_impresion, ti.valor');
		$this->db->from('tipo_impresion ti');		
        $this->db->where('tipo_impresion.id_impresion', $Id_impresion);	  
		
		$resultado = $this->db->get()->result();
		
		return $resultado;

    }
















}

?>