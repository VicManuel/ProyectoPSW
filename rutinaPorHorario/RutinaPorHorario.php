<?php

class RutinaPorHorario
{
    private $idRutinaPorHorario;
    private $nombre;
    
     function __construct($idDemo, $nombre) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
     }
    
     function setIdDemo($idDemo){
       $this->idDemo = $idDemo;
     } 
     function getIdDemo(){
       return $this->idDemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
}

?> 
