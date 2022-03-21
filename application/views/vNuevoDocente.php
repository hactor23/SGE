  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Nuevo Docente</h4>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                
                <div>
                  <div  id="estadoDni" class="control-label"><h4>DNI</h4></div>
                  <input type="number" class="form-control" id="txtDniDocente" placeholder="Ingrese DNI sin puntos"  required>
                </div>
                

                <div >
                  <div id="estadoApell" class="control-label"><h4>Apellido</h4></div>
                  <input type="text" class="form-control" id="txtApeDocente" placeholder="Ingrese un Apellido" required>
                </div>

                <div>
                  <div id="estadoNom" class="control-label"><h4>Nombre</h4></div>
                  <input type="text" class="form-control" id="txtNomDocente" placeholder="Ingrese un Nombre" required>

                </div>
               
                

               <div>

                  <div id="estadoSaldo" class="control-label"><h4>Saldo en $</h4></div>
                  <input type="number" class="form-control" id="txtSaldo" value="0.00" disabled="disabled" placeholder="" style="font-size: 13pt; text-align: right;">
                
               </div>                 
              
               <br>

                <div>
                  <button  id="btnRegistrarDocente" name="btnRegistrarDocente"  class="btn btn-primary pull-right">Guardar</button>
                </div>

              </div>


           </div>
        </div>
      </div>
  </section>






<div class="modal fade modal-primary" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Registro de Docente</center></h3>

              </div>

              <br>
                  
                  <div id="estadoDocente" class="pull box-tools"></div>
                              
              <br>       
                
              <div><a href="<?php echo base_url();?>controlador/mostrarNuevoDocente" class="btn btn-primary pull-right" id="btnCerrarModal">Aceptar</a></div>
                              
              <br><br><br>

              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacion" data-toggle="modal" data-target="#modalConfirmacion" style="display: none;"></a>

            </div>
          </div>

  </div>




<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
 