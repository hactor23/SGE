    


    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
   
          <h3>Horarios</h3>
        
          <table id="tblHorarios" border="1">
          <thead>
            <tr>
              <th style="width: 2%; height: 39px;  background-color: #006699; color: white; text-align: center;">Id Horario</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Desde</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Hasta</th>
              <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Modificar</th>   
            </tr>
          </thead>          
          </table>


          <br><br><br>
          <div>
              <button href="#"  class="btn btn-primary pull-left" id="btnAgregarHorario" data-toggle="modal" data-target="#modalAgregarHorario">Agregar</button>             
              <button id="btnQuitarHorario" class="btn btn-primary pull-left" disabled="disabled">Quitar</button>                      
          </div>
        
      </div>   

    </div>







    <div class="modal fade" id="modalAgregarHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" id="modalAgregarHorar" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" style="text-align: center;">Agregar Horario</h4>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">

                <div class="form-group">
                <label class="col-sm-3 control-label" style="text-align: left;">Id </label>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtIdHorario" class="form-control" id="mtxtIdHorario" disabled="disabled" style="text-align: right;">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;"><b>Desde </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtDesde" class="form-control" id="mtxtDesde" style="text-align: right;">
                </div>      
                </div>   

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;"><b>Hasta </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtHasta" class="form-control" id="mtxtHasta" style="text-align: right;">
                </div>      
                </div>                                                

                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModalHorario">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarHorario">Guardar</button>
                </div>

              </div>
              <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->
    

   





   <div class="modal fade" id="modalModifHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" id="modalModfHorar" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Modificar Horario</h4>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">

                <div class="form-group">
                <label class="col-sm-3 control-label">Id </label>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtIdHorario1" class="form-control" id="mtxtIdHorario1" disabled="disabled"style="text-align: right;">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" id="estadoApell"><b>Desde </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtDesde1" class="form-control" id="mtxtDesde1" style="text-align: right;">
                </div>      
                </div>   

                <div class="form-group">
                <div class="col-sm-3 control-label" id="estadoNom"><b>Hasta </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtHasta1" class="form-control" id="mtxtHasta1" style="text-align: right;">
                </div>      
                </div>                                                

                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModalModifHorar">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarModifHorario">Guardar</button>
                </div>

              </div>
              <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->








  <div class="modal fade modal-primary" id="modalConfirmacionHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Confirmación</h3>
              </div>
              <br>
              
              <div id="estadoHorario" class="pull box-tools">                     

              </div>
              <div>
                 <button class="btn btn-primary pull-right" data-dismiss="modal" id="mbtnModalConf">Aceptar</button>
              </div>  
              <br><br>
              <a href="#" class="btn btn-block btn-primary btn-sm" id="mbtnConfirmacionHorario" data-toggle="modal" data-target="#modalConfirmacionHorario" style="display: none;"></a>
              
            </div>
          </div>

  </div>







  <div class="modal fade modal-primary" id="modalQuitarHorario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Horario</h3>
              </div>
              <br>

              <div><h4 style="text-align: center;">¿Quiere quitar el horario?</h4></div>

              <br>
              
              <div style="text-align: center;">
                  <button type="button" class="btn btn-default" data-dismiss="modal" id="mbtnCerrarModalQuitarHorario">NO</button>
                  <button type="button" class="btn btn-primary" id="mbtnQuitarHorario">SI</button>
              </div>

              <br>
              <a href="#" class="btn btn-block btn-primary btn-sm" id="mQuitarHorario" data-toggle="modal" data-target="#modalQuitarHorario" style="display: none;"></a>
              
            </div>
          </div>

  </div>















  <script type="text/javascript">
      var baseurl = "<?php echo base_url(); ?>";
  </script>



  <script type="text/javascript">
      var fila = null;
      var dato = '';
      function pulsar(obj){
        obj.style.background = 'cornflowerblue';
        if(fila != null && fila != obj)
          fila.style.background = 'white';
        fila = obj;

      }
  </script>


