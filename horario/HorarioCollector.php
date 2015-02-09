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

  function createDemo($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO clasedb.demo (iddemo, nombre) VALUES (?, ?)", array(null, "{$nombre}"));
  }  

  function readDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'iddemo'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
  
  function updateDemo($id,$nombre) {    
    $insertrow = self::$db->updateRow("UPDATE clasedb.demo SET demo.nombre = ?  WHERE demo.iddemo = ? ", array( "{$nombre}",$id));
  }  

  function deleteDemo($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM clasedb.demo WHERE iddemo= ?", array("{$id}"));
  }  



}
?>

