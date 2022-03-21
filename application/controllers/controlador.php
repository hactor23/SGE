    <?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	   defined('BASEPATH') OR exit('No direct script access allowed');


class Controlador extends CI_Controller {



    function _construct(){
    	parent::_construct();    	
    }




	public function index(){
        //$enlace_actual = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
        //echo $enlace_actual;	
        $data['mensaje'] = '';
        $this->load->view('vLogin',$data);
	}




    public function fecha(){
       
       $fecha = date('j/m/Y');
       $param['fecha'] = $fecha;
       $res[] = $param;

        echo json_encode($res);   

    }


    public function fecha2(){
       
       //$fecha = date('Y-m');
        $anio = date('Y');
        $mes = date('m');
        $dia = date('d');
        $fecha = $anio."-".$mes."-" .$dia;
       $param['fecha'] = $fecha;
       $res[] = $param;

        echo json_encode($res);   

    }



    public function fecha3(){
       
       //$fecha = date('Y-m');
        $anio = date('Y');
        $mes = date('m');
        //$dia = date('d');
        $fecha = $anio."-".$mes."-01";
       $param['fecha'] = $fecha;
       $res[] = $param;

        echo json_encode($res);   

    }





//---------   Sesión Usuario  -------------


    public function ingresarUsuario(){
        //$this->load->library('encrypt');
        $this->load->model('usuario');

        $res = $this->usuario->ingresarUsuario($this->input->post('txtUsuario'), $this->input->post('txtClave'));

        if ($res == 1) {
            $data['mensaje'] = $this->session->userdata('s_nom_usuario');
            $this->load->view('layout/header',$data);
            $this->load->view('layout/menu');
            $this->load->view('vSolicitud');
            
            //echo 'Current PHP version: ' . phpversion();

            $this->load->view('layout/footer');

        }
        else{     
            $data['mensaje'] = 'usuario o contraseña erronea';
            $this->load->view('vLogin',$data);
                               
        }
            
        
    }






    public function cerrarSesion(){        
        $this->session->sess_destroy();
        redirect(base_url());
    }
    







//-----   ALUMNO   ---------------------------------------------------

    public function registrarAlumno(){
        $this->load->model('alumno');
        
        $this->alumno->registrarAlumno($this->input->post('dni'), $this->input->post('ape'), $this->input->post('nom'), $this->input->post('curso'), $this->input->post('saldo'));

    }



    public function buscarAlumno(){
        $this->load->model('alumno');
    
        echo json_encode($this->alumno->buscarAlumno($this->input->post('dni')));

    }



    public function listarAlumnos(){
      
        $this->load->model('alumno');

        echo json_encode($this->alumno->listarAlumnos());

    }



    public function actualizarDatosAlumno(){ 

        $this->load->model('alumno');

        $param['dni_alumno'] = $this->input->post('dni');
        $param['ape_alumno'] = $this->input->post('ape');
        $param['nom_alumno'] = $this->input->post('nom');
        $param['curso'] = $this->input->post('curso');        

        $this->alumno->actualizarDatosAlumno($param, $this->input->post('dni1'));
    }





    public function actualizarSaldoAlumno(){ 

        $this->load->model('alumno');
        
        $param['saldo_alumno'] = $this->input->post('saldo');

        $this->alumno->actualizarDatosAlumno($param, $this->input->post('dni1'));
    }



// ------------- DOCENTE ---------------------------------




    public function registrarDocente(){
        $this->load->model('docente');
        
        $this->docente->registrarDocente($this->input->post('dni'), $this->input->post('ape'), $this->input->post('nom'),  $this->input->post('saldo'));

    }




    public function buscarDocente(){
        $this->load->model('docente');
    
        echo json_encode($this->docente->buscarDocente($this->input->post('dni')));

    }




    public function listarDocentes(){
        $this->load->model('docente');

        //$this->load->library('encrypt');

        //$this->encrypt->decode($this->input->post('pass'));
        /*
        $lol['pass'] = $this->encrypt->decode($this->input->post('pass'));
        $lol2[] = $lol;
        echo json_encode($lol2);
        */
        echo json_encode($this->docente->listarDocentes());


    }




