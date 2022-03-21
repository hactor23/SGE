    


    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
   
          <div class="row">
              <h3 class="col-sm-3" id="fechaSolicitud">Fecha: </h3>                                        
          </div>

          <br>
        
          <table id="tblPerifericos" border="1">
          <thead>
            <tr>
              <th style="width: 2%; height: 39px;  background-color: #006699; color: white; text-align: center;">Id</th>
              <th style="width: 15%; background-color: #006699; color: white; text-align: center;">Periférico</th>
              <th style="width: 15%; background-color: #006699; color: white; text-align: center;">Estado</th>
              <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Reserva</th>
              <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Descripción</th>
              <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Detalle</th>  
            </tr>
          </thead>          
          </table>


          <br><br><br>

          <div>          
            <button class="btn btn-primary pull-left" id="btnPrestar" disabled="true">Prestar</button>
            <button href="#" class="btn btn-primary pull-left" id="btnDevolver" disabled="true" data-toggle="modal" data-target="">Devolver</button> 
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

                <button class="btn btn-default" data-dismiss="modal" id="btnCerrartblDoc" style="display: none;"></button>    

                <a href="<?php echo base_url();?>controlador/mostrarSolicitud" id="btnCancelarDocentes" class="btn btn-default">Cancelar</a>
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






        <div class="modal fade" id="modalPerifericosPrestados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Periféricos</h3>
              </div>

              <br><br>
              <div class="modal-body">

              <table id="mtblPerifericos" border="1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 3%; background-color: #006699; color: white; text-align: center;">Id_periférico</th>
                      <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Periférico</th>
                      <th style="width: 3%; background-color: #006699; color: white; text-align: center;">Observación</th>   
                    </tr>
                  </thead>          
              </table>

              <br>
              <div  style="text-align: center;">        

                <button class="btn btn-default" data-dismiss="modal" id="btnCerrartblPer" style="display: none;"></button>    

                <a href="<?php echo base_url();?>controlador/mostrarSolicitud" id="btnCancelarPerifericos" class="btn btn-default">Cancelar</a>
                <button class="btn btn-primary" id="mbtnAceptarDev">Aceptar</button>
              </div>

            </div>
            </div>
          </div>
      </div>







      <div class="modal fade modal-primary" id="modalObservacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                
              <h3 class="modal-title" style="text-align: center;"><center>Observación</center></h3>

              </div>

              <br>

              <div style="text-align: center;">
                <textarea id="mtxtObservacion" rows="10" cols="30" placeholder="Ingrese una observación" style="resize:none;"></textarea>   
              </div>

              <br>                
              <div style="text-align: center;">
                  <button class="btn btn-primary" id="mbtnAceptarObs">Aceptar</button>
                  <button class="btn btn-default" id="mbtnCancelarObs" data-toggle="modal" data-target="#modalObservacion" >Cancelar</button>
              </div>

              <br>
            
            </div>
          </div>
        </div>






        <div class="modal fade modal-primary" id="modalConfirmacionPrestamo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">
                
              <h3 class="modal-title" style="text-align: center;"><center>Estado</center></h3>

              </div>

              <br>                
                  <h3 id="estadoDev" style="text-align: center;">Prestamo Realizado.</h3>                             
              <br>    
                
              <div style="text-align: center;">
                  <a href="<?php echo base_url();?>controlador/mostrarSolicitud" id="mbtnAceptarPrest" class="btn btn-primary">Aceptar</a> 
              </div>

              <br>
            
            </div>
          </div>
        </div>







    <div class="modal fade modal-primary" id="modalDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Detalle Solicitud</h3>
              </div>
              <br>
             
              <div class="box-body">
                  
                  <div>
                      <div class="control-label"><h3 id="docente"></h3></div>                      
                  </div>
                 
                  <div >
                      <div class="control-label"><h3 id="fecha"></h3></div>
                  </div>
                  
                  <div>
                      <div class="control-label"><h3 id="hora"></h3></div>
                  </div>

                  <div>
                      <div class="control-label"><h3 id="usuario"></h3></div>          
                  </div>                 
              
                  <br>
             
              </div>

              <div style="text-align: center;">
                  <button class="btn btn-primary" data-dismiss="modal" id="btnCerrarDetalle">Cerrar</button>
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


