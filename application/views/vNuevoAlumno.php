<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nuevo Alumno</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


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

                

               <div>

                  <div id="estadoSaldo" class="control-label"><h4>Saldo en $</h4></div>
                  <input type="number" class="form-control" id="txtSaldo" value="0.00" placeholder="" disabled="disabled" style="font-size: 13pt; text-align: right;">
                
               </div>                 
              
                <br>

                <div>
                  <button  id="btnRegistrarAlumno"   name="btnRegistrarAlumno"  class="btn btn-primary pull-right">Guardar</button>
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
                
              <h3 class="modal-title"><center>Registro de Alumno</center></h3>

              </div>

              <br>
                  
                  <div id="estadoAlumno" class="pull box-tools"></div>
                              
              <br>       
                
              <div><a href="<?php echo base_url();?>controlador/mostrarNuevoAlumno" class="btn btn-primary pull-right" id="btnCerrarModal">Aceptar</a></div>
                              
              <br><br><br>

              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacion" data-toggle="modal" data-target="#modalConfirmacion" style="display: none;"></a>

            </div>
          </div>

  </div>




<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
