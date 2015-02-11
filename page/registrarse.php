<?php

class Registrarse
{
    private $idUsuario;
    private $correo;
    private $contraseña;
    private $confirmarContraseña;
    
     function __construct($idUsuario, $correo, $contraseña, $confirmarContraseña) {
       $this->idUsuario = $idUsuario;
       $this->correo = $correo;
       $this->contraseña = $contraseña;
       $this->confirmarContraseña = $confirmarContraseña;
     }
    
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 
     function setCorreo($correo){
       $this->correo = $correo;
     } 
     function getCorreo(){
       return $this->correo;
     } 
     function setContrasenia($contraseña){
       $this->contraseña = $contraseña;
     } 
     function getContrasenia(){
       return $this->contraseña;
     } 
     function setConformarContrasenia($confirmarContraseña){
       $this->confirmarContraseña = $confirmarContraseña;
     } 
     function getConformarContrasenia(){
       return $this->confirmarContraseña;
     } 
}

?> 
