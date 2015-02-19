<?php

class RutinaPorHorario
{
    private $idRutinaPorHorario;
    private $idRutina;
    private $idHorario;

     function __construct($idRutinaPorHorario, $idRutina, $idHorario) {
       $this->idRutinaPorHorario = $idRutinaPorHorario;
       $this->idRutina = $idRutina;
       $this->idHorario = $idHorario;
     }

     function setIdRutinaPorHorario($idRutinaPorHorario){
       $this->idRutinaPorHorario = $idRutinaPorHorario;
     }
     function getIdRutinaPorHorario(){
       return $this->idRutinaPorHorario;
     }
     function setIdRutina($idRutina){
       $this->idRutina = $idRutina;
     } 
     function getIdRutina(){
       return $this->idRutina;
     } 
     function setIdHorario($idHorario){
       $this->idHorario = $idHorario;
     } 
     function getIdHorario(){
       return $this->idHorario;
     } 
}

?>
