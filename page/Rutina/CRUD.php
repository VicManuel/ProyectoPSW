<!DOCTYPE html>
<html>
<head>
</head>

<body>

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

						
					
if($accion=="Grabar")
{

include_once("RutinaCollector.php");

$RutinaCollectorObj = new RutinaCollector();
$RutinaCollectorObj->createRutina($descripcion,$dia,$estado);
echo" <script> alert('GRABADO CON EXITO') </script>";
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
		echo" <script> alert('ELIMINADO CON EXITO')</script>";		
	}else{
		if($accion=="Modificar")
		{
			include_once("RutinaCollector.php");
			$RutinaCollectorObj = new RutinaCollector();
			$RutinaCollectorObj->updateRutina($idrutina,$descripcion,$dia,$estado);
			echo" <script> alert('MODIFICADO CON EXITO')</script>";
		}
	}
    
}
?>
<div><a href="../Mantenimientos.php">Volver a la Página de Registros</a></div>
</body>
</html>