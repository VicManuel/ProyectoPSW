
<?php
require_once("GimnasioCollector.php");
$GimnasioCollectorObj= new GimnasioCollector();
?>

<div class="overlay-container">
	<div class="window-container zoomin">
		<form  align="left" action="CRUD_Gimnasio.php" method='post' enctype="multipart/form-data">
				
				
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <div class="reg-header">            
                        <center><h2>Registro de Gimnasio</h2></center>
                    </div>
		    
		    		    
		    <?php
								
								
								
								
			foreach ($GimnasioCollectorObj->readGimnasio() as $ObjGimnasio){
			$codigo=$ObjGimnasio->getidGimnasio();
			$imagen=$ObjGimnasio->getimagenGym();
			$nombre=$ObjGimnasio->getnombre();
			
			}	

															
		?>
		    
    <br /><br />
    	<table width="200" border="0" align="center" >
        <tr> <td rowspan="8"><img src="<?php echo $imagen?>" width="200" height="200" title="<?php echo $nombre ?>" legend="<?php echo $nombre ?>"/></td></tr>
 
  <tr>
    <td><b>Codigo</b></td>
    <td><input type="text" name="Codigo" value="<?php echo $codigo ?>" /></td>
  </tr>
  <tr>
    <td><b>Nombre</b></td>
	<td>
    	<input type="text" name="Nombre" value="" />        
    </td>
  </tr>
  <tr>
    <td><b>Dirección</b></td>
	<td>
    	<input type="text" name="Direccion" value="" />        
    </td>
  </tr>
  <tr>
    <td><b>Tipo de Telefono</b></td>
    <td>
    	   <select name="tipoTelefono" placeholder="Dia">
		<option value="Claro">Claro</option>
		<option value="Movistar">Movistar</option>
		<option value="Cnt">Cnt</option>
		<option value="Convencional">Convencional</option>		
	   </select>
    </td>
  </tr>
   <tr>
    <td><b>Telefono</b></td>
	<td>
    	<input type="text" name="Telefono" value="" />        
    </td>
  </tr>
      
    <tr>
    <td><b>Descripción</b></td>
	<td>
    	<input type="text" name="Descripcion" value="" />        
    </td>
  </tr>
     <tr>
    <td><b>Fecha Apertura</b></td>
	<td>
    	<input type="date" placeholder="Fecha de Apertura" name="fechaApertura">
    </td>
  </tr>

  

  <tr><td colspan="3"><b>Subir Imagen de Rutina</b></td></tr>
  <tr><td colspan="3"><input type="file" name="foto" /></td></tr>
</table>
</br></br>
                    <div class="row" align="center">
                        <div class="col-md-6">
                           <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Grabar"/>
			   <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Eliminar"/>
			   <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Modificar"/>
			   <input class="btn-u pull-right" type="submit" name="Accion" id="Accion" value="Buscar"/>
			   <input class="btn-u pull-right" type="reset" id="reset" value="Nuevo"/>
                        </div>
                    </div>
                </form> 
								<br/>
							<span class="close">Cerrar</span>
						</div>
					</div>



