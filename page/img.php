

<?php

include_once("ImagenCollector.php");


$ruta="imagenes";
$archivo=$_FILES['imagen1']['tmp_name'];
$nombreArchivo=$_FILES['imagen1']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);

$ruta=$ruta."/".$nombreArchivo;
$texto=$_POST['texto'];





$ImagenCollectorObj = new ImagenCollector();
$ImagenCollectorObj->createImagen($ruta,$texto);
echo" <script> alert('GRABADO CON EXITO') </script>";



?>