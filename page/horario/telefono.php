<?php

class Telefono
{
    private $idTelefono;
    private $numeroTelefono;
    
     function __construct($idTelefono, $numeroTelefono) {
       $this->idTelefono = $idTelefono;
       $this->numeroTelefono = $numeroTelefono;
     }
    
     function setIdTelefono($idTelefono){
       $this->idTelefono = $idTelefono;
     } 
     function getIdTelefono(){
       return $this->idTelefono;
     } 
     function setNumeroTelefono($numeroTelefono){
       $this->numeroTelefono = $numeroTelefono;
     } 
     function getNumeroTelefono(){
       return $this->numeroTelefono;
     } 
}

?> 