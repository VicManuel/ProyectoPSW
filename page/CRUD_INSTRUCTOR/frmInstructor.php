


<div class="overlay-container">
	<div class="window-container zoomin">
		<form  align="left" action="CRUD_Instructor.php" method='post' enctype="multipart/form-data">
				
				
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <div class="reg-header">            
                        <center><h2>Registro de Instructor</h2></center>
                    </div>
		    
		    <?php
			/*include_once('InstructorCollector.php');
			$InstructorCollectorObj= new InstructorCollector();
			
			
			foreach($InstructorCollectorObj->readInstructor() as $ObjInstructor){
						
			}*/
		    ?>
		  
		 
    <br /><br />
    	<table width="200" border="0" align="center" >
        <tr> <td rowspan="8"><img src="" width="200" height="200" title="" legend=""/></td></tr>
 
  <tr>
    <td><b>Codigo</b></td>
    <td><input type="text" name="Codigo" value="" /></td>
  </tr>
  <tr>
    <td><b>Nombre</b></td>
	<td>
    	<input type="text" name="Nombre" value="<?php echo $nombre ?>" />        
    </td>
  </tr>
  <tr>
    <td><b>Apellido</b></td>
	<td>
    	<input type="text" name="Apellido" value="" />        
    </td>
  </tr>
  <tr>
    <td><b>Sexo</b></td>
    <td>
    	   <select name="Sexo">
		<option value="Femenino">Femenino</option>
		<option value="Masculino">Masculino</option>
		<option value="Otro">Otro</option>		
	   </select>
    </td>
  </tr>
  <tr>
    <td><b>Tipo de Telefono</b></td>
    <td>
    	   <select name="tipoTelefono">
		<option value="Claro">Claro</option>
		<option value="Movistar">Movistar</option>
		<option value="CNT">Cnt</option>
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
    <td><b>Comentario</b></td>
	<td>
    	<input rows="15" type="text" name="Comentario" value="" />        
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



