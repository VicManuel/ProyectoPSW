<html>
<head>
</head>
<?php
include_once("HorarioCollector.php");
$HorarioCollectorObj = new HorarioCollector();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioHorarioInsert.php">Nuevo</a></td></tr>
<?php
foreach ($HorarioCollectorObj->readHorarios() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdHorario() ."</td>";
  echo "<td>".$c->getHorarioInicio() ."</td>";
  echo "<td>".$c->getHorarioFin() ."</td>";
  echo "<td><a href='formularioHorarioEditar.php?id=".$c->getIdHorario()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdHorario()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
