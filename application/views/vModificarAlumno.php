    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
   
          <h3>Alumnos</h3>
        
          <table id="tblAlumnos" border="1">
          <thead>
            <tr>
              <th style="font-size: 13pt; width: 3%; background-color: #006699; color: white; text-align: center;">DNI</th>
              <th style="font-size: 13pt; width: 15%; background-color: #006699; color: white; text-align: center;">Apellido</th>
              <th style="font-size: 13pt; width: 15%; background-color: #006699; color: white; text-align: center;">Nombre</th>
              <th style="font-size: 13pt; width: 2%; background-color: #006699; color: white; text-align: center;">Curso</th>
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
    

   


      









        <div class="modal fade" id="modalEditAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog modal-sl" id="modalmodalAlumno" rola="document">
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
                <input type="text" name="mtxtDniAlumno" class="form-control" id="mtxtDniAlumno">
                </div>      
                </div>

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;" id="estadoApell"><b>Apellido</b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtApellAlumno" class="form-control" id="mtxtApellAlumno" >
                </div>      
                </div>   

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;" id="estadoNom"><b>Nombre</b></div>
                <div class="col-sm-9"> 
                <input type="text" name="mtxtNomAlumno" class="form-control" id="mtxtNomAlumno" >
                </div>      
                </div>  

                <div class="form-group">
                <div class="col-sm-3 control-label" style="text-align: left;" id="estadoCurso"><b>Curso</b></div>
                <div class="col-sm-9"> 
                    <select width=30 class="selectpicker" id="mCboCurso" name="cboCurso">                
                                <option value=""></option>
                                <option value="1° 1°">1° 1°</option>
                                <option value="1° 2°">1° 2°</option>
                                <option value="1° 3°">1° 3°</option>
                                <option value="1° 4°">1° 4°</option>
                                <option value="1° 5°">1° 5°</option>
                                <option value="1° 6°">1° 6°</option>
                                <option value="2° 1°">2° 1°</option>
                                <option value="2° 2°">2° 2°</option>
                                <option value="2° 3°">2° 3°</option>
                                <option value="2° 4°">2° 4°</option>
                                <option value="2° 5°">2° 5°</option>
                                <option value="2° 6°">2° 6°</option>
                                <option value="3° 1°">3° 1°</option>
                                <option value="3° 2°">3° 2°</option>
                                <option value="3° 3°">3° 3°</option>                        
                                <option value="3° 4°">3° 4°</option>
                                <option value="3° 5°">3° 5°</option>
                                <option value="3° 6°">3° 6°</option>
                                <option value="4° 1°">4° 1°</option>                        
                                <option value="4° 2°">4° 2°</option>                        
                                <option value="4° 3°">4° 3°</option>                        
                                <option value="4° 4°">4° 4°</option>
                                <option value="4° 5°">4° 5°</option>
                                <option value="4° 6°">4° 6°</option>                        
                                <option value="5° 1°">5° 1°</option>                        
                                <option value="5° 2°">5° 2°</option>                        
                                <option value="5° 3°">5° 3°</option>                        
                                <option value="5° 4°">5° 4°</option>
                                <option value="5° 5°">5° 5°</option>
                                <option value="5° 6°">5° 6°</option>                        
                                <option value="6° 1°">6° 1°</option>                        
                                <option value="6° 2°">6° 2°</option>                        
                                <option value="6° 3°">6° 3°</option>                        
                                <option value="6° 4°">6° 4°</option>
                                <option value="6° 5°">6° 5°</option>
                                <option value="6° 6°">6° 6°</option>                        
                                <option value="7° 1°">7° 1°</option>                        
                                <option value="7° 2°">7° 2°</option>                        
                                <option value="7° 3°">7° 3°</option>                        
                                <option value="7° 4°">7° 4°</option>
                                <option value="7° 5°">7° 5°</option>
                                <option value="7° 6°">7° 6°</option>                        
                           </select>
                </div>      
                </div>

                

                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModal">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarModifAlumno">Guardar</button>
                </div>
              </div>

              <a href="#" class="btn btn-block btn-primary btn-sm" id="mbtnEditar" data-toggle="modal" data-target="#modalEditAlumno" style="display: none;"></a>

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






    <div class="modal fade modal-primary" id="modalCredAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Credito Alumno</h3>
              </div>
              <br>

              <div style="text-align: left;">

              <h4 id="apeAlumno"></h4> 
              <h4 id="nomAlumno"></h4>               
              <h4 id="credAlumno"></h4> 
              <h4 id="saldoAlumno"></h4> 
              <h4 id="saldoTotalAlumno"></h4>                    

              </div>          
              
              <br><br>
              <div style="text-align: center;">
                <a href="<?php echo base_url();?>controlador/mostrarModificarAlumno" id="mbtnCancCredAlum" class="btn btn-default">Cancelar</a>                
                <button type="button" class="btn btn-primary" id="mbtnAcepCredAlum" style="width: 23%;">Aceptar</button>

                <a href="#" class="btn btn-block btn-primary btn-sm" id="btnCredAlu" data-toggle="modal" data-target="#modalCredAlumno" style="display: none;"></a>

              </div>
              <br>          
            </div>
          </div>

    </div>







      <div class="modal fade modal-primary" id="modalConfirmacionModifAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

              <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="mbtnCerrarModal2">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" style="text-align: center;">Alumno</h3>
              </div>
              <br>

                  <div id="estadoAlumno" class="pull box-tools">
                
              </div>
              <br>

               <div><a href="<?php echo base_url();?>controlador/mostrarModificarAlumno" class="btn btn-primary pull-right" id="btnCerrarModal">Aceptar</a></div>
                  
              <br><br><br>       
              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacionModifAlumno" data-toggle="modal" data-target="#modalConfirmacionModifAlumno" style="display: none;"></a>

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
                      <a type="button" href="<?php echo base_url();?>controlador/mostrarModificarAlumno" class="btn btn-primary pull-right" id="mbtnCerrarSaldos">Cerrar</a>                              
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


