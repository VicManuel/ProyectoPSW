<?php

include_once('Imagen.php');
include_once('Collector.php');

class ImagenCollector extends Collector
{
  
  function showImagen($id) {
    $row = self::$db->getRows("SELECT * FROM imagenes where idimagenes= ? ", array("{$id}")); 
    $Objimagen = new imagen($row[0]{'idimagenes'},$row[0]{'imagen'},$row[0]{'texto'});
    return $Objimagen;
  }

  function createImagen($imagen,$texto) {    
    $insertrow = self::$db->insertRow("INSERT INTO wodhard.imagenes (idimagenes, imagen, texto) VALUES (?, ?, ?)", array(null, "{$imagen}", "{$texto}"));
  
  }  

  function readImagen() {
    $rows = self::$db->getRows("SELECT * FROM imagenes ");        
    $arrayImagen= array();        
    foreach ($rows as $c){
      $aux = new imagen($c{'idimagenes'},$c{'imagen'},$c{'texto'});
      array_push($arrayImagen, $aux);
    }
    return $arrayImagen;        
  }
  
  function updateImagen($idimagenes,$imagen,$texto) {    
    $insertrow = self::$db->updateRow("UPDATE wodhard.imagenes SET imagenes.imagen = ?, imagenes.texto = ? WHERE imagenes.idimagenes = ? ", array( "{$imagen}","{$texto}",$idimagenes));
  }  

  function deleteImagenes($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM wodhard.imagenes WHERE idimagenes= ?", array("{$id}"));
  }  



}
?>
