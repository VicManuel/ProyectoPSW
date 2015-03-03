

<?php
$idrutina=$_POST["Codigo"];
$descripcion=$_POST["Descripción"];
$dia=$_POST["periodo"];
$estado=$_POST["Estado"];

$accion=$_POST["Accion"];

if($estado=="1"){
$estado="Activo";
}else{
$estado="Inactivo";
}
$ruta="../image";
$archivo=$_FILES['foto']['tmp_name'];
$nombreArchivo=$_FILES['foto']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);

$ruta=$ruta."/".$nombreArchivo;

						
					
if($accion=="Grabar")
{

include_once("RutinaCollector.php");

$RutinaCollectorObj = new RutinaCollector();
$RutinaCollectorObj->createRutina($descripcion,$dia,$estado,$ruta);
echo" <script> alert('Registro Exitoso!!!');
window.location.href='Mantenimientos.php#Rutina';</script>";



}else{
if($accion=="Eliminar")
	{
		$id=$_POST["Codigo"];

		//incluir la libreria de RutinaCollector
		include_once("RutinaCollector.php");
		//creo una instancia de RutinaCollector
		$RutinaCollectorObj = new RutinaCollector();
		//Ejecuto el metodo para eliminar el objeto Demo indicando el id
		$RutinaCollectorObj->deleteRutina($id);
		echo" <script> alert('Registro Eliminado');
				window.location.href='Mantenimientos.php#Rutina';</script>";		
	}else{
		if($accion=="Modificar")
		{
			include_once("RutinaCollector.php");
			$RutinaCollectorObj = new RutinaCollector();
			$RutinaCollectorObj->updateRutina($idrutina,$descripcion,$dia,$estado,$ruta);
			echo" <script> alert('Modificado con Exito');
				window.location.href='Mantenimientos.php#Rutina';</script>";
		}else{
			if($accion=="Buscar")
		{
			
			$idrutina=$_POST["Codigo"];
			include_once("RutinaCollector.php");
			$RutinaCollectorObj = new RutinaCollector();
			$Objrutina=$RutinaCollectorObj->showRutina($idrutina);
			
			$Descripcion=$Objrutina->getdescripcion();
			$Dia=$Objrutina->getdia();
			$Estado=$Objrutina->getestado();
			$foto=$Objrutina->getimagenRutina();
			
			?>
				<div class="overlay-container">
					<div class="window-container zoomin">
						<form  align="left">
				
				
						    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						   <div class="reg-header">            
						        <center><h2>Consulta de Rutina</h2></center>
						    </div>
						    <br /><br />
						  <table width="200" border="0" align="center" >
							<tr> <td rowspan="8"><img src="<?php echo $foto?>" width="200" height="200" title="<?php echo $Descripcion ?>" legend="<?php echo $Descripcion ?>"/></td></tr>
			
							<tr>
							  <td><b>Codigo</b></td>
			<td><input type="text" name="Codigo" value="<?php echo $idrutina ?>" /></td>
		</tr>
		  <tr>
		<td><b>Descripción</b></td>
			<td>
		    	<input type="text" name="Descripcion" value="<?php echo $Descripcion ?>" />        
		    </td>
		  </tr>
		  <tr>
    <td><b>Día</b></td>
    <td>
    	   <select name="dia" placeholder="Dia">
		<option value="<?php echo $Dia ?>"><?php echo $Dia ?></option>
		
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
		     
		  </table>
		</br></br>
		                    <div class="row" align="center">
		                      <div class="col-md-6">
		                        <input type="button" onclick=window.open('Mantenimientos.php#Rutina') value="Volver"/>
					
					
					
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
