
</div>
<!-- /.content -->
</div>
 <!-- /.content-wrapper--> 
</div>
<!-- ./wrapper -->






<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts ----  modifique estoe el 04-03-2018-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->




<!-- datatable -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/datatables.bootstrap.min.js"></script>







<!-- javascript -->


<?php if ($this->uri->segment(2)=='ingresarUsuario') {?>
<script src="<?= base_url(); ?>js/solicitud.js"></script>
<?php }?>



<?php if ($this->uri->segment(2)=='mostrarNuevoAlumno') {?>
<script src="<?= base_url(); ?>js/alumno.js"></script>
<?php }?>


<?php if ($this->uri->segment(2)=='mostrarModificarAlumno') {?>
<script src="<?= base_url(); ?>js/alumno.js"></script>
<?php }?>




<?php if ($this->uri->segment(2)=='mostrarNuevoDocente') {?>
<script src="<?= base_url(); ?>js/docente.js"></script>
<?php }?>


<?php if ($this->uri->segment(2)=='mostrarModificarDocente') {?>
<script src="<?= base_url(); ?>js/docente.js"></script>
<?php }?>



<?php if ($this->uri->segment(2)=='mostrarTipoDeImpresion') {?>
<script src="<?= base_url(); ?>js/tipo_impresion.js"></script>
<?php }?>



<?php if ($this->uri->segment(2)=='mostrarRegistroDeImpresion') {?>
<script src="<?= base_url(); ?>js/registro_impresion.js"></script>
<?php }?>



<?php if ($this->uri->segment(2)=='mostrarDetalles') {?>
<script src="<?= base_url(); ?>js/detalle.js"></script>
<?php }?>





<?php if ($this->uri->segment(2)=='mostrarHorarios') {?>
<script src="<?= base_url(); ?>js/horario.js"></script>
<?php }?>




<?php if ($this->uri->segment(2)=='mostrarPerifericos') {?>
<script src="<?= base_url(); ?>js/periferico.js"></script>
<?php }?>




<?php if ($this->uri->segment(2)=='mostrarSolicitud') {?>
<script src="<?= base_url(); ?>js/solicitud.js"></script>
<?php }?>



<?php if ($this->uri->segment(2)=='mostrarReservas') {?>
<script src="<?= base_url(); ?>js/reserva.js"></script>
<?php }?>



<?php if ($this->uri->segment(2)=='mostrarRegistrarCompra') {?>
<script src="<?= base_url(); ?>js/compra.js"></script>
<?php }?>


<?php if ($this->uri->segment(2)=='mostrarModificarCompra') {?>
<script src="<?= base_url(); ?>js/compra.js"></script>
<?php }?>



<?php if ($this->uri->segment(2)=='mostrarSolicitudes') {?>
<script src="<?= base_url(); ?>js/solicitudes.js"></script>
<?php }?>




<?php if ($this->uri->segment(2)=='mostrarDevoluciones') {?>
<script src="<?= base_url(); ?>js/devoluciones.js"></script>
<?php }?>





<?php if ($this->uri->segment(2)=='mostrarDetalleReservas') {?>
<script src="<?= base_url(); ?>js/reservas.js"></script>
<?php }?>







<?php if ($this->uri->segment(2)=='mostrarArqueo') {?>
<script src="<?= base_url(); ?>js/arqueo.js"></script>
<?php }?>






</body>
</html>