     public function actualizarDatosDocente(){ 

        $this->load->model('docente');

        $param['dni_docente'] = $this->input->post('dni');
        $param['ape_docente'] = $this->input->post('ape');
        $param['nom_docente'] = $this->input->post('nom');

        $this->docente->actualizarDatosDocente($param, $this->input->post('dni1'));
    }




    public function actualizarSaldoDocente(){ 

        $this->load->model('docente');
        
        $param['saldo_docente'] = $this->input->post('saldo');

        $this->docente->actualizarDatosDocente($param, $this->input->post('dni1'));
    }



// ------------- IMRESONES ---------------------------------------------

//******************************************************************************

// ------------ TIPO DE IMPRESIONES -------------





    public function registrarTipoDeImpresion(){
        $this->load->model('tipo_impresion');

        $this->tipo_impresion->registrarTipoDeImpresion($this->input->post('id_impresion'), $this->input->post('nom_impresion'), $this->input->post('valor'));

    }






    public function listarTiposDeImpresion(){
        $this->load->model('tipo_impresion');
        echo json_encode($this->tipo_impresion->listarTiposDeImpresion());

    }



    public function actualizarDatosTipoDeImpresion(){ 
        $this->load->model('tipo_impresion');

        $param['nom_impresion'] = $this->input->post('nom_impresion');
        $param['valor'] = $this->input->post('valor');
        
        $this->tipo_impresion->actualizarDatosTipoDeImpresion($param, $this->input->post('id_impresion'));


    }



    public function quitarTipoDeImpresion(){ 
        $this->load->model('tipo_impresion');
        $this->tipo_impresion->quitarTipoDeImpresion($this->input->post('id_impresion'));

    }





    public function verTipoDeImpresion(){
        $this->load->model('tipo_impresion');
        echo json_encode($this->tipo_impresion->verTipoDeImpresion($this->input->post('id_impresion')));

    }





// -------------REGISTRO DE IMPRESIONES -----------
    
//*****************************************************************************


    


    public function registrarImpresion(){ 
        $this->load->model('registro_impresion');

        $fecha = date("Y-m-d");
        $hora = date("G:i:s");

        $this->registro_impresion->registrarImpresion($this->input->post('cod_registro'), $fecha, $hora, $this->input->post('total_imp'), $this->input->post('efectivo'), $this->input->post('cred'), $this->session->userdata('s_nom_usuario'));

        //echo json_encode($this->registro_impresion->registrarImpresion($this->input->post('cod_registro'), $fecha, $hora, $this->input->post('total_imp'), $this->input->post('efectivo'), $this->input->post('cred'), $this->session->userdata('s_nom_usuario')));

    }



    

    public function registrarTiposDeImpresion(){ 
        $this->load->model('registro_impresion');
        
        $this->registro_impresion->registrarTiposDeImpresion($this->input->post('cod_registro'), $this->input->post('id_impresion'), $this->input->post('nom_impresion'), $this->input->post('cant_imp'), $this->input->post('valor_imp'));
    }






    public function registrarSaldo(){ 
        $this->load->model('registro_impresion');

        $fecha = date("Y-m-d");
        $hora = date("G:i:s");

        $this->registro_impresion->registrarSaldo($this->input->post('dni'), $fecha, $hora, $this->input->post('saldo'), $this->input->post('cred'), $this->session->userdata('s_nom_usuario'));
    }

   





    public function registrarObservacion(){ 
        $this->load->model('observacion');

        $this->observacion->registrarObservacion($this->input->post('cod_registro'), $this->input->post('descripcion'));
    }





    public function listarObservaciones(){ 
        $this->load->model('observacion');       
        $fecha = date("Y-m-d");
        echo json_encode($this->observacion->listarObservaciones($fecha));
    }




    public function listarObservaciones2(){ 
        $this->load->model('observacion');       

        echo json_encode($this->observacion->listarObservaciones($this->input->post('fecha')));
    }


    


