<?php

/**
* 
*/
class Devolucion extends CI_Model{






public function __construct(){
	
}







//Metodos




    public function registrarDevolucion($Id_periferico, $Fecha_dev, $Hora_dev, $Usuario, $Obs_devolucion){
        $this->db->select('s.id_solicitud');        
        $this->db->from('solicitud s'); 
        $this->db->where('s.id_periferico', $Id_periferico);
        $this->db->select_max('s.id_solicitud');

        $resultado = $this->db->get();

        //$r = $resultado->row($resultado->num_rows - 1);                               
        $r = $resultado->row(1);                               

        $campos = array(
            'id_periferico' => $Id_periferico,
            'id_solicitud' => $r->id_solicitud,
            'fecha_dev' => $Fecha_dev,
            'hora_dev' => $Hora_dev,
            'usuario' => $Usuario,
            'obs_devolucion' => $Obs_devolucion
        );

        $this->db->insert('devolucion',$campos);
        
    }





    public function generarDetalleDevoluciones($fechaInicial, $fechaFinal){

        if (($fechaInicial==''|| $fechaFinal=='')||($fechaInicial>$fechaFinal)) {
            $fechaInicial='2000-01-01';
            $fechaFinal='2000-01-02';
        }

        $this->db->select('d.id_periferico, d.fecha_dev, d.hora_dev, d.usuario, d.obs_devolucion, p.nom_periferico');
        $this->db->from('devolucion d');
        $this->db->where('d.fecha_dev >=', $fechaInicial);
        $this->db->where('d.fecha_dev <=', $fechaFinal);
        $this->db->join('periferico p','p.id_periferico = d.id_periferico');
        $this->db->order_by('d.fecha_dev', 'asc');
        $this->db->order_by('d.hora_dev', 'asc');    
        //$this->db->group_by('d.fecha_dev');       
    
        return $this->db->get()->result();      
        
    }


    

    public function listarDevoluciones(){      
        $this->db->select('s.dni_docente, s.id_periferico, s.fecha_sol, s.hora_sol, s.usuario');
        $this->db->from('solicitud s');        
        $resultado = $this->db->get()->result();
        
        return $resultado;

    }






    public function actualizarDev($param, $Fecha_sol, $Hora_sol){
        $this->db->where('solicitud.fecha_sol', $Fecha_sol);
        $this->db->where('solicitud.hora_sol', $Hora_sol);
        $this->db->update('solicitud',$param);
    }






    public function quitarsolicitud($Fecha_sol, $Hora_sol){
        $this->db->where('solicitud.fecha_sol', $Fecha_sol);
        $this->db->where('solicitud.hora_sol', $Hora_sol);
        $this->db->delete('solicitud');
    }




















}
?>