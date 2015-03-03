

<?php
$idgimnasio=$_POST["Codigo"]+1;
$nombre=$_POST["Nombre"];
$direccion=$_POST["Direccion"];
$tipoTelefono=$_POST["tipoTelefono"];
$telefono=$_POST["Telefono"];
$descripcion=$_POST["Descripcion"];
$fechaApertura=$_POST["fechaApertura"];


$accion=$_POST["Accion"];

$ruta="../image";
$archivo=$_FILES['foto']['tmp_name'];
$nombreArchivo=$_FILES['foto']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);

$ruta=$ruta."/".$nombreArchivo;

						
					
if($accion=="Grabar")
{

include_once("GimnasioCollector.php");
include_once("TelefonoCollector.php");

$GimnasioCollectorObj = new GimnasioCollector();
$GimnasioCollectorObj->createGimnasio($nombre,$direccion,$descripcion,$fechaApertura,$ruta);
$TelefonoCollectorObj = new TelefonoCollector();
$TelefonoCollectorObj->createTelefono($telefono,$tipoTelefono,$idgimnasio);
echo" <script> alert('Registro Exitoso!!!');
window.location.href='Mantenimientos.php#Gimnasio';</script>";



}else{
if($accion=="Eliminar")
	{
		$idgimnasio=$_POST["Codigo"];

		include_once("GimnasioCollector.php");
		$GimnasioCollectorObj = new GimnasioCollector();
		$GimnasioCollectorObj->deleteGimnasio($idgimnasio);
		
		include_once("TelefonoCollector.php");
		$TelefonoCollectorObj = new TelefonoCollector();
		$TelefonoCollectorObj->deleteTelefono($idgimnasio);
		
		echo" <script> alert('Registro Eliminado');
				window.location.href='Mantenimientos.php#Rutina';</script>";		
	}else{
		if($accion=="Modificar")
		{
			$idgimnasio=$_POST["Codigo"];
			include_once("GimnasioCollector.php");
			$GimnasioCollectorObj = new GimnasioCollector();
			$GimnasioCollectorObj->updateGimnasio($idgimnasio,$nombre,$direccion,$descripcion,$fechaApertura,$ruta);
			include_once("TelefonoCollector.php");
			$TelefonoCollectorObj = new TelefonoCollector();
			$TelefonoCollectorObj->updateTelefono($telefono,$tipoTelefono,$idgimnasio);
			echo" <script> alert('Modificado con Exito');
				window.location.href='Mantenimientos.php#Rutina';</script>";
		}else{
			if($accion=="Buscar")
		{
			$idgimnasio=$_POST["Codigo"];
			include_once("GimnasioCollector.php");
			include_once("TelefonoCollector.php");
			$GimnasioCollectorObj = new GimnasioCollector();
			$Objgimnasio=$GimnasioCollectorObj->showGimnasio($idgimnasio);
			$TelefonoCollectorObj = new TelefonoCollector();
			$Objtelefono=$TelefonoCollectorObj->showTelefono($idgimnasio);
			$Nombre=$Objgimnasio->getnombre();
			$Direccion=$Objgimnasio->getdireccion();
			$Descripcion=$Objgimnasio->getdescripcion();
			$FechaApertura=$Objgimnasio->getfechaApertura();
			$Imagen=$Objgimnasio->getimagenGym();
			$Telefono=$Objtelefono->gettelefono();
			$tipoTelefono=$Objtelefono->gettipoTelefono();
			if(!isset($Objgimnasio))
			{echo "no hay registro";
			}else{
				?>
			<div class="overlay-container">
	<div class="window-container zoomin">
		<form  align="left">
				
				
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <div class="reg-header">            
                        <center><h2>Consulta de Gimnasio</h2></center>
                    </div>
		    <br /><br />
		    <table width="200" border="1" align="center" >
		    <tr> <td rowspan="8"><img src="<?php echo $Imagen?>" width="200" height="200" title="<?php echo $Nombre ?>" legend="<?php echo $Nombre ?>"/></td></tr>
			
		    <tr>
		   <td><b>Codigo</b></td>
			<td><input type="text" name="Codigo" value="<?php echo $idgimnasio ?>" /></td>
		</tr>
		  <tr>
		<td><b>Nombre</b></td>
			<td>
		    	<input type="text" name="Nombre" value="<?php echo $Nombre ?>" />        
		    </td>
		  </tr>
		  <tr>
		    <td><b>Dirección</b></td>
			<td>
		    	<input type="text" name="Direccion" value="<?php echo $Direccion ?>" />        
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
		    <td><b>Descripción</b></td>
			<td>
		    	<input type="text" name="Descripcion" value="<?php echo $Descripcion ?>" />        
		    </td>
		  </tr>
		     <tr>
		    <td><b>Fecha Apertura</b></td>
			<td>
		    	<input type="text"  name="fechaApertura" value="<?php echo $FechaApertura ?>">
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
    
}
?>