    public function verObservacion(){ 
        $this->load->model('observacion');       
        echo json_encode($this->observacion->verObservacion($this->input->post('cod_registro')));
    }





    public function verSaldosAlumno(){ 
        $this->load->model('alumno');       
        echo json_encode($this->alumno->verSaldosAlumno($this->input->post('dni')));
    }





    public function verSaldosDocente(){ 
        $this->load->model('docente');       
        echo json_encode($this->docente->verSaldosDocente($this->input->post('dni')));
    }












    
    public function consultarCodRegistro(){
        $this->load->model('registro_impresion');

        $param['cont'] = $this->registro_impresion->consultarCodRegistro();
                
        echo json_encode($param);    
        //echo json_encode($this->registro_impresion->consultarCodRegistro());
    }




    




    public function verRegistrosDeTipoDeImpresion(){
        $this->load->model('registro_impresion');
        $fecha = date("Y-m-d");
        echo json_encode($this->registro_impresion->verRegistrosDeTipoDeImpresion($fecha));    
    }





    public function verTotalDeImpresion(){
        $this->load->model('registro_impresion');
        $fecha = date("Y-m-d");
        echo json_encode($this->registro_impresion->verTotalDeImpresion($fecha));    
    }




 



    public function generarDetallesDeFechas(){
        $this->load->model('registro_impresion');
       
        echo json_encode($this->registro_impresion->generarDetallesDeFechas($this->input->post('fechaInicial'), $this->input->post('fechaFinal')));    
    }










    public function verDetallesDeRegistro(){
        $this->load->model('registro_impresion');

        echo json_encode($this->registro_impresion->verDetallesDeRegistro($this->input->post('fecha')));    
    }






    public function verDeudas(){
        $this->load->model('registro_impresion');

        echo json_encode($this->registro_impresion->verDeudas($this->input->post('fecha')));    
    }





    public function verDeudas2(){
        $this->load->model('registro_impresion');

        echo json_encode($this->registro_impresion->verDeudas2($this->input->post('fecha')));    
    }





//----------------  PARTE PARA LAS RESERVAS  ---------------------------------
//-----------------------  HORARIOS  --------------------------------


    public function registrarHorario(){ 
        $this->load->model('horario');
        
        $this->horario->registrarHorario($this->input->post('id_horario'), $this->input->post('desde'), $this->input->post('hasta'));
    }




    public function listarHorarios(){
        $this->load->model('horario');
        echo json_encode($this->horario->listarHorarios());

    }




    public function actualizarHorario(){ 
        $this->load->model('horario');

        $param['desde'] = $this->input->post('desde');
        $param['hasta'] = $this->input->post('hasta');
        
        $this->horario->actualizarHorario($param, $this->input->post('id_horario'));


    }



    public function quitarHorario(){ 
        $this->load->model('horario');
        $this->horario->quitarHorario($this->input->post('id_horario'));

    }




//-----------------  PERIFERICOS  --------------------------------



    public function registrarPeriferico(){ 
        $this->load->model('periferico');
        
        $this->periferico->registrarPeriferico($this->input->post('id_periferico'), $this->input->post('nom_periferico'), $this->input->post('desc_periferico'));
    }




    public function buscarPeriferico(){ 
        $this->load->model('periferico');
     
        echo json_encode($this->periferico->buscarPeriferico($this->input->post('id_periferico')));

    }



    public function listarPerifericos(){
        $this->load->model('periferico');
        echo json_encode($this->periferico->listarPerifericos());

    }




    public function actualizarPeriferico(){ 
        $this->load->model('periferico');

        $param['nom_periferico'] = $this->input->post('nom_periferico');
        $param['desc_periferico'] = $this->input->post('desc_periferico');
        
        $this->periferico->actualizarPeriferico($param, $this->input->post('id_periferico'));


    }



    public function actualizarPeriferico2(){ 
        $this->load->model('periferico');
        
        $param['estado_periferico'] = $this->input->post('estado_periferico');
        
        $this->periferico->actualizarPeriferico($param, $this->input->post('id_periferico'));


    }



