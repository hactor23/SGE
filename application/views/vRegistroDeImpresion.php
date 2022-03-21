    


    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
   
          <h3 id="fechaRegistro">Fecha: </h3>
        
          <table id="tblRegistroImpresion" border="1">
          <thead>
            <tr>             
              <th style="font-size: 15pt; width: 10%; background-color: #006699; color: white; text-align: center;">Tipo de Impresión</th>
              <th style="font-size: 15pt; width: 10%; background-color: #006699; color: white; text-align: center;">Cantidad</th>
              <th style="font-size: 15pt; width: 5%; background-color: #006699; color: white; text-align: center;">Total $</th>
            </tr>
          </thead>          
          </table>


          <br><br><br>

          <div>          
            <button href="#"  class="btn btn-primary pull-left" id="btnObservaciones" data-toggle="modal" data-target="#modalObservaciones">Observaciones</button>
            <button href="#"  class="btn btn-primary pull-left" id="btnImpresiones" data-toggle="modal" data-target="#modalImpresiones">Impresiones</button>                           
            <h3 id="totalRegistro" style="text-align: center;"></h3>                        
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
              
              <br><br>

              <div style="text-align: center;">
                  <a href="<?php echo base_url();?>controlador/mostrarRegistroDeImpresion" id="mbtnCancelarObs" class="btn btn-default">Cancelar</a>                  
                  <button href="#"  class="btn btn-primary" id="btnAgregarObs" data-toggle="modal" data-target="#modalObservacion">Agregar</button>
              </div>

              <br>
              
            </div>
          </div>

    </div>







    <div class="modal fade modal-primary" id="modalObservacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Observación</h3>
              </div>
              <br>

              <div style="text-align: center;">
                <textarea id="mtxtObservacion" rows="10" cols="30" placeholder="Ingrese una observación" style="resize:none;"></textarea>   
              </div>

              <br>              
              <div style="text-align: center;">
                  <a href="<?php echo base_url();?>controlador/mostrarRegistroDeImpresion" id="mbtnCancelarAgrObs" class="btn btn-default">Cancelar</a> 
                  <a href="<?php echo base_url();?>controlador/mostrarRegistroDeImpresion" id="mbtnAceptarObs" class="btn btn-primary">Aceptar</a>                  
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










    <div class="modal fade modal-primary" id="modalImpresiones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Impresiones</h3>
              </div>
              <br>

                <table id="mtblTipoImpresion" border="1">
                    <thead>
                    <tr>                    
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Tipo de Impresión</th>
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Cantidad</th>
                        <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Precio en $</th>
                    </tr>
                    </thead>          
                </table>
              
              <br><br>

              <div style="text-align: center;">
                  <button class="btn btn-default" data-dismiss="modal" id="mbtnCancelarImp">Cancelar</button>
                  <button href="#"  class="btn btn-primary" id="btnTotal" data-toggle="modal" data-target="#modalTotal">Aceptar</button>
              </div>

              <br>
              
            </div>
          </div>

    </div>







  
    <div class="modal fade modal-primary" id="modalTotal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Total Impresiones</h3>
              </div>

              <div class="rows" style="text-align: center;">
              <h3 id="totalImp"></h3>                
              <br>

              <div class="form-group">
                  <h4 class="col-sm-7">Pago en efectivo $</h4> 
                  <input type="number" id="totalImpEfectivo" style="font-size: 18pt; text-align: right; width: 32%;">  
              </div>
              
              </div>

              <br>

              <div style="text-align: center;">

                  <button class="btn btn-default" data-dismiss="modal" id="mbtnCerrarTotal" style="width: 25%;">Cancelar</button>
                  <button class="btn btn-primary" id="mbtnEfectivo" style="width: 23%;">Efectivo</button>
                  <button href="#"  class="btn btn-primary" data-toggle="modal" data-target="#modalAlumnos" id="mbtnAlumno" style="width: 22%;">Alumno</button>
                  <button href="#"  class="btn btn-primary" data-toggle="modal" data-target="#modalDocentes" id="mbtnDocente" style="width: 23%;">Docente</button>     

              </div>
              <br>          
            </div>
          </div>

    </div>







    <div class="modal fade" id="modalAlumnos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-blue">                
              <h3 class="modal-title" style="text-align: center;">Alumnos</h3>
            </div>

            <br><br>
            <div class="modal-body">

            <table id="mtblAlumnos" border="1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 3%; background-color: #006699; color: white; text-align: center;">DNI</th>
                    <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Apellido</th>
                    <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Nombre</th>
                    <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Curso</th>
                    <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Saldo $</th>
                    <th style="width: 3%; background-color: #006699; color: white; text-align: center;">Acción</th>      
                  </tr>
                </thead>          
            </table>

            <br>
            <div  style="text-align: center;">            
              <a href="<?php echo base_url();?>controlador/mostrarRegistroDeImpresion" id="btnCancelarAlumnos" class="btn btn-default">Cancelar</a>
              <button href="#"  class="btn btn-primary" data-toggle="modal" data-target="#modalRegistrarAlumno" id="mbtnRegistrarAlumno">Registrar</button>
            </div>

          </div>
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
              <h4 id="totalImpAlumno"></h4> 
              <h4 id="totalImpEfectivoAlumno"></h4> 
              <h4 id="credAlumno"></h4> 
              <h4 id="saldoAlumno"></h4> 
              <h4 id="saldoTotalAlumno"></h4>                    

              </div>          
              
              <br><br>
              <div style="text-align: center;">
                <a href="<?php echo base_url();?>controlador/mostrarRegistroDeImpresion" id="mbtnCancCredAlum" class="btn btn-default">Cancelar</a>                
                <button type="button" class="btn btn-primary" id="mbtnAcepCredAlum" style="width: 23%;">Aceptar</button>

                <a href="#" class="btn btn-block btn-primary btn-sm" id="btnCredAlu" data-toggle="modal" data-target="#modalCredAlumno" style="display: none;"></a>

              </div>
              <br>          
            </div>
          </div>

    </div>




    <div class="modal fade modal-primary" id="modalRegistrarAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Registrar Alumno</h3>
              </div>
              <br>
             
              <div class="box-body">
                  
                  <div>
                    <div  id="estadoDni" class="control-label"><h4>DNI</h4></div>
                    <input type="number" class="form-control" id="txtDniAlumno" placeholder="Ingrese DNI sin puntos"  required>
                  </div>
                  

                  <div >
                    <div id="estadoApell" class="control-label"><h4>Apellido</h4></div>
                    <input type="text" class="form-control" id="txtApeAlumno" placeholder="Ingrese un Apellido" required>
                  </div>

                  <div>
                    <div id="estadoNom" class="control-label"><h4>Nombre</h4></div>
                    <input type="text" class="form-control" id="txtNomAlumno" placeholder="Ingrese un Nombre" required>
                  </div>
                 
                  <div>                  
                  <div id="estadoCurso" class="control-label"><h4>Curso</h4></div>                  
                        <div>                           
                             <select width=30 class="selectpicker" id="cboCurso" name="cboCurso">                
                                  <option value=""></option>
                                  <option value="1° 1°">1° 1°</option>
                                  <option value="1° 2°">1° 2°</option>
                                  <option value="1° 3°">1° 3°</option>
                                  <option value="1° 4°">1° 4°</option>
                                  <option value="2° 1°">2° 1°</option>
                                  <option value="2° 2°">2° 2°</option>
                                  <option value="2° 3°">2° 3°</option>
                                  <option value="2° 4°">2° 4°</option>
                                  <option value="3° 1°">3° 1°</option>
                                  <option value="3° 2°">3° 2°</option>
                                  <option value="3° 3°">3° 3°</option>                        
                                  <option value="3° 3°">3° 4°</option>                        
                                  <option value="4° 1°">4° 1°</option>                        
                                  <option value="4° 2°">4° 2°</option>                        
                                  <option value="4° 3°">4° 3°</option>                        
                                  <option value="4° 4°">4° 4°</option>                        
                                  <option value="5° 1°">5° 1°</option>                        
                                  <option value="5° 2°">5° 2°</option>                        
                                  <option value="5° 3°">5° 3°</option>                        
                                  <option value="5° 4°">5° 4°</option>                        
                                  <option value="6° 1°">6° 1°</option>                        
                                  <option value="6° 2°">6° 2°</option>                        
                                  <option value="6° 3°">6° 3°</option>                        
                                  <option value="6° 4°">6° 4°</option>                        
                                  <option value="7° 1°">7° 1°</option>                        
                                  <option value="7° 2°">7° 2°</option>                        
                                  <option value="7° 3°">7° 3°</option>                        
                                  <option value="7° 4°">7° 4°</option>                        
                             </select>
                        </div> 
                  </div>  

                  
                 <div>
                    <div id="estadoSaldo" class="control-label"><h4>Saldo: $0.00</h4></div>             
                 </div>                                               
              </div>

              <div style="text-align: center;">
                <!--Ver acá abajo para volver a la vista inicial-->
                  <button class="btn btn-default" data-dismiss="modal" id="btnCancelarRegistroAlum">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnAceptarAlum">Aceptar</button>
                  <!-- 
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCredAlumno" id="mbtnAceptarAlum">Aceptar</button>
                  -->
              </div>
              <br>          
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
                      <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Saldo $</th>
                      <th style="width: 3%; background-color: #006699; color: white; text-align: center;">Acción</th>      
                    </tr>
                  </thead>          
              </table>

              <br>
              <div  style="text-align: center;">            
                <a href="<?php echo base_url();?>controlador/mostrarRegistroDeImpresion" id="btnCancelarDocentes" class="btn btn-default">Cancelar</a>
                <button href="#"  class="btn btn-primary" data-toggle="modal" data-target="#modalRegistrarDocente" id="mbtnRegistrarDocente">Registrar</button>
              </div>

            </div>
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
              <h4 id="totalImpDocente"></h4> 
              <h4 id="totalImpEfectivoDocente"></h4> 
              <h4 id="credDocente"></h4> 
              <h4 id="saldoDocente"></h4> 
              <h4 id="saldoTotalDocente"></h4>                    

              </div>          
              
              <br><br>
              <div style="text-align: center;">
                  <a href="<?php echo base_url();?>controlador/mostrarRegistroDeImpresion" id="mbtnCancCredDoc" class="btn btn-default">Cancelar</a>    
                  <button class="btn btn-primary" id="mbtnAcepCredDoc" style="width: 23%;">Aceptar</button>

                  <a href="#" class="btn btn-block btn-primary btn-sm" id="btnCredDoc" data-toggle="modal" data-target="#modalCredDocente" style="display: none;"></a>

              </div>
              <br>          
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
                  <button type="button" class="btn btn-primary" id="mbtnAceptarDoc">Aceptar</button>
                  <!--
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCredDocente" id="mbtnAceptarDoc">Aceptar</button>
                  -->
              </div>

              <br>          
            </div>
          </div>

    </div>




    
    


    <div class="modal fade modal-primary" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Estado</center></h3>

              </div>

              <br>
                  
                  <div id="estado" class="pull box-tools"></div>
                              
              <br>       
                
              <!-- Ver acá abajo para modificar -->
              <div style="text-align: right;">
               
                <button class="btn btn-primary" data-dismiss="modal" id="mbtnAceptarAlumno">Aceptar</button>

              </div>                            

              <br>

              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacion" data-toggle="modal" data-target="#modalConfirmacion" style="display: none;"></a>

            </div>
          </div>

    </div>





  <div class="modal fade modal-primary" id="modalConfirmacion2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Estado</center></h3>

              </div>

              <br>
                  
                  <div id="estado2" class="pull box-tools"></div>
                              
              <br>    
                
              <!-- Ver acá abajo para modificar -->
              <div style="text-align: right;">
              
                  <button class="btn btn-primary" data-dismiss="modal" id="btnAceptarErrorRegistroAlu">Aceptar</button>

              </div>

              <br>

              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacion2" data-toggle="modal" data-target="#modalConfirmacion2" style="display: none;"></a>

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


