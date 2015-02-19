<?php

include_once('RutinaPorHorario.php');
include_once('Collector.php');

class RutinaPorHorarioCollector extends Collector
{
  
  function showRutinaPorHorario($id) {
    $row = self::$db->getRows("SELECT * FROM rutinaPorHorario where idRutinaPorHorario= ? ", array("{$id}")); 
    $ObjRutinaPorHorario = new RutinaPorHorario($row[0]{'idRutinaPorHorario'},$row[0]{'idRutina'},$row[0]{'idHorario'});
    return $ObjRutinaPorHorario;
  }

  function createRutinaPorHorario($idRutina,$idHorario) {    
    $insertrow = self::$db->insertRow("INSERT INTO wodhard.rutinaPorHorario (idRutinaPorHorario, idRutina, idHorario) VALUES (?, ?, ?)", array(null, "{$idRutina}", "{$idHorario}"));
  }  

  function readRutinaPorHorarios() {
    $rows = self::$db->getRows("SELECT * FROM rutinaPorHorario ");        
    $arrayRutinaPorHorario= array();        
    foreach ($rows as $c){
      $aux = new RutinaPorHorario($c{'idRutinaPorHorario'},$c{'idRutina'},$c{'idHorario'});
      array_push($arrayRutinaPorHorario, $aux);
    }
    return $arrayRutinaPorHorario;        
  }
  
  function updateDemo($id,$idRutina,$idHorario) {    
    $insertrow = self::$db->updateRow("UPDATE wodhard.rutinaPorHorario SET rutinaPorHorario.idRutina = ? rutinaPorHorario.idHorario = ?  WHERE rutinaPorHorario.idRutinaPorHorario = ? ", array( "{$idRutina}","{$idHorario}",$id));
  }  

  function deleteRutinaPorHorario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM wodhard.rutinaPorHorario WHERE idRutinaPorHorario= ?", array("{$id}"));
  }  



}
?>

