    


    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">          
     
          <div class="row">
              <h2 class="col-sm-1" id="arqueo">Arqueo</h2>               
          </div>


          <div class="form-group">
              <h3 class="col-sm-3" id="saldoAnterior">Saldo: $0.00</h3>              
          </div>

          <br>

          <table id="tblArqueo" border="1" class="table table-bordered table-striped">
          <thead>
            <tr>

              <th style="width: 10%; height: 39px;  background-color: #006699; color: white; text-align: center;">Mes</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Impresiones</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Compras</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Caja Mensual</th>              
              <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Saldo</th>

            </tr>
          </thead>          
          </table>

          <br><br><br>

          <div class="form-group">
              <h3 class="col-sm-3" id="totalArque">Total Arqueo: $0.00</h3>              
          </div>
         
      </div>    

    </div>




    
    








    <div class="modal fade" id="modalDetalleRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Impresiones</h3>
              </div>
              <br>

                <table id="mtblRegistro" border="1">
                    <thead>
                        <tr>   

                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Fecha</th>                 
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Hora</th>
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Tipo</th>                 
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Cantidad</th>
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Valor $</th>                                         
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Usuario</th>
                        
                        </tr>                   
                    </thead>          
                </table>
              
              <br>
              <div style="text-align: center;">
                  <a href="<?php echo base_url();?>controlador/mostrarDetalles" id="mbtnCerrarRegistro" class="btn btn-default">Cerrar</a> 
              </div>
              
            </div>
          </div>

    </div>






    <div class="modal fade modal-primary" id="modalObservaciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Observaciones</h3>
              </div>
              <br>

                <table id="mtblObservacion" border="1">
                    <thead>
                        <tr>                    
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Hora</th>
                        <th style="width: 23%; background-color: #006699; color: white; text-align: center;">Usuario</th>
                        <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Descripción</th> 
                        </tr>                   
                    </thead>          
                </table>
                            
              <br>
              
              <div style="text-align: center;">
                  <a href="<?php echo base_url();?>controlador/mostrarDetalles" id="mbtnCerrarObs" class="btn btn-default">Cerrar</a>
              </div>

              <br>
              
            </div>
          </div>

    </div>






    <div class="modal fade modal-primary" id="modalVerObservacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Observación</h3>
              </div>
              <br>

              <div style="text-align: center;">
                <textarea id="mtxtObservaciones" rows="10" cols="30" style="resize:none;" readonly="readonly"></textarea>
              </div>

              <br>              
              <div style="text-align: center;">                  
                  <button class="btn btn-default" data-dismiss="modal" id="mbtnAcepObs">Aceptar</button>                 
              </div>

              <br>
              
            </div>
          </div>

    </div>






    


    <div class="modal fade" id="modalDeudas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Deudas</h3>
              </div>
              <br>

              <div class="modal-body">

                  <table id="mtblSaldos" border="1" class="table table-bordered table-striped">
                      <thead>
                       <tr>                    
                          <th style="width: 15%; background-color: #006699; color: white; text-align: center;">Apellido</th>
                          <th style="width: 15%; background-color: #006699; color: white; text-align: center;">Nombre</th>
                          <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Hora</th>
                          <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Credito $</th>                          
                          <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Usuario</th>  
                       </tr>                  
                      </thead>          
                  </table>
              
                  <br><br>

                  <div style="text-align: center;">
                      <a type="button" href="<?php echo base_url();?>controlador/mostrarDetalles" class="btn btn-primary pull-right" id="mbtnCerrarDeudas">Cerrar</a>                              
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


