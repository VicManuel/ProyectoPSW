<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor1=$_POST["horarioInicio"];
$valor2=$_POST["horarioFin"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor1,$valor2) . '!';

include_once("HorarioCollector.php");

$HorarioCollectorObj = new HorarioCollector();
$HorarioCollectorObj->createHorario($valor1,$valor2);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
