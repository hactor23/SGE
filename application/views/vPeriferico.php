    


    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
   
          <h3>Periféricos/Aula</h3>
        
          <table id="tblPerifericos" border="1">
          <thead>
            <tr>
              <th style="width: 2%; height: 39px;  background-color: #006699; color: white; text-align: center;">Id</th>
              <th style="width: 15%; background-color: #006699; color: white; text-align: center;">Nombre</th>
              <th style="width: 15%; background-color: #006699; color: white; text-align: center;">Estado</th>
              <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Descripción</th>  
              <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Modificar</th>   
            </tr>
          </thead>          
          </table>


          <br><br><br>
          <div>
              <button href="#"  class="btn btn-primary pull-left" id="btnAgregarPeriferico" data-toggle="modal" data-target="#modalAgregarPeriferico">Agregar</button>             
              <button id="btnQuitarPeriferico" class="btn btn-primary pull-left" disabled="disabled">Quitar</button>                      
          </div>
        
      </div>   

    </div>







    <div class="modal fade" id="modalAgregarPeriferico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" id="modalAgregarPerif" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" style="text-align: center;">Agregar Periferico</h4>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">

                <div class="form-group">
                <label class="col-sm-3 control-label" style="text-align: left;">Id </label>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtIdPeriferico" class="form-control" id="mtxtIdPeriferico" disabled="disabled" style="text-align: right;">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;"><b>Nombre </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtNombre" class="form-control" id="mtxtNombre" style="text-align: left;">
                </div>      
                </div>   

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;"><b>Descrip. </b></div>
                <div class="col-sm-9"> 
                <textarea name="mtxtDesc" class="form-control" id="mtxtDesc" rows="5" cols="10" style="resize:none;"></textarea>
                </div>      
                </div>                                                

                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModalPeriferico">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarPeriferico">Guardar</button>
                </div>

              </div>
              <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->
    

   





   <div class="modal fade" id="modalModifPeriferico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" id="modalModfPerif" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Modificar Periferico</h4>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">

                <div class="form-group">
                <label class="col-sm-3 control-label">Id </label>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtIdPeriferico1" class="form-control" id="mtxtIdPeriferico1" disabled="disabled" style="text-align: right;">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;"><b>Nombre </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtNombre1" class="form-control" id="mtxtNombre1" style="text-align: left;">
                </div>      
                </div>   

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;"><b>Estado </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtEstado1" disabled="disabled" class="form-control" id="mtxtEstado1" style="text-align: left;">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;"><b>Descrip. </b></div>
                <div class="col-sm-9"> 
                <textarea name="mtxtDesc1" class="form-control" id="mtxtDesc1" rows="5" cols="10" style="resize:none;"></textarea>
                </div>      
                </div>        


                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModalModifPerif">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarModifPeriferico">Guardar</button>
                </div>

              </div>
              <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->






        <div class="modal fade" id="modalModifDescripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" id="modalModfPerif" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Descripción de Periferico</h4>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">

                <div class="form-group">
                <label class="col-sm-3 control-label">Id </label>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtIdPeriferico2" class="form-control" id="mtxtIdPeriferico2" disabled="disabled" style="text-align: right;">
                </div>      
                </div>
                

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;"><b>Descrip. </b></div>
                <div class="col-sm-9"> 
                <textarea name="mtxtDesc2" class="form-control" disabled="disabled" id="mtxtDesc2" rows="5" cols="10" style="resize:none;"></textarea>
                </div>      
                </div>        


                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModalModifPerif2">Cancelar</button>
                </div>

              </div>
              <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->









  <div class="modal fade modal-primary" id="modalConfirmacionPeriferico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Confirmación</h3>
              </div>
              <br>
              
              <div id="estadoPeriferico" class="pull box-tools">                     

              </div>
              <div>
                 <button class="btn btn-primary pull-right" data-dismiss="modal" id="mbtnModalConf">Aceptar</button>
              </div>  
              <br><br>
              <a href="#" class="btn btn-block btn-primary btn-sm" id="mbtnConfirmacionPeriferico" data-toggle="modal" data-target="#modalConfirmacionPeriferico" style="display: none;"></a>
              
            </div>
          </div>

  </div>







  <div class="modal fade modal-primary" id="modalQuitarPeriferico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Periferico</h3>
              </div>
              <br>

              <div><h4 style="text-align: center;">¿Quiere quitar el Periferico?</h4></div>

              <br>
              
              <div style="text-align: center;">
                  <button type="button" class="btn btn-default" data-dismiss="modal" id="mbtnCerrarModalQuitarPeriferico">NO</button>
                  <button type="button" class="btn btn-primary" id="mbtnQuitarPeriferico">SI</button>
              </div>

              <br>
              <a href="#" class="btn btn-block btn-primary btn-sm" id="mQuitarPeriferico" data-toggle="modal" data-target="#modalQuitarPeriferico" style="display: none;"></a>
              
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