    public function quitarPeriferico(){ 
        $this->load->model('periferico');
        $this->periferico->quitarPeriferico($this->input->post('id_periferico'));

    }





//---------------   Compras  -------------------------------------------




    public function registrarCompra(){
        $this->load->model('compra');
        //$fecha = date("Y-m-d");
        $this->compra->registrarCompra($this->input->post('fecha'), $this->input->post('letra'), $this->input->post('num'), $this->input->post('comercio'), $this->input->post('monto'), $this->input->post('desc'), $this->session->userdata('s_nom_usuario'));

    }


    public function buscarCompra(){
        $this->load->model('compra');
    
        echo json_encode($this->compra->buscarCompra($this->input->post('letra'), $this->input->post('num')));

    }




    public function listarCompras(){
        $this->load->model('compra');
        echo json_encode($this->compra->listarCompras());

    }



    public function actualizarDatosCompra(){ 

        $this->load->model('compra');

        $param['letra_fact'] = $this->input->post('letra_fact');
        $param['num_fact'] = $this->input->post('num_fact');
        $param['comercio'] = $this->input->post('comercio');
        $param['monto_compra'] = $this->input->post('monto_compra');
        $param['desc_compra'] = $this->input->post('desc_compra');        

        $this->compra->actualizarDatosCompra($param, $this->input->post('letra_fact1'), $this->input->post('num_fact1'));
    }





    public function arqueo(){ 
        $this->load->model('compra');
        
        //$anio = date('Y');
        //echo json_encode($this->compra->arqueo($anio))
        echo json_encode($this->compra->arqueo());

    }





//---------------  Solicitud  ------------------------------------------




    public function registrarSolicitud(){ 
        $this->load->model('solicitud');

        $fecha = date("Y-m-d");
        $hora = date("G:i:s");
   
        $this->solicitud->registrarSolicitud($this->input->post('dni_docente'), $this->input->post('id_periferico'), $fecha, $hora, $this->session->userdata('s_nom_usuario'));

    }





    public function detalleSolicitud(){ 
        $this->load->model('solicitud');

        echo json_encode($this->solicitud->detalleSolicitud($this->input->post('id_periferico')));

    }



    public function generarDetalleSolicitudes(){
        $this->load->model('solicitud');
       
        echo json_encode($this->solicitud->generarDetalleSolicitudes($this->input->post('fechaInicial'), $this->input->post('fechaFinal')));    
    }






//---------------  Devolucion  ------------------------------------------



    public function registrarDevolucion(){ 
        $this->load->model('devolucion');

        $fecha = date("Y-m-d");
        $hora = date("G:i:s");
   
        $this->devolucion->registrarDevolucion($this->input->post('id_periferico'), $fecha, $hora, $this->session->userdata('s_nom_usuario'), $this->input->post('obs_devolucion'));

    }




    public function generarDetalleDevoluciones(){
        $this->load->model('devolucion');
       
        echo json_encode($this->devolucion->generarDetalleDevoluciones($this->input->post('fechaInicial'), $this->input->post('fechaFinal')));    
    }


/*

    public function listarPerifericos(){
        $this->load->model('periferico');
        echo json_encode($this->periferico->listarPerifericos());

    }




    public function actualizarPeriferico(){ 
        $this->load->model('periferico');

        $param['nom_periferico'] = $this->input->post('nom_periferico');
        $param['desc_periferico'] = $this->input->post('desc_periferico');
        
        $this->periferico->actualizarPeriferico($param, $this->input->post('id_periferico'));


    }



    public function actualizarPeriferico2(){ 
        $this->load->model('periferico');
        
        $param['estado_periferico'] = $this->input->post('estado_periferico');
        
        $this->periferico->actualizarPeriferico($param, $this->input->post('id_periferico'));


    }



    public function quitarPeriferico(){ 
        $this->load->model('periferico');
        $this->periferico->quitarPeriferico($this->input->post('id_periferico'));

    }


*/




// --------------   RESERVAS  -------------------------------------------




