<html>
<head>
</head>

<body>
<div id="main">
<?php
$horarioInicio=$_POST["horarioInicio"];
$horarioFin=$_POST["horarioFin"];
$idHorario=$_POST["idHorario"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("HorarioCollector.php");
$HorarioCollectorObj = new HorarioCollector();
$HorarioCollectorObj->updateHorario($idHorario,$horarioInicio,$horarioFin);

echo "id :".$idHorario." actualizado a:".$horarioInicio." ".$horarioFin." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
