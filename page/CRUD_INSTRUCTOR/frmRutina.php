

<?php
require_once("RutinaCollector.php");
$RutinaCollectorObj= new RutinaCollector();
?>

<div class="overlay-container">
	<div class="window-container zoomin">
		<form  align="left" action="CRUD_Rutina.php" method='post' enctype="multipart/form-data">
				
				
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <div class="reg-header">            
                        <center><h2>Registro de Rutina</h2></center>
                    </div>
		    
		    		    
		    <?php
								
								
								
								
			foreach ($RutinaCollectorObj->readRutina() as $ObjRutina){
			$codigo=$ObjRutina->getidrutina();
			$imagen=$ObjRutina->getimagenRutina();
			$nombre=$ObjRutina->getdescripcion();
			
			}	

															
		?>
		    
    <br /><br />
    	<table width="200" border="0" align="center" >
        <tr> <td rowspan="6"><img src="<?php echo $imagen?>" width="200" height="200" title="<?php echo $nombre ?>" legend="<?php echo $nombre ?>"/></td></tr>
   
  <tr>
    <td><b>Codigo</b></td>
    <td><input type="text" name="Codigo" id="nombres_editar" value="<?php echo $codigo ?>" /></td>
  </tr>
  <tr>
    <td><b>Descripción</b></td>
	<td>
    	<input type="text" name="Descripción" id="apellidos_editar" value="" />        
    </td>
  </tr>
  <tr>
    <td><b>Día</b></td>
    <td>
    	   <select name="periodo" placeholder="Dia">
		<option value="Lunes">Lunes</option>
		<option value="Martes">Martes</option>
		<option value="Miércoles">Miércoles</option>
		<option value="Jueves">Jueves</option>
		<option value="Viernes">Viernes</option>
		<option value="Sábado">Sábado</option>
		<option value="Domingo">Domingo</option>									
		<option value="Todos">Todos</option>
	   </select>
    </td>
  </tr>
  <tr>
    <td><b>Estado</b></td>
    <td> <span >Activo</span>&nbsp&nbsp&nbsp<input type="radio" name="Estado" value="1" /></td>
  </tr>
  <tr>
    <td></td>
    <td><span >Inactivo</span>&nbsp<input type="radio" name="Estado" value="0" /></td>
  </tr>
   <tr><td colspan="3"><b>Subir Imagen de Rutina</b></td></tr>
  <tr><td colspan="3"><input type="file" name="foto" /></td></tr>
</table>
</br></br></br>
                    <div class="row" align="center">
                        <div class="col-md-6">
                           <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Grabar"/>
			   <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Eliminar"/>
			   <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Modificar"/>
			   <input class="btn-u pull-right" type="reset" id="reset" value="Nuevo"/>
			   <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Buscar"/>
                        </div>
                    </div>
                </form> 
								<br/>
							<span class="close">Cerrar</span>
						</div>
					</div>