    public function registrarReserva(){ 
        $this->load->model('reserva');


        $this->reserva->registrarReserva($this->input->post('dni_docente'), $this->input->post('id_periferico'), $this->input->post('num_reserva'), $this->input->post('fecha_res'), $this->input->post('hora_res'), $this->input->post('hora_dev_res'), $this->session->userdata('s_nom_usuario'));

    }




    public function listarReservas(){ 
        $this->load->model('reserva');

        echo json_encode($this->reserva->listarReservas($this->input->post('fecha_res')));

    }





    public function listarReservas2(){ 
        $this->load->model('reserva');

        echo json_encode($this->reserva->listarReservas2());

    }




    public function verificarReserva(){ 
        $this->load->model('reserva');

        $param['cont'] = $this->reserva->verificarReserva($this->input->post('id_periferico'), $this->input->post('fecha_res'), $this->input->post('hora_res'), $this->input->post('hora_dev_res'));
                
        echo json_encode($param);    
        //echo json_encode($this->reserva->verificarReserva($this->input->post('id_periferico'), $this->input->post('fecha_res'), $this->input->post('hora_res'), $this->input->post('hora_dev_res')));

    }







    public function quitarReserva(){ 
        $this->load->model('reserva');

        $this->reserva->quitarReserva($this->input->post('id_periferico'), $this->input->post('fecha_res'), $this->input->post('hora_res'));

    }



    public function generarDetalleReservas(){
        $this->load->model('reserva');
       
        echo json_encode($this->reserva->generarDetalleReservas($this->input->post('fechaInicial'), $this->input->post('fechaFinal')));    
    }





// --------------   VISTAS  -------------------------------------------





    public function mostrarModificarAlumno(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vModificarAlumno');
        $this->load->view('layout/footer');
       
    }






    public function mostrarNuevoAlumno(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vNuevoAlumno');
        $this->load->view('layout/footer');
       
    }







    public function mostrarModificarDocente(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vModificarDocente');
        $this->load->view('layout/footer');
       
    }






    public function mostrarNuevoDocente(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vNuevoDocente');
        $this->load->view('layout/footer');
       
    }






    public function mostrarRegistroDeImpresion(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vRegistroDeImpresion');
        $this->load->view('layout/footer');
       
    }






    public function mostrarTipoDeImpresion(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vTipoDeImpresion');
        $this->load->view('layout/footer');
       
    }





    public function mostrarDetalles(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vDetalle');
        $this->load->view('layout/footer');
       
    }





    public function mostrarHorarios(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vHorario');
        $this->load->view('layout/footer');
       
    }





    public function mostrarSolicitud(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vSolicitud');
        $this->load->view('layout/footer');
       
    }





    public function mostrarPerifericos(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vPeriferico');
        $this->load->view('layout/footer');
       
    }




    public function mostrarReservas(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vReservas');
        $this->load->view('layout/footer');
       
    }





    public function mostrarRegistrarCompra(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vCompra');
        $this->load->view('layout/footer');
       
    }






    public function mostrarModificarCompra(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vModificarCompra');
        $this->load->view('layout/footer');
       
    }









    public function mostrarSolicitudes(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vSolicitudes');
        $this->load->view('layout/footer');
       
    }










    public function mostrarDevoluciones(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vDevoluciones');
        $this->load->view('layout/footer');
       
    }












    public function mostrarDetalleReservas(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vDetalleReservas');
        $this->load->view('layout/footer');
       
    }











    public function mostrarArqueo(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vArqueo');
        $this->load->view('layout/footer');
       
    }



//nuevo proyecto....................................





    public function mostrarVistaVacia(){
        if(!$this->session->userdata('s_nom_usuario')){
            redirect(base_url());
        }
        $data['mensaje'] = $this->session->userdata('s_nom_usuario');
        $this->load->view('layout/header',$data);
        $this->load->view('layout/menu');
        $this->load->view('vVacia');
        $this->load->view('layout/footer');
       
    }


























































}
?>

  