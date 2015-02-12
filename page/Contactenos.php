<?php

class Contactenos
{
    private $nombre;
    private $email;
    private $mensaje;
    

    
     function __construct($nombre, $email, $mensaje) {
       $this->nombre = $nombre;
       $this->email = $email;
       $this->mensaje = $mensaje;
     }
    
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
	 
	 function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     } 
	 
	 function setMensaje($mensaje){
       $this->mensaje = $mensaje;
     } 
     function getMensaje(){
       return $this->mensaje;
     } 
	 
}

?> 