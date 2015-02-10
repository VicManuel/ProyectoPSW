<html>
<head>
</head>

<body>
<div id="main">
<?php
$idHorario=$_POST["idHorario"];
$idRutina=$_POST["idRutina"];
$idRutinaPorHorario=$_POST["idRutinaPorHorario"];


echo "Edici&oacute;n en proceso ....  </br>";

include_once("RutinaPorHorarioCollector.php");
$RutinaPorHorarioCollectorObj = new RutinaPorHorarioCollector();
$RutinaPorHorarioCollectorObj->updateRutinaPorHorario($idRutinaPorHorario,$idRutina,$idHorario);

echo "id :".$idRutinaPorHorario." actualizado a:".$idRutina." ".$idHorario." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
