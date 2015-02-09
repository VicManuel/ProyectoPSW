<?php

include_once('Horario.php');
include_once('Collector.php');

class HorarioCollector extends Collector
{
  
  function showHorario($id) {
    $row = self::$db->getRows("SELECT * FROM horario where idHorario= ? ", array("{$id}")); 
    $ObjHorario = new Horario($row[0]{'idHorario'},$row[0]{'horarioInicio'},$row[0]{'horarioFin'});
    return $ObjHorario;
  }

  function createHorario($horarioInicio,$horarioFin) {    
    $insertrow = self::$db->insertRow("INSERT INTO DB_Erick.horario (idHorario, horarioInicio, horarioFin) VALUES (?, ?, ?)", array(null, "{$horarioInicio}", "{horarioFin}"));
  }  

  function readHorarios() {
    $rows = self::$db->getRows("SELECT * FROM horario ");        
    $arrayHorario= array();        
    foreach ($rows as $c){
      $aux = new Horario($c{'idHorario'},$c{'horarioInicio'},$c{'horarioFin'});
      array_push($arrayHorario, $aux);
    }
    return $arrayHorario;        
  }
  
  function updateDemo($id,$horarioInicio,$horarioFin) {    
    $insertrow = self::$db->updateRow("UPDATE DB_Erick.horario SET horario.horarioInicio = ?  WHERE horario.idHorario = ? ", array( "{$nombre}",$id));
  }  

  function deleteDemo($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.demo WHERE iddemo= ?", array("{$id}"));
  }  



}
?>

