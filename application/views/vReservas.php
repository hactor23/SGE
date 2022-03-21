

  <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
     
          <div class="row">
              <h4 class="col-sm-1" id="fechaRegistro">Fecha: </h4> 
              <input type="date" class="col-sm-3" id="txtFecha" style="font-size: 16pt; text-align: left;">
              <div class="col-sm-1"></div>                        
              <button href="#" class="col-sm-1 btn btn-primary pull-left" id="btnBuscar">Buscar</button>              
          </div>

          <br>

          <table id="tblReservas" border="1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width: 3%; background-color: #006699; color: white; text-align: center;">Hora</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Periférico/Aula</th>
              <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Docente</th>
              <th style="width: 3%; background-color: #006699; color: white; text-align: center;">Devolución</th>
              <th style="width: 3%; background-color: #006699; color: white; text-align: center;">Usuario</th>
            </tr>
          </thead>          
          </table>

          <br><br><br>

          <div class="form-group">
              <button class="btn btn-primary pull-left" id="btnAgregar">Agregar</button>
              <button class="btn btn-primary pull-left" id="btnQuitar" disabled="true">Quitar</button> 
          </div>
         
      </div>    
      
  </div>







      <div class="modal fade" id="modalDocentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Docentes</h3>
              </div>

              <br><br>
              <div class="modal-body">

              <table id="mtblDocentes" border="1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 3%; background-color: #006699; color: white; text-align: center;">DNI</th>
                      <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Apellido</th>
                      <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Nombre</th>                                            
                      <th style="width: 3%; background-color: #006699; color: white; text-align: center;">Acción</th>      
                    </tr>
                  </thead>          
              </table>

              <br>
              <div  style="text-align: center;">        

                <a href="<?php echo base_url();?>controlador/mostrarReservas" id="btnCancelarDocentes" class="btn btn-default">Cancelar</a>
                <button href="#"  class="btn btn-primary" data-toggle="modal" data-target="#modalRegistrarDocente" id="mbtnRegistrarDocente">Registrar</button>
              </div>

            </div>
            </div>
          </div>
      </div>














      <div class="modal fade modal-primary" id="modalRegistrarDocente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Registrar Docente</h3>
              </div>
              <br>
             
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
                      <div id="estadoSaldo" class="control-label"><h4>Saldo $0.00</h4></div>          
                  </div>                 
              
                  <br>
             
              </div>

              <div style="text-align: center;">
                  <button class="btn btn-default" data-dismiss="modal" id="btnCancelarRegistroDoc">Cancelar</button>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modalCredDocente" id="mbtnAceptarDoc">Aceptar</button>
              </div>

              <br>          
            </div>
          </div>

    </div>









    <div class="modal fade modal-primary" id="modalConfirmacion3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Estado</center></h3>

              </div>

              <br>              
                  <div id="estado3" class="pull box-tools"></div>                           
              <br>       
                
              <!-- Ver acá abajo para modificar -->
              <div style="text-align: right;">            
                <button class="btn btn-primary" data-dismiss="modal" id="mbtnAceptarDocente">Aceptar</button>
              </div>                            

              <br>
              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacion3" data-toggle="modal" data-target="#modalConfirmacion3" style="display: none;"></a>

            </div>
          </div>
    </div>






  <div class="modal fade modal-primary" id="modalConfirmacion5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Estado</center></h3>

              </div>

              <br>                
                  <div id="estado5" class="pull box-tools"></div>                             
              <br>    
                
              <!-- Ver acá abajo para modificar -->
              <div style="text-align: right;">
                  <button class="btn btn-primary" data-dismiss="modal" id="btnAceptarErrorRegistroDoc">Aceptar</button>
              </div>

              <br>
              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacion5" data-toggle="modal" data-target="#modalConfirmacion5" style="display: none;"></a>

            </div>
          </div>
  </div>



          





      <div class="modal fade" id="modalPerifericos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Periféricos</h3>
              </div>

              <br><br>
              <div class="modal-body">

              <table id="mtblPerifericos" border="1">
                <thead>
                  <tr>
                    <th style="width: 2%; height: 39px;  background-color: #006699; color: white; text-align: center;">Id</th>
                    <th style="width: 15%; background-color: #006699; color: white; text-align: center;">Periférico</th>                    
                    <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Descripción</th>
                  </tr>
                </thead>          
              </table>

              <br>
              <div  style="text-align: center;">        

                <a href="<?php echo base_url();?>controlador/mostrarReservas" id="btnCancelarDocentes" class="btn btn-default">Cancelar</a>
                <button class="btn btn-primary" id="mbtnAceptarPerifericos" disabled="true">Aceptar</button>
              </div>

            </div>
            </div>
          </div>
      </div>






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
            </div>
          </div>
        </div>







    <div class="modal fade modal-primary" id="modalAgregarReserva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Registrar Reserva</h3>
              </div>
              <br>
             
              <div class="box-body">

                  <div class="row" align="center">
                    <h3 class="col-sm-1">Fecha:</h3><br>
                    <input style="font-size: 11pt; text-align: center" type="date" id="txtFecha3">                    
                  </div>

                  
                  <div class="row" align="center">
                    <h3 class="col-sm-1">Desde:</h3><br>
                    <input style="font-size: 16pt; text-align: center" type="time" id="txtDesde" value="07:30">                    
                  </div>
                  
                  
                  <div class="row" align="center">
                    <h3 class="col-sm-1">Hasta:</h3><br>
                    <input style="font-size: 16pt; text-align: center" type="time" id="txtHasta" value="08:30">
                  </div>
                                                
                  <br>
             
              </div>

              <div style="text-align: center;">
                <button class="btn btn-default" data-dismiss="modal" id="btnCancelarReserva">Cancelar</button>                  
                <button class="btn btn-primary"  id="mbtnAceptarReserva">Aceptar</button>
              </div>

              <br>          
            </div>
          </div>

    </div>










  
  <div class="modal fade modal-primary" id="modalErrorReserva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Estado</center></h3>

              </div>

              <br>                
                  <h3 id="estadoErrorReserva" class="pull box-tools" style="text-align: center;"></h3>                             
              <br>    
                
              <!-- Ver acá abajo para modificar -->
              <div style="text-align: center;">
                  <button class="btn btn-primary" data-dismiss="modal" data-dismiss="modal" id="btnErrorReserva">Aceptar</button>
              </div>

              <br>
              
            </div>
          </div>
    </div>







    <div class="modal fade modal-primary" id="modalConfirmacionReserva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Estado</center></h3>

              </div>

              <br>                
                  <h3 id="estadoReserva" class="pull box-tools" style="text-align: center;"></h3>                             
              <br>    
                
              <!-- Ver acá abajo para modificar -->
              <div style="text-align: center;">
                  <button class="btn btn-primary" data-dismiss="modal" id="btnConfirmacionReseva">Aceptar</button>
              </div>

              <br>
              
            </div>
          </div>
    </div>











    <div class="modal fade modal-primary" id="modalQuitarReserva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Reserva</h3>
              </div>
              <br>

              <div><h4 style="text-align: center;">¿Quiere quitar la/s reserva/s?</h4></div>

              <br>
              
              <div style="text-align: center;">
                  <button type="button" class="btn btn-default" data-dismiss="modal" id="mbtnCerrarModalReserva">NO</button>
                  <button type="button" class="btn btn-primary" id="mbtnQuitarReserva">SI</button>
              </div>

              <br>              
              
            </div>
          </div>

  </div>




  











  <script type="text/javascript">
      var baseurl = "<?php echo base_url(); ?>";
  </script>



  <script type="text/javascript">
      //var fila = null;
      var dato = '';    
      /* 
      function pulsar(obj){
        obj.style.background = 'cornflowerblue';
        if(fila != null && fila != obj)
          fila.style.background = 'white';
        fila = obj;

      }*/
      
      function pulsar(obj){
        if( obj.style.background == 'cornflowerblue')
          obj.style.background = 'white';
        else
          obj.style.background = 'cornflowerblue';
        
        fila = obj;
      }
      
           
  </script>

