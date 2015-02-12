<?php

class Gimnasio
{
    private $idGimnasio;
    private $nombre;
    private $apellido;
    private $direccion;
    private $hora_apertura;
    private $hora_cierre;
    private $idInstructor;
    private $idRutina;
    private $idHorario;


    
     function __construct($idGimnasio, $nombre, $apellido, $direccion, $hora_apertura, $hora_cierre, 
      $idInstructor, $idRutina, $idHorario) {
       $this->idGimnasio = $idGimnasio;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->direccion = $direccion;
       $this->hora_apertura = $hora_apertura;
       $this->hora_cierre = $hora_cierre;
       $this->idInstructor = $idInstructor;
       $this->idRutina = $idRutina;
       $this->idHorario = $idHorario;
     }
    
     function setIdGimnasio($idGimnasio){
       $this->idGimnasio = $idGimnasio;
     } 
     function getIdGimnasio(){
       return $this->idGimnasio;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }

    function setApellido($apellido){
       $this->apellido = $apellido;
     } 
     function getApellido(){
       return $this->apellido;
     }

     function setDireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getDireccion(){
       return $this->direccion;
     }

     function setHora_Apertura($hora_apertura){
       $this->hora_apertura = $hora_apertura;
     } 
     function getHora_Apertura(){
       return $this->hora_apertura;
     } 

     function setHora_Cierre($hora_cierre){
       $this->hora_cierre = $hora_cierre;
     } 
     function getHora_Ciere(){
       return $this->hora_cierre;
     }

     function setIdInstructor($idInstructor){
       $this->idInstructor = $idInstructor;
     } 
     function getIdInstructor(){
       return $this->idInstructor;
     }

     function setIdRutina($idRutina){
       $this->idRutina = $idRutina;
     } 
     function getIdRutina(){
       return $this->idRutina;
     }

     function setIdHorario($idRutina){
       $this->idRutina = $idRutina;
     } 
     function getIdHorario(){
       return $this->idRutina;
     }
}

?> 