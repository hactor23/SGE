<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      
      <ul class="sidebar-menu">
        <li class="header">MENú PRINCIPAL</li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-print"></i>
            <span>Impresiones</span><!--CAMBIAR ICONO-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">

                <li><a href ="<?php echo base_url();?>controlador/mostrarRegistroDeImpresion"><i class="fa fa-circle-o"></i>Registro Diario</a></li>
                
                <li><a href ="<?php echo base_url();?>controlador/mostrarTipoDeImpresion"><i class="fa fa-circle-o"></i>Tipos de Impresión</a></li>
                
                <li><a href ="<?php echo base_url();?>controlador/mostrarDetalles"><i class="fa fa-circle-o"></i>Detalles</a></li> 
                

            </ul>
        </li>
       

        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Alumnos</span><!--CAMBIAR ICONO-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">

                <li><a href="<?php echo base_url();?>controlador/mostrarNuevoAlumno"><i class="fa fa-circle-o"></i>Registrar</a></li>               

                <li><a href="<?php echo base_url();?>controlador/mostrarModificarAlumno"><i class="fa fa-circle-o"></i>Buscar</a></li>
                  
            </ul>
        </li>
        


        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Docentes</span><!--CAMBIAR ICONO-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              
                <li><a href="<?php echo base_url();?>controlador/mostrarNuevoDocente"><i class="fa fa-circle-o"></i>Registrar</a></li>
                
                <li><a href="<?php echo base_url();?>controlador/mostrarModificarDocente"><i class="fa fa-circle-o"></i>Buscar</a></li>

            </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i>
            <span>Compras</span><!--CAMBIAR ICONO-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              
                <li><a href="<?php echo base_url();?>controlador/mostrarRegistrarCompra"><i class="fa fa-circle-o"></i>Registrar</a></li>
                               
                <li><a href="<?php echo base_url();?>controlador/mostrarModificarCompra"><i class="fa fa-circle-o"></i>Modificar</a></li>

                <li><a href="<?php echo base_url();?>controlador/mostrarArqueo"><i class="fa fa-circle-o"></i>Arqueo</a></li>

            </ul>
        </li>





        <li class="treeview">
          <a href="#">
            <i class="fa fa-pinterest"></i>
            <span>Periféricos</span><!--CAMBIAR ICONO-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
  
                <li><a href="<?php echo base_url();?>controlador/mostrarPerifericos"><i class="fa fa-circle-o"></i>Modificar</a></li>

            </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-skype"></i>
            <span>Solicitudes</span><!--CAMBIAR ICONO-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              
                <li><a href="<?php echo base_url();?>controlador/mostrarSolicitud"><i class="fa fa-circle-o"></i>Solicitud</a></li>                           
               
                <li><a href="<?php echo base_url();?>controlador/mostrarSolicitudes"><i class="fa fa-circle-o"></i>Detalles</a></li>

                <li><a href="<?php echo base_url();?>controlador/mostrarDevoluciones"><i class="fa fa-circle-o"></i>Devoluciones</a></li>

            </ul>
        </li>





        <li class="treeview">
          <a href="#">
            <i class="fa fa-registered"></i>
            <span>Reservas</span><!--CAMBIAR ICONO-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">                              

                <li><a href="<?php echo base_url();?>controlador/mostrarReservas"><i class="fa fa-circle-o"></i>Reservar</a></li>

                <li><a href="<?php echo base_url();?>controlador/mostrarDetalleReservas"><i class="fa fa-circle-o"></i>Detalles</a></li>

            </ul>
        </li>







        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Horarios</span><!--CAMBIAR ICONO-->
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                                             
                <li><a href="<?php echo base_url();?>controlador/mostrarHorarios"><i class="fa fa-circle-o"></i>Horarios</a></li>
                
            </ul>
        </li>




     
     
      </ul>

      </div>

    </section>
       
</aside>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <div class="content">