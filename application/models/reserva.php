<?php

/**
* 
*/
class Reserva extends CI_Model{






public function __construct(){
	
}







//Metodos



    public function registrarReserva($Dni_docente, $Id_periferico, $Num_reserva, $Fecha_res, $Hora_res, $Hora_dev_res, $Usuario){
        $campos = array(
            'dni_docente' => $Dni_docente,
            'id_periferico' => $Id_periferico,
            'num_reserva' => $Num_reserva,
            'fecha_res' => $Fecha_res,
            'hora_res' => $Hora_res,
            'hora_dev_res' => $Hora_dev_res,
            'usuario' => $Usuario
        );

        $this->db->insert('reserva',$campos);
        
    }





    

    public function listarReservas($Fecha_res){      
        $this->db->select('r.dni_docente, d.nom_docente, d.ape_docente, r.id_periferico, p.nom_periferico, r.num_reserva, r.fecha_res, r.hora_res, r.hora_dev_res, r.usuario');
        $this->db->from('reserva r');   
        $this->db->join('periferico p','p.id_periferico = r.id_periferico');
        $this->db->join('docente d','d.dni_docente = r.dni_docente');
        $this->db->where('r.fecha_res', $Fecha_res);
        $this->db->order_by('r.hora_res', 'asc');      
        $resultado = $this->db->get()->result();
        
        return $resultado;

    }







    public function listarReservas2(){      
        $this->db->select('r.num_reserva');
        $this->db->from('reserva r');   
        //$this->db->join('periferico p','p.id_periferico = r.id_periferico');
        //$this->db->join('docente d','d.dni_docente = r.dni_docente');
        //$this->db->where('r.fecha_res', $Fecha_res);
        $this->db->group_by('r.num_reserva'); 
        $this->db->order_by('r.num_reserva', 'asc');             
        $resultado = $this->db->get()->result();
        
        return $resultado;

    }





    
    public function verificarReserva($Id_periferico, $Fecha_res, $Hora_res, $Hora_dev_res){
        $this->db->from('reserva r');   
        //$this->db->where('r.id_periferico', $Id_periferico);
        //$this->db->where('r.fecha_res', $Fecha_res);
        /*$this->db->where('r.hora_res <=', $Hora_res);
        $this->db->where('r.hora_dev_res >=', $Hora_res);
        $this->db->where('r.hora_res <=', $Hora_dev_res);
        $this->db->where('r.hora_dev_res >=', $Hora_dev_res);*/

        //$where1 = "(r.hora_res <= $Hora_res AND r.hora_dev_res >= $Hora_res) OR (r.hora_res <= $Hora_dev_res AND r.hora_dev_res >= $Hora_dev_res)";
        //$where2 = "r.hora_res <= $Hora_dev_res AND r.hora_dev_res >= $Hora_dev_res";
        //$where = "$where1 OR $where2";

        /*$where1 = "r.fecha_res = '$Fecha_res'";
        $where2 = "r.id_periferico = '$Id_periferico'";
        $where = "$where1 AND $where2";*/

        $where1 = "r.fecha_res = '$Fecha_res' AND r.id_periferico = '$Id_periferico'";
        $where2 = "r.hora_res <= '$Hora_res' AND r.hora_dev_res >= '$Hora_res'";
        $where3 = "r.hora_res <= '$Hora_dev_res' AND r.hora_dev_res >= '$Hora_dev_res'";
        //$where4 = "$where2 OR $where3";
        
        $where = "$where1 AND ($where2 OR $where3)";

        $this->db->where($where);
       
        return $this->db->count_all_results();  
        //return $this->db->get()->result();

    }









    public function quitarReserva($Id_periferico, $Fecha_res, $Hora_res){
        $this->db->where('reserva.id_periferico', $Id_periferico);
        $this->db->where('reserva.fecha_res', $Fecha_res);
        $this->db->where('reserva.hora_res', $Hora_res);
        $this->db->delete('reserva');
    }






   public function generarDetalleReservas($fechaInicial, $fechaFinal){

        if (($fechaInicial==''|| $fechaFinal=='')||($fechaInicial>$fechaFinal)) {
            $fechaInicial='2000-01-01';
            $fechaFinal='2000-01-02';
        }

        $this->db->select('r.dni_docente, d.nom_docente, d.ape_docente, r.id_periferico, p.nom_periferico, r.num_reserva, r.fecha_res, r.hora_res, r.hora_dev_res, r.usuario');
        $this->db->from('reserva r');
        $this->db->where('r.fecha_res >=', $fechaInicial);
        $this->db->where('r.fecha_res <=', $fechaFinal);
        $this->db->join('periferico p','p.id_periferico = r.id_periferico');
        $this->db->join('docente d','d.dni_docente = r.dni_docente');    
        $this->db->order_by('r.fecha_res', 'asc');           
        $this->db->order_by('r.hora_res', 'asc');    
        //$this->db->group_by('s.fecha_sol');       
    
        return $this->db->get()->result();      
        
    }












    public function verReservas($Fecha_res, $Id_periferico){      
        $this->db->select('r.dni_docente, d.nom_docente, d.ape_docente, r.id_periferico, p.nom_periferico, r.num_reserva, r.fecha_res, r.hora_res, r.hora_dev_res, r.usuario');
        $this->db->from('reserva r');   
        $this->db->join('periferico p','p.id_periferico = r.id_periferico');
        $this->db->join('docente d','d.dni_docente = r.dni_docente');
        $this->db->where('r.fecha_res', $Fecha_res);
        $this->db->where('r.id_periferico', $Id_periferico);
        $this->db->order_by('r.hora_res', 'asc');      
        $resultado = $this->db->get()->result();
        
        return $resultado;

    }













}
?>