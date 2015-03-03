<?php

class telefono
{
    private $idtelefono;
    private $telefono;
    private $tipoTelefono;
    private $idgimnasio;
   
    
    
     function __construct($idtelefono, $telefono, $tipoTelefono,$idgimnasio) {
       $this->idtelefono = $idtelefono;
       $this->telefono = $telefono;
       $this->tipoTelefono = $tipoTelefono;
       $this->idgimnasio = $idgimnasio;
       
     
     }
    
     function setidtelefono($idtelefono){
       $this->idtelefono = $idtelefono;
     } 
     function getidtelefono(){
       return $this->idtelefono;
     } 
     function settelefono($telefono){
       $this->telefono = $telefono;
     } 
     function gettelefono(){
       return $this->telefono;
     } 
     function settipoTelefono($tipoTelefono){
       $this->tipoTelefono = $tipoTelefono;
     } 
     function gettipoTelefono(){
       return $this->tipoTelefono;
     } 
     
     function setidgimnasio($idgimnasio){
       $this->idgimnasio = $idgimnasio;
     } 
     function getidgimnasio(){
       return $this->idgimnasio;
     }
     
}

?> 
