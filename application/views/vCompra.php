

<section class="content">
	<div class="row">
        <div class="col-md-6">
          <div class="box box-primary">

            <div>
              <h3 id="fechaCompra">Fecha</h3>
              <input type="date" id="txtFecha" style="font-size: 16pt; text-align: left;">
            </div>            


            <div>                  
                <div id="estadoLetra" class="cols">
                	<h4>Tipo</h4>
                	<select width=30 class="selectpicker" id="cboLetra" name="cboLetra" style="font-size: 19pt;">         
                        <option value="B">B</option>
                        <option value="A">A</option>
                        <option value="C">C</option>                                            
                    </select>
                </div>                                
            </div>  



            <div>
              <div  id="estadoFactura" class="control-label"><h4>N° Factura</h4></div>
              <input type="text" class="form-control" id="txtNumFactura" placeholder="Ingrese N° Factura"  required>
            </div>



            <div>
              <div  id="estadoComercio" class="control-label"><h4>Comercio</h4></div>
              <input type="text" class="form-control" id="txtComercio" placeholder="Ingrese Comercio"  required>
            </div>



            <div>

              <div id="estadoMonto" class="control-label"><h4>Monto en $</h4></div>
              <input type="number" class="form-control" id="txtMonto" value="0.00" style="font-size: 13pt; text-align: right;">
            
            </div>   
            

            
            <div>
              <div id="estadoNom" class="control-label"><h4>Descripción</h4></div>
              <textarea type="text" class="form-control" id="txtDescripcion" rows="10" cols="30" placeholder="Ingrese breve descripción" required></textarea>

            </div>
           
                 
            <div>
              <button id="btnRegistrarCompra" name="btnRegistrarCompra"  class="btn btn-primary pull-right">Guardar</button>
            </div>

          </div>
        </div>			      
    </div>
</section>             
       


















    <div class="modal fade modal-primary" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

              <div class="modal-header bg-blue">
                
              <h3 class="modal-title"><center>Compra</center></h3>

              </div>

              <br>                  
                  <h3 id="estadoCompra" class="pull box-tools" style="text-align: center;"></h3>            
              <br>       
                
              <div><a href="<?php echo base_url();?>controlador/mostrarRegistrarCompra" class="btn btn-primary pull-right" id="btnCerrarModal">Aceptar</a></div>
                              
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