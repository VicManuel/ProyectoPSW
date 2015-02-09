<html>
<head>
</head>
<?php
include_once("RutinaPorHorarioCollector.php");
$RutinaPorHorarioCollectorObj = new RutinaPorHorarioCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioRutinaPorHorarioInsert.php">Nuevo</a></td></tr>
<?php
foreach ($RutinaPorHorarioCollectorObj->readRutinaPorHorarios() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdRutinaPorHorario() ."</td>";
  echo "<td>".$c->getIdRutina() ."</td>";
  echo "<td>".$c->getIdHorario() ."</td>";
  echo "<td><a href='formularioRutinaPorHorarioEditar.php?id=".$c->getIdRutinaPorHorario()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdRutinaPorHorario()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
