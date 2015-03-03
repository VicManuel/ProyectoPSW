
<?php



include_once('Gimnasio.php');
include_once('Collector.php');

class GimnasioCollector extends Collector
{
  
  function showGimnasio($id) {
    $row = self::$db->getRows("SELECT * FROM gimnasio where idgimnasio= ? ", array("{$id}")); 
    $Objgimnasio = new gimnasio($row[0]{'idgimnasio'},$row[0]{'nombre'},$row[0]{'direccion'},$row[0]{'descripcion'},$row[0]{'fechaApertura'},$row[0]{'imagenGym'});
    return $Objgimnasio;
  }

  function createGimnasio($nombre,$direccion,$descripcion,$fechaApertura,$imagenGym) {    
    $insertrow = self::$db->insertRow("INSERT INTO wodhard.gimnasio (idgimnasio,nombre,direccion,descripcion,fechaApertura,imagenGym) VALUES (?, ?, ?, ?, ?, ?)",
                                      array(null, "{$nombre}", "{$direccion}", "{$descripcion}", "{$fechaApertura}", "{$imagenGym}"));
  
  }  

  function readGimnasio() {
    $rows = self::$db->getRows("SELECT * FROM gimnasio ");        
    $arrayGimnasio= array();        
    foreach ($rows as $c){
      $aux = new gimnasio($c{'idgimnasio'},$c{'nombre'},$c{'direccion'},$c{'descripcion'},$c{'fechaApertura'},$c{'imagenGym'});
      array_push($arrayGimnasio, $aux);
    }
    return $arrayGimnasio;        
  }
  
  function updateGimnasio($idgimnasio,$nombre,$direccion,$descripcion,$fechaApertura,$imagenGym) {    
    $insertrow = self::$db->updateRow("UPDATE wodhard.gimnasio SET gimnasio.nombre = ?, gimnasio.direccion = ?, gimnasio.descripcion = ?, gimnasio.fechaApertura = ?, gimnasio.imagenGym = ?  WHERE gimnasio.idgimnasio = ? ",
                                      array( "{$nombre}","{$direccion}","{$descripcion}","{$fechaApertura}","{$imagenGym}",$idgimnasio));
  }  

  function deleteGimnasio($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM wodhard.gimnasio WHERE idgimnasio= ?", array("{$id}"));
  }  



}
?>
