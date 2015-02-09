<?php

include_once('Rutina.php');
include_once('../Collector.php');

class RutinaCollector extends Collector
{
  
  function showRutina($id) {
    $row = self::$db->getRows("SELECT * FROM rutina where idrutina= ? ", array("{$id}")); 
    $Objrutina = new rutina($row[0]{'idrutina'},$row[0]{'descripción'},$row[0]{'dia'},$row[0]{'estado'});
    return $Objrutina;
  }

  function createRutina($descripcion,$dia,$estado) {    
    $insertrow = self::$db->insertRow("INSERT INTO wodhard.rutina (idrutina, descripcion, dia, estado) VALUES (?, ?, ?, ?)", array(null, "{$descripcion}", "{$dia}", "{$estado}"));
  
  }  

  function readRutina() {
    $rows = self::$db->getRows("SELECT * FROM rutina ");        
    $arrayRutina= array();        
    foreach ($rows as $c){
      $aux = new rutina($c{'idrutina'},$c{'descripción'},$c{'dia'},$c{'estado'});
      array_push($arrayRutina, $aux);
    }
    return $arrayRutina;        
  }
  
  function updateRutina($idrutina,$descripcion,$dia,$estado) {    
    $insertrow = self::$db->updateRow("UPDATE wodhard.rutina SET rutina.descripcion = ?, rutina.dia = ?, rutina.estado = ?  WHERE rutina.idrutina = ? ", array( "{$descripcion}","{$dia}","{$estado}",$idrutina));
  }  

  function deleteRutina($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM wodhard.rutina WHERE idrutina= ?", array("{$id}"));
  }  



}
?>
