<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario RutinaPorHorario</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("RutinaPorHorarioCollector.php");
include_once("RutinaPorHorario.php");
$RutinaPorHorarioCollectorObj = new RutinaPorHorarioCollector();
$ObjRutinaPorHorario = $RutinaPorHorarioCollectorObj->showRutinaPorHorario($id);
?>
<h2>Editar Objeto RutinaPorHorario </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idRutinaPorHorario" value="<?php echo $ObjRutinaPorHorario->getIdRutinaPorHorario(); ?>" readonly />
</p>

<p>
IdRutina: <input type="text" name="idRutina"  value="<?php echo $ObjRutinaPorHorario->getIdRutina(); ?>" autofocus required />
</p>

<p>
IdHorario: <input type="text" name="idHorario"  value="<?php echo $ObjRutinaPorHorario->getIdHorario(); ?>" autofocus required />
</p>


<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
