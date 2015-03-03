

<?php

include_once('Telefono.php');
include_once('Collector.php');

class TelefonoCollector extends Collector
{
  
  function showTelefono($id) {
    $row = self::$db->getRows("SELECT * FROM telefono where idgimnasio= ? ", array("{$id}")); 
    $Objtelefono = new Telefono($row[0]{'idtelefono'},$row[0]{'numero'},$row[0]{'tipoTelefono'},$row[0]{'idgimnasio'});
    return $Objtelefono;
  }

  function createTelefono($telefono,$tipoTelefono,$idgimnasio) {    
    $insertrow = self::$db->insertRow("INSERT INTO wodhard.telefono (idtelefono,numero,tipoTelefono,idgimnasio) VALUES (?, ?, ?, ?)",
                                      array(null, "{$telefono}", "{$tipoTelefono}", "{$idgimnasio}"));
  
  }  

  function readTelefono() {
    $rows = self::$db->getRows("SELECT * FROM telefono ");        
    $arrayTelefono= array();        
    foreach ($rows as $c){
      $aux = new Telefono($c{'idtelefono'},$c{'numero'},$c{'tipoTelefono'},$c{'idgimnasio'});
      array_push($arrayTelefono, $aux);
    }
    return $arrayTelefono;        
  }
  
  function updateTelefono($telefono,$tipoTelefono,$idgimnasio) {    
    $insertrow = self::$db->updateRow("UPDATE wodhard.telefono SET telefono.numero = ?, telefono.tipoTelefono = ?, telefono.idgimnasio = ? WHERE telefono.idgimnasio = ? ",
                                      array( "{$telefono}","{$tipoTelefono}","{$idgimnasio}",$idgimnasio));
  }
  
   

  function deleteTelefono($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM wodhard.telefono WHERE idgimnasio= ?", array("{$id}"));
  }
  
  



}
?>
