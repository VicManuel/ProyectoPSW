<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor1=$_POST["idRutina"];
$valor2=$_POST["idHorario"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor1,$valor2) . '!';

include_once("RutinaPorHorarioCollector.php");

$RutinaPorHorarioCollectorObj = new RutinaPorHorarioCollector();
$RutinaPorHorarioCollectorObj->createRutinaPorHorario($valor1,$valor2);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
