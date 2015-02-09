<html>
<head>
</head>

<body>
<div id="main">
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];

//incluir la libreria de HorarioCollector
include_once("HorarioCollector.php");
//creo una instancia de HorarioCollector
$HorarioCollectorObj = new HorarioCollector();
//Ejecuto el metodo para eliminar el objeto Horario indicando el id
$HorarioCollectorObj->deleteHorario($id);

// muestro mensaje de que se ha eliminado el objeto Horario
echo "valor id". htmlspecialchars($id) ."  ha sido eliminado correctamente.";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
