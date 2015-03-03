<?php



include_once('Instructor.php');
include_once('Collector.php');

class InstructorCollector extends Collector
{
  
  function showInstructor($id) {
    $row = self::$db->getRows("SELECT * FROM instructor where idinstructor= ? ", array("{$id}")); 
    $Objinstructor = new instructor($row[0]{'idinstructor'},$row[0]{'nombre'},$row[0]{'apellido'},$row[0]{'sexo'},$row[0]{'tipoTelefono'},$row[0]{'telefono'},$row[0]{'foto'},$row[0]{'comentario'});
    return $Objinstructor;
  }

  function createInstructor($nombre,$apellido,$sexo,$tipoTelefono,$telefono,$foto,$comentario) {    
    $insertrow = self::$db->insertRow("INSERT INTO wodhard.instructor (idinstructor,nombre,apellido,sexo,tipoTelefono,telefono,foto,comentario) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
                                      array(null, "{$nombre}", "{$apellido}", "{$sexo}", "{$tipoTelefono}", "{$telefono}", "{$foto}", "{$comentario}"));
  
  }  

  function readInstructor() {
    $rows = self::$db->getRows("SELECT * FROM instructor ");        
    $arrayInstructor= array();        
    foreach ($rows as $c){
      $aux = new instructor($c{'idinstructor'},$c{'nombre'},$c{'apellido'},$c{'sexo'},$c{'tipoTelefono'},$c{'telefono'},$c{'foto'},$c{'comentario'});
      array_push($arrayInstructor, $aux);
    }
    return $arrayInstructor;        
  }
  
  function updateInstructor($idinstructor,$nombre,$apellido,$sexo,$tipoTelefono,$telefono,$foto,$comentario) {    
    $insertrow = self::$db->updateRow("UPDATE wodhard.instructor SET instructor.nombre = ?, instructor.apellido = ?, instructor.sexo = ?, instructor.tipoTelefono = ?, instructor.telefono = ?, instructor.foto = ?, instructor.comentario = ?  WHERE instructor.idinstructor = ? ",
                                      array( "{$nombre}","{$apellido}","{$sexo}","{$tipoTelefono}","{$telefono}","{$foto}","{$comentario}",$idinstructor));
  }  

  function deleteInstructor($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM wodhard.instructor WHERE idinstructor= ?", array("{$id}"));
  }  



}
?>
