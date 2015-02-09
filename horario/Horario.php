<?php

class Horario
{
    private $idHorario;
    private $horarioInicio;
    private $horarioFin;

     function __construct($idHorario, $horarioInicio, $horarioFin) {
       $this->idHorario = $idHorario;
       $this->horarioInicio = $horarioInicio;
       $this->horarioFin = $horarioFin;
     }
    
     function setIdHorario($idHorario){
       $this->idHorario = $idHorario;
     } 
     function getIdHorario(){
       return $this->idHorario;
     } 
     function setHorarioInicio($horarioInicio){
       $this->horarioInicio = $horarioInicio;
     } 
     function getHorarioInicio(){
       return $this->horarioInicio;
     } 
     function setHorarioFin($horarioFin){
       $this->horarioFin = $horarioFin;
     }
     function getHorarioFin(){
       return $this->horarioFin;
     }
}

?> 
