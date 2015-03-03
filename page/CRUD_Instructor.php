
<?php
$codigo=$_POST["Codigo"];
$nombre=$_POST["Nombre"];
$apellido=$_POST["Apellido"];
$sexo=$_POST["Sexo"];
$tipoTelefono=$_POST["tipoTelefono"];
$telefono=$_POST["Telefono"];
$comentario=$_POST["Comentario"];



$accion=$_POST["Accion"];

$ruta="../image";
$archivo=$_FILES['foto']['tmp_name'];
$nombreArchivo=$_FILES['foto']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);

$ruta=$ruta."/".$nombreArchivo;

						
					
if($accion=="Grabar")
{

include_once("InstructorCollector.php");


$InstructorCollectorObj = new InstructorCollector();
$InstructorCollectorObj->createInstructor($nombre,$apellido,$sexo,$tipoTelefono,$telefono,$ruta,$comentario);

echo" <script> alert('Registro Exitoso!!!');
window.location.href='Mantenimientos.php#Instructor';</script>";



}else{
if($accion=="Eliminar")
	{
		$codigo=$_POST["Codigo"];

		include_once("InstructorCollector.php");
		$InstructorCollectorObj = new InstructorCollector();
		$InstructorCollectorObj->deleteInstructor($codigo);
		
		echo" <script> alert('Registro Eliminado');
				window.location.href='Mantenimientos.php#Instructor';</script>";		
	}else{
		if($accion=="Modificar")
		{
			$codigo=$_POST["Codigo"];
			include_once("InstructorCollector.php");
			$InstructorCollectorObj = new InstructorCollector();
			$InstructorCollectorObj->updateInstructor($codigo,$nombre,$apellido,$sexo,$tipoTelefono,$telefono,$foto,$comentario);

			echo" <script> alert('Modificado con Exito');
				window.location.href='Mantenimientos.php#Instructor';</script>";
		}else{
			if($accion=="Buscar")
		{
			$codigo=$_POST["Codigo"];
			echo $codigo;
			
			include_once('InstructorCollector.php');
			$InstructorCollectorObj = new InstructorCollector();
			$Objinstructor=$InstructorCollectorObj->showInstructor($codigo);
			echo $Objinstructor->getcodigo();
			
			
			
				?>
			<div class="overlay-container">
	<div class="window-container zoomin">
		<form  align="left">
				
				
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <div class="reg-header">            
                        <center><h2>Consulta de Instructor</h2></center>
                    </div>
		    <br /><br />
		    <table width="200" border="1" align="center" >
		    <tr> <td rowspan="8"><img src="<?php echo $Foto?>" width="200" height="200" title="<?php echo $Nombre ?>" legend="<?php echo $Nombre ?>"/></td></tr>
			
		    <tr>
		   <td><b>Codigo</b></td>
			<td><input type="text" name="Codigo" value="<?php echo $codigo ?>" /></td>
		</tr>
		  <tr>
		<td><b>Nombre</b></td>
			<td>
		    	<input type="text" name="Nombre" value="<?php echo $Nombre ?>" />        
		    </td>
		  </tr>
		  <tr>
		    <td><b>Apellido</b></td>
			<td>
		    	<input type="text" name="Apellido" value="<?php echo $Apellido ?>" />        
		    </td>
		  </tr>
		  <tr>
			<td><b>Sexo</b></td>
			<td>
			   <select name="Sexo">
				<option value="<?php echo $sexo ?>"><?php echo $sexo ?></option>
				
			   </select>
			</td>
		</tr>
		  <tr>
			<td><b>Tipo de Telefono</b></td>
			<td>
			   <select name="tipoTelefono" placeholder="Dia">
				<option value="<?php echo $tipoTelefono ?>">Claro</option>
				<option value="Movistar">Movistar</option>
				<option value="Cnt">Cnt</option>
				<option value="Convencional">Convencional</option>		
			   </select>
			</td>
		</tr>
		   <tr>
		    <td><b>Telefono</b></td>
			<td>
		    	<input type="text" name="Telefono" value="<?php echo $Telefono ?>" />        
		    </td>
		  </tr>
		    <tr>
		    <td><b>Comentario</b></td>
			<td>
		    	<input type="text" name="Comentario" value="<?php echo $Comentario ?>" />        
		    </td>
		  </tr>
		    
		  </table>
		</br></br>
		                    <div class="row" align="center">
		                      <div class="col-md-6">
		                        <input type="button" onclick=window.open('Mantenimientos.php#gym') value="Volver"/>
					
					
					
	                        </div>
	                    </div>
	                </form> 
								
						</div>
					</div>

<?php
			

			
			
			
			
			
		}	
		}
	}
    
}
?>
