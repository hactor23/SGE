    <div class="box box-primary" style="resize:none;">
      <div class="box-body" style="resize:none;">
   
          <h3>Compras</h3>
        
          <table id="tblCompras" border="1">
          <thead>
            <tr>
              <th style="font-size: 13pt; width: 10%; background-color: #006699; color: white; text-align: center;">Fecha</th>
              <th style="font-size: 13pt; width: 5%; background-color: #006699; color: white; text-align: center;">Tipo</th>
              <th style="font-size: 13pt; width: 15%; background-color: #006699; color: white; text-align: center;">N° Factura</th>
              <th style="font-size: 13pt; width: 15%; background-color: #006699; color: white; text-align: center;">Comercio</th>
              <th style="font-size: 13pt; width: 10%; background-color: #006699; color: white; text-align: center;">Monto</th>
              <th style="font-size: 13pt; width: 10%; background-color: #006699; color: white; text-align: center;">Usuario</th>
              <th style="font-size: 13pt; width: 7%; background-color: #006699; color: white; text-align: center;">Descripción</th>
              <th style="font-size: 13pt; width: 7%; background-color: #006699; color: white; text-align: center;">Editar</th>     
            </tr>
          </thead>          
          </table>

      </div>
    </div>
    
  





    <div class="modal fade modal-primary" id="modalVerDescCompra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header bg-blue">                
                <h3 class="modal-title" style="text-align: center;">Compra</h3>
              </div>
              <br>

              <div style="text-align: center;">
                <textarea id="mtxtDesc_compra" rows="10" cols="30" style="resize:none;" readonly="readonly"></textarea>
              </div>

              <br>              
              <div style="text-align: center;">                  
                  <button class="btn btn-default" data-dismiss="modal" id="mbtnDescCompra">Aceptar</button> 
              </div>

              <br>
              
            </div>
          </div>
    </div>








    <div class="modal fade" id="modalEditCompra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog modal-sm" id="modalmodalDocente" rola="document">
              <div class="modal-content">
                <div class="modal-header bg-blue">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title" style="text-align: center;">Modificar Datos</h3>
                </div>

                <div class="modal-body">
                <form class="form-horizontal">
           
                <div class="box-body">


                <div class="form-group">
                  <h4 class="col-sm-5" style="text-align: left; vertical-align: text-top;">Tipo</h4>
                  <div class="col-sm-7">
                    <select width=30 class="selectpicker" id="cboLetra" class="form-control" name="cboLetra" style="font-size: 19pt;">         
                        <option value="B">B</option>
                        <option value="A">A</option>
                        <option value="C">C</option>                                            
                    </select>
                  </div>
                </div>              



                <div class="form-group">
                  <h4 class="col-sm-5" style="text-align: left; vertical-align: text-top;">N° Factura</h4>
                  <div class="col-sm-7" style="vertical-align: baseline;">
                    <input type="text" class="form-control" id="txtNumFactura" placeholder="Ingrese N° Factura" style="vertical-align: baseline;">
                  </div>
                </div>



                <div class="form-group">
                  <h4 class="col-sm-5" style="text-align: left; vertical-align: text-top;">Comercio</h4>
                  <div class="col-sm-7" style="vertical-align: baseline;">
                    <input type="text" class="form-control" id="txtComercio" placeholder="Ingrese Comercio" style="vertical-align: baseline;">
                  </div>
                </div>



                <div class="form-group">
                  <h4 class="col-sm-5" style="text-align: left; vertical-align: text-top;">Monto en $</h4>
                  <div  class="col-sm-7" style="vertical-align: sub;">
                     <input type="number" class="form-control" id="txtMonto" value="0.00" style="font-size: 19pt; text-align: right; vertical-align: sub;">
                  </div>
                </div>   
                

                
                <div class="form-group">
                  <h4 class="col-sm-3 control-label" >Descripción</h4>
                  <textarea type="text" class="form-control" id="txtDescripcion" rows="10" cols="30" placeholder="Ingrese breve descripción" required></textarea>
                </div>  

                

                              
                </div>
                </form>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="mbtnCerrarModal">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="mbtnGuardarModifCompra">Guardar</button>
                </div>
              </div>

              <a href="#" class="btn btn-block btn-primary btn-sm" id="mbtnEditar" data-toggle="modal" data-target="#modalEditCompra" style="display: none;"></a>

              
            </div>
          
          </div>
        
        </div>







      <div class="modal fade modal-primary" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Compra</center></h3>

              </div>

              <br>                  
                  <h3 id="estadoCompra" class="pull box-tools" style="text-align: center;"></h3>            
              <br>       
                
              <div><a href="<?php echo base_url();?>controlador/mostrarModificarCompra" class="btn btn-primary pull-right" id="btnCerrarModal">Aceptar</a></div>
                              
              <br><br><br>

              <a href="#" class="btn btn-block btn-primary btn-sm" id="btnConfirmacion" data-toggle="modal" data-target="#modalConfirmacion" style="display: none;"></a>

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


