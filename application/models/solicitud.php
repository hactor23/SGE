<?php

/**
* 
*/
class Solicitud extends CI_Model{






public function __construct(){
	
}







//Metodos



    public function registrarSolicitud($Dni_docente, $Id_periferico, $Fecha_sol, $Hora_sol, $Usuario){
        $campos = array(
            'dni_docente' => $Dni_docente,
            'id_periferico' => $Id_periferico,
            'fecha_sol' => $Fecha_sol,
            'hora_sol' => $Hora_sol,
            'usuario' => $Usuario
        );

        $this->db->insert('solicitud',$campos);
        
    }



    


    public function detalleSolicitud($Id_periferico){      
        $this->db->select('d.ape_docente, d.nom_docente, s.fecha_sol, s.hora_sol, s.usuario');
        //$this->db->select_max('s.fecha_sol');
        //$this->db->select_max('s.hora_sol');
        $this->db->from('solicitud s'); 
        //$this->db->join('periferico p','p.id_periferico = s.id_periferico');
        $this->db->join('docente d','d.dni_docente = s.dni_docente');
        //$this->db->where('p.estado_periferico', 0); 
        $this->db->where('s.id_periferico', $Id_periferico);
        //$this->db->group_by('s.fecha_sol');
        $this->db->order_by('s.fecha_sol', 'asc');
        $this->db->order_by('s.hora_sol', 'asc'); 
        //return $this->db->get()->result();
        
        $resultado = $this->db->get();

        $param=array();

        $r = $resultado->row($resultado->num_rows - 1);                               

        $campos = array(        
        'ape_docente' => $r->ape_docente,
        'nom_docente' => $r->nom_docente,
        'fecha_sol' => $r->fecha_sol,
        'hora_sol' => $r->hora_sol,
        'usuario' => $r->usuario
        );

        $param[] = $campos;
        
        return $param;
        

    }



    

    public function listarSolicitudes(){      
        $this->db->select('s.dni_docente, s.id_periferico, s.fecha_sol, s.hora_sol, s.usuario');
        $this->db->from('solicitud s');        
        $resultado = $this->db->get()->result();
        
        return $resultado;

    }






    public function actualizarSolicitud($param, $Fecha_sol, $Hora_sol){
        $this->db->where('solicitud.fecha_sol', $Fecha_sol);
        $this->db->where('solicitud.hora_sol', $Hora_sol);
        $this->db->update('solicitud',$param);
    }






    public function quitarSolicitud($Fecha_sol, $Hora_sol){
        $this->db->where('solicitud.fecha_sol', $Fecha_sol);
        $this->db->where('solicitud.hora_sol', $Hora_sol);
        $this->db->delete('solicitud');
    }



    



    public function generarDetalleSolicitudes($fechaInicial, $fechaFinal){

        if (($fechaInicial==''|| $fechaFinal=='')||($fechaInicial>$fechaFinal)) {
            $fechaInicial='2000-01-01';
            $fechaFinal='2000-01-02';
        }

        $this->db->select('s.dni_docente, s.id_periferico, p.nom_periferico, d.nom_docente, d.ape_docente, s.fecha_sol, s.hora_sol, s.usuario');
        $this->db->from('solicitud s');
        $this->db->where('s.fecha_sol >=', $fechaInicial);
        $this->db->where('s.fecha_sol <=', $fechaFinal);
        $this->db->join('periferico p','p.id_periferico = s.id_periferico');
        $this->db->join('docente d','d.dni_docente = s.dni_docente');    
        $this->db->order_by('s.fecha_sol', 'asc');           
        $this->db->order_by('s.hora_sol', 'asc');    
        //$this->db->group_by('s.fecha_sol');       
    
        return $this->db->get()->result();      
        
    }

















}
?>