<?php

/**
* 
*/
class Compra extends CI_Model{





public function __construct(){
	
}





//Metodos




    public function registrarCompra($Fecha_compra, $Letra_fact, $Num_fact, $Comercio, $Monto_compra, $Desc_Compra, $Usuario){
		$campos = array(
			'fecha_compra' => $Fecha_compra,
			'letra_fact' => $Letra_fact,
			'num_fact' => $Num_fact,
			'comercio' => $Comercio,
			'monto_compra' => $Monto_compra,			
			'desc_compra' => $Desc_Compra,
			'usuario' => $Usuario

		);

		$this->db->insert('compra',$campos);
		
	}


	

	

	public function buscarCompra($Letra_fact, $Num_fact){
		$this->db->select('c.fecha_compra, c.letra_fact, c.num_fact, c.comercio, c.monto_compra, c.desc_compra, c.usuario');
		$this->db->from('compra c');
		$this->db->where('c.letra_fact', $Letra_fact);
		$this->db->where('c.num_fact', $Num_fact);

		return $this->db->get()->result();
						
	}










	public function listarCompras(){		  
			$this->db->select('c.fecha_compra, c.letra_fact, c.num_fact, c.comercio, c.monto_compra, c.desc_compra, c.usuario');
			$this->db->from('compra c');
			
			$resultado = $this->db->get()->result();
			
			return $resultado;

	}






	public function actualizarDatosCompra($param, $letra_fact, $num_fact){
	        $this->db->where('compra.letra_fact', $letra_fact);
	        $this->db->where('compra.num_fact', $num_fact);
			$this->db->update('compra',$param);
	}










		public function arqueo(){	
		    $anio = date('Y');	 
		    $anio2 = date('Y-m-d');   
	        $param = array();	                                    	        	              	     
	        
			for($i = 1; $i <= 12; $i++){
				$impresion = 0;
	            $compra = 0;	  
				$this->db->select('c.fecha_compra, c.letra_fact, c.num_fact, c.monto_compra, c.usuario');
				$this->db->select_sum('c.monto_compra');
				$this->db->from('compra c');
	            $this->db->where('c.fecha_compra >=', $anio."-".$i."-".'01');
	            $this->db->where('c.fecha_compra <=', $anio."-".$i."-".'31');
	            //$this->db->group_by('c.fecha_compra');		        
				$resultado = $this->db->get();

				$j = 0;
		        while ($j < $resultado->num_rows) {                      ////////////////////////////////////////
		            $r = $resultado->row($j);                               //////////////////////////////		                  
		            $compra = $r->monto_compra + $compra;		            
		            $j ++;
		        }
				
		        $this->db->select('ri.cod_registro, ri.fecha_registro, ri.efectivo');
		        $this->db->select_sum('ri.efectivo');
				$this->db->from('registro_impresion ri');		
		        $this->db->where('ri.fecha_registro >=', $anio."-".$i."-".'01');
	            $this->db->where('ri.fecha_registro <=', $anio."-".$i."-".'31');
	            //$this->db->group_by('c.fecha_compra');
		        
				$resultado = $this->db->get();

				$j = 0;
		        while ($j < $resultado->num_rows) {                      ////////////////////////////////////////
		            $r = $resultado->row($j);                               //////////////////////////////		                  
		            $impresion = $r->efectivo + $impresion;		            
		            $j ++;
		        }

		        setlocale(LC_TIME, 'spanish');  
 			    $mes = strftime("%B",mktime(0, 0, 0, $i, 1, 2000)); 
 			    $mes = ucfirst($mes);

				$campos = array(        
			        'mes' => $mes,
			        'impresiones' => $impresion,
			        'compras' => $compra
		        );
		        $param[] = $campos;
			}			
				        
	        return $param;      

	    }




















}

?>