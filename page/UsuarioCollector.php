<?php

include_once('usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuario($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}")); 
    $ObjUsuario = new usuario($row[0]{'idusuario'},$row[0]{'admin'},$row[0]{'passadmin'},$row[0]{'user'},$row[0]{'passuser'},$row[0]{'correo'});
    return $ObjUsuario;
  }

  function createUsuario($admin,$passadmin,$user,$passuser,$correo) {    
    $insertrow = self::$db->insertRow("INSERT INTO wodhard.usuario (idusuario, admin, passadmin, user, passuser, correo) VALUES (?, ?, ?, ?, ?)", array(null, "{$admin}", "{$passadmin}", "{$user}", "{$passuser}", "{$correo}"));
  
  }  

  function readUsuario() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new usuario($c{'idusuario'},$c{'admin'},$c{'passadmin'},$c{'user'},$c{'passuser'},$c{'correo'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }
  
  function updateUsuario($idusuario,$admin,$passadmin,$user,$passuser,$correo) {    
    $insertrow = self::$db->updateRow("UPDATE wodhard.usuario SET usuario.admin = ?, usuario.passadmin = ?, usuario.user = ?, usuario.passuser = ?, usuario.correo = ?  WHERE usuario.idusuario = ? ", array( "{$admin}","{$passadmin}","{$user}","{$passuser}","{$correo}",$idusuario));
  }  

  function deleteUsuario($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM wodhard.usuario WHERE idusuario= ?", array("{$id}"));
  }  



}
?>
