    


    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
   
          <h3>Tipos de Impresión</h3>
        
          <table id="tblTipoImpresion" border="1">
          <thead>
            <tr>
              <th style="width: 2%; height: 39px;  background-color: #006699; color: white; text-align: center;">Id Tipo</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Nombre</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Valor en $</th>
              <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Modificar</th>
            </tr>
          </thead>          
          </table>


          <br><br><br>
          <div>
              <button href="#"  class="btn btn-primary pull-left" id="btnAgregarTipoImpresion" data-toggle="modal" data-target="#modalAgregarTipoImpresion">Agregar</button>             
              <button id="btnQuitarTipoImpresion" class="btn btn-primary pull-left" disabled="disabled">Quitar</button>                      
          </div>

        
      </div>
    

    </div>







    <div class="modal fade" id="modalAgregarTipoImpresion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" id="modalAgregarTipoImp" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" style="text-align: center;">Agregar Tipo de Impresión</h4>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">

                <div class="form-group">
                <label class="col-sm-3 control-label" style="text-align: left;">Id </label>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtIdTipoImpresion" class="form-control" id="mtxtIdTipoImpresion" disabled="disabled" style="text-align: right;">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" id="estadoApell" style="text-align: left;"><b>Nombre </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtNomImpresion" class="form-control" id="mtxtNomImpresion" style="text-align: left;">
                </div>      
                </div>   

                <div class="form-group">
                <div class="col-sm-3 control-label" id="estadoNom" style="text-align: left;"><b>$</b></div>
                <div class="col-sm-9"> 
                <input type="number" name="mtxtValorImpresion" class="form-control" id="mtxtValorImpresion" style="text-align: right;">
                </div>      
                </div>                                                

                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModalTipoImpresion">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarTipoImpresion">Guardar</button>
                </div>

              </div>
              <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->
    

   





   <div class="modal fade" id="modalModifTipoDeImpresion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog modal-sm" id="modalModfTipo" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Modificar Tipo de Impresión</h4>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">

                <div class="form-group">
                <label class="col-sm-3 control-label">Id </label>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtIdTipoImpresion1" class="form-control" id="mtxtIdTipoImpresion1" disabled="disabled"style="text-align: right;">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" id="estadoApell"><b>Nombre </b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtNomImpresion1" class="form-control" id="mtxtNomImpresion1" style="text-align: left;">
                </div>      
                </div>   

                <div class="form-group">
                <div class="col-sm-3 control-label" id="estadoNom"><b>$</b></div>
                <div class="col-sm-9"> 
                <input type="number" name="mtxtValorImpresion1" class="form-control" id="mtxtValorImpresion1" style="text-align: right;">
                </div>      
                </div>                                                

                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModalModifTipoImp">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarModifTipoDeImpresion">Guardar</button>
                </div>

              </div>
              <!-- /.modal-body -->
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->








  <div class="modal fade modal-primary" id="modalConfirmacionTipoImpresion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Confirmación</h3>
              </div>
              <br>
              
              <div id="estadoTipoImpresion" class="pull box-tools">                     

              </div>
              <div>
                 <button class="btn btn-primary pull-right" data-dismiss="modal" id="mbtnModalConf">Aceptar</button>
              </div>  
              <br><br>
              <a href="#" class="btn btn-block btn-primary btn-sm" id="mbtnConfirmacionTipoImpresion" data-toggle="modal" data-target="#modalConfirmacionTipoImpresion" style="display: none;"></a>
              
            </div>
          </div>

  </div>







  <div class="modal fade modal-primary" id="modalQuitarTipoImpresion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Tipo de Impresión</h3>
              </div>
              <br>

              <div><h4 style="text-align: center;">¿Quiere quitar el tipo de impresión?</h4></div>

              <br>
              
              <div style="text-align: center;">
                  <button type="button" class="btn btn-default" data-dismiss="modal" id="mbtnCerrarModalQuitarTipoImp">NO</button>
                  <button type="button" class="btn btn-primary" id="mbtnQuitarTipoImpresion">SI</button>
              </div>

              <br>
              <a href="#" class="btn btn-block btn-primary btn-sm" id="mQuitarTipoImpresion" data-toggle="modal" data-target="#modalQuitarTipoImpresion" style="display: none;"></a>
              
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


