    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
   
          <h3>Docentes</h3>
        
          <table id="tblDocentes" border="1">
          <thead>
            <tr>
              <th style="font-size: 13pt; width: 3%; background-color: #006699; color: white; text-align: center;">DNI</th>
              <th style="font-size: 13pt; width: 15%; background-color: #006699; color: white; text-align: center;">Apellido</th>
              <th style="font-size: 13pt; width: 15%; background-color: #006699; color: white; text-align: center;">Nombre</th>
              <th style="font-size: 13pt; width: 2%; background-color: #006699; color: white; text-align: center;">Saldo $</th>
              <th style="font-size: 13pt; width: 1%; background-color: #006699; color: white; text-align: center;">Detalle</th>
              <th style="font-size: 13pt; width: 1%; background-color: #006699; color: white; text-align: center;">Editar</th>     
            </tr>
          </thead>          
          </table>

          <div>
            
            <button href="#" id="btnEditar" class="btn btn-primary pull-right" disabled="disabled">Editar<i class="fa fa-fw fa-edit"></i></button>

          </div>
        
      </div>
    </div>
    

   


      









   <div class="modal fade" id="modalEditDocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog modal-sl" id="modalmodalDocente" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" style="text-align: center;">Modificar Datos</h4>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">

                <div class="form-group">
                <label class="col-sm-3 control-label" style="text-align: left;">DNI</label>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtDniDocente" style="text-align: left;" class="form-control" id="mtxtDniDocente">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;" id="estadoApell"><b>Apellido</b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtApellDocente" class="form-control" id="mtxtApellDocente" >
                </div>      
                </div>   

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;" id="estadoNom"><b>Nombre</b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtNomDocente" class="form-control" id="mtxtNomDocente" >
                </div>      
                </div>  

                

                              
                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModal">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarModifDocente">Guardar</button>
                </div>
              </div>

              <a href="#" class="btn btn-block btn-primary btn-sm" id="mbtnEditar" data-toggle="modal" data-target="#modalEditDocente" style="display: none;"></a>

              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->












  <div class="modal fade modal-primary" id="modalSaldo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

              <div class="modal-header bg-blue" style="text-align: center;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="mbtnCerrarModalSaldo">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" style="text-align: center;">Actualizar Saldo</h3>
              </div>
              <br>
            
              <div class="form-group"><br>          
                <h4 class="col-sm-7" style="text-align: center;">Efectivo $</h4> 
                <input type="number" id="mtxtSaldo1" class="form-control" value="0.00" style="font-size: 13pt; text-align: right; width: 32%;"> 
              </div>                      

              <br>                     
              <div>
                <div class="col-sm-8">
                <button class="btn btn-primary pull-right" id="mbtnAceptarSaldo">Aceptar</button>
                </div>
              </div>

              <br><br><br>                   
            </div>
          </div>
  </div>







    <div class="modal fade modal-primary" id="modalCredDocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Credito Docente</h3>
              </div>
              <br>

              <div style="text-align: left;">

              <h4 id="apeDocente"></h4> 
              <h4 id="nomDocente"></h4>              
              <h4 id="credDocente"></h4> 
              <h4 id="saldoDocente"></h4> 
              <h4 id="saldoTotalDocente"></h4>                    

              </div>          
              
              <br><br>
              <div style="text-align: center;">
                  <a href="<?php echo base_url();?>controlador/mostrarModificarDocente" id="mbtnCancCredDoc" class="btn btn-default">Cancelar</a>    
                  <button class="btn btn-primary" id="mbtnAcepCredDoc" style="width: 23%;">Aceptar</button>

                  <a href="#" class="btn btn-block btn-primary btn-sm" id="btnCredDoc" data-toggle="modal" data-target="#modalCredDocente" style="display: none;"></a>

              </div>
              <br>          
            </div>
          </div>

    </div>









    <div class="modal fade modal-primary" id="modalConfirmacionModifDocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="mbtnCerrarModal2">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" style="text-align: center;">Docente</h3>
              </div>
              <br>
                  
                  <div id="estadoDocente" class="pull box-tools">
              
              </div>
              <br>

              <div><a href="<?php echo base_url();?>controlador/mostrarModificarDocente" class="btn btn-primary pull-right" id="btnCerrarModal">Aceptar</a></div>
                  
              <br><br><br>       
              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacionModifDocente" data-toggle="modal" data-target="#modalConfirmacionModifDocente" style="display: none;"></a>

            </div>
          </div>

    </div>








  <div class="modal fade" id="modalSaldos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Saldos</h3>
              </div>
              <br>

              <div class="modal-body">

                  <table id="mtblSaldos" border="1" class="table table-bordered table-striped">
                      <thead>
                       <tr>                    
                          <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Fecha</th>
                          <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Hora</th>
                          <th style="width: 23%; background-color: #006699; color: white; text-align: center;">Saldo</th>
                          <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Credito</th>
                          <th style="width: 23%; background-color: #006699; color: white; text-align: center;">Usuario</th>  
                       </tr>                  
                      </thead>          
                  </table>
              
                  <br><br>

                  <div style="text-align: center;">
                      <a type="button" href="<?php echo base_url();?>controlador/mostrarModificarDocente" class="btn btn-primary pull-right" id="mbtnCerrarSaldos">Cerrar</a>                              
                  </div>

              </div>
              <br>
              
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


