<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de RutinaPorHorarioCollector
include_once("RutinaPorHorarioCollector.php");
//creo una instancia de RutinaPorHorarioCollector
$RutinaPorHorarioCollectorObj = new RutinaPorHorarioCollector();
//Ejecuto el metodo para eliminar el objeto RutinaPorHorario indicando el id
$RutinaPorHorarioCollectorObj->deleteRutinaPorHorario($id);

// muestro mensaje de que se ha eliminado el objeto RutinaPorHorario
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
