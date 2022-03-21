<?php

/**
* 
*/
class Registro_impresion extends CI_Model{






public function __construct(){
	
}







//Metodos



    public function registrarImpresion($Cod_registro, $Fecha_registro, $Hora_registro, $Total_imp, $Efectivo, $Cred, $Usuario){
		$campos = array(
			'cod_registro' => $Cod_registro,
			'fecha_registro' => $Fecha_registro,	
			'hora_registro' => $Hora_registro,	
			'total_imp' => $Total_imp,	
			'efectivo' => $Efectivo,	
			'cred' => $Cred,
			'usuario' => $Usuario			
		);

		$this->db->insert('registro_impresion',$campos);
        //$campos = array('flag' => false);
        //$param[] = true;
          
        //return $param;	
	}




	public function registrarTiposDeImpresion($Cod_registro, $Id_impresion, $Nom_impresion, $Cant_imp, $Valor_imp){
		$campos = array(
			'cod_registro' => $Cod_registro,
			'id_impresion' => $Id_impresion,
			'nom_impresion' => $Nom_impresion,
			'cant_imp' => $Cant_imp,
			'valor_imp' => $Valor_imp
		);
		$this->db->insert('registro_impresion/tipo_impresion',$campos);		
	}








	public function registrarSaldo($Dni, $Fecha_saldo, $Hora_saldo, $Saldo, $Cred, $Usuario){
		$campos = array(
			'dni' => $Dni,
			'fecha_saldo' => $Fecha_saldo,
			'hora_saldo' => $Hora_saldo,	
			'saldo' => $Saldo,	
			'cred' => $Cred,			
			'usuario' => $Usuario
		);

		$this->db->insert('saldo',$campos);

	}






    public function consultarCodRegistro(){ // método para cual es el siguente cod de registro
	    //$this->db->select('registro_impresion.cod_registro');
	    //$this->db->select('*, COUNT(*) as cont');
	    $this->db->from('registro_impresion');	    
	    return $this->db->count_all_results();	

    }







    public function verRegistrosDeTipoDeImpresion($Fecha_registro){	  
    	
	    $this->db->select('ri_ti.cod_registro, ri_ti.id_impresion, ri_ti.cant_imp, ri_ti.valor_imp, ri_ti.nom_impresion');
        $this->db->select_sum('ri_ti.cant_imp');
        $this->db->select_sum('ri_ti.valor_imp');
		$this->db->from('registro_impresion ri');		
        $this->db->join('registro_impresion/tipo_impresion ri_ti','ri_ti.cod_registro = ri.cod_registro');
		//$this->db->join('tipo_impresion ti','ti.id_impresion = ri_ti.id_impresion');		       
		$this->db->where('ri.fecha_registro', $Fecha_registro);

        $this->db->group_by('ri_ti.nom_impresion');

        $resultado = $this->db->get();

        $i = 0;
        $param=array();

        while ($i < $resultado->num_rows) {                      ////////////////////////////////////////
            $r = $resultado->row($i);                               //////////////////////////////

            $campos = array(        
            'nom_impresion' => $r->nom_impresion,
            'cant_imp' => $r->cant_imp,
            'valor_imp' => $r->valor_imp
            );

            $param[] = $campos;
            $i ++;
        }
        return $param;

	            
    }





    public function verTotalDeImpresion($Fecha_registro){	  
	    $this->db->select('ri.cod_registro, ri.total_imp, ri.efectivo, ri.cred');
        //$this->db->select_sum('ri.efectivo', 'tot_efectivo');
        //$this->db->select_sum('ri.cred', 'tot_cred');
        $this->db->select_sum('ri.total_imp', 'tot_imp');
        $this->db->from('registro_impresion ri');		
		$this->db->where('ri.fecha_registro', $Fecha_registro);

        $this->db->group_by('ri.fecha_registro');      

	    return $this->db->get()->result();	   

    }

    









    public function generarDetallesDeFechas($fechaInicial, $fechaFinal){

    	if (($fechaInicial==''|| $fechaFinal=='')||($fechaInicial>$fechaFinal)) {
    		$fechaInicial='2000-01-01';
    		$fechaFinal='2000-01-02';
    	}

        $this->db->select('ri.cod_registro, ri.fecha_registro, ri.total_imp, ri.efectivo, ri.cred');
        $this->db->select_sum('ri.total_imp');
        $this->db->select_sum('ri.efectivo');
        $this->db->select_sum('ri.cred');	  
		$this->db->from('registro_impresion ri');
		$this->db->where('ri.fecha_registro >=', $fechaInicial);
		$this->db->where('ri.fecha_registro <=', $fechaFinal);
		$this->db->group_by('ri.fecha_registro');       
    
		return $this->db->get()->result();		
        
    }


    







    public function verDetallesDeRegistro($Fecha){

    	$this->db->select('ri.fecha_registro, ri_ti.nom_impresion, ri_ti.cant_imp, ri_ti.valor_imp, ri.hora_registro, ri.usuario');
        $this->db->from('registro_impresion ri');		
        $this->db->join('registro_impresion/tipo_impresion ri_ti','ri_ti.cod_registro = ri.cod_registro');
        $this->db->where('ri.fecha_registro', $Fecha);

        return $this->db->get()->result();
        
    	
    }








    public function verDeudas($Fecha){
        $this->db->select('a.dni_alumno, a.ape_alumno, a.nom_alumno, a.saldo_alumno, s.fecha_saldo, s.hora_saldo, s.saldo, s.cred, s.usuario');
		$this->db->from('saldo s');
        $this->db->join('alumno a','a.dni_alumno = s.dni');	
		$this->db->where('s.fecha_saldo', $Fecha);

        return $this->db->get()->result();               
    	
    }






    public function verDeudas2($Fecha){
        $this->db->select('d.dni_docente, d.ape_docente, d.nom_docente, d.saldo_docente, s.fecha_saldo, s.hora_saldo, s.saldo, s.cred, s.usuario');
		$this->db->from('saldo s');
        $this->db->join('docente d','d.dni_docente = s.dni');	
		$this->db->where('s.fecha_saldo', $Fecha);

        return $this->db->get()->result();               
    	
    }

    
    














}
?>