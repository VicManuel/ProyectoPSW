<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Horario</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("HorarioCollector.php");
include_once("Horario.php");
$HorarioCollectorObj = new HorarioCollector();
$ObjHorario = $HorarioCollectorObj->showHorario($id);
?>
<h2>Editar Objeto Horario </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idHorario" value="<?php echo $ObjHorario->getIdHorario(); ?>" readonly />
</p>

<p>
HorarioInicio: <input type="text" name="horarioInicio"  value="<?php echo $ObjHorario->getHorarioInicio(); ?>" autofocus required />
</p>

<p>
HorarioFin: <input type="text" name="horarioFin"  value="<?php echo $ObjHorario->getHorarioFin(); ?>" autofocus required />
</p>


<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
