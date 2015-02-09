<?php

class Rutina
{
    private $idrutina;
    private $descripción;
    private $dia;
    private $estado;
    
     function __construct($idrutina, $descripción, $dia, $estado) {
       $this->idrutina = $idrutina;
       $this->descripción = $descripción;
       $this->dia = $dia;
       $this->estado = $estado;
     }
    
     function setidrutina($idrutina){
       $this->idrutina = $idrutina;
     } 
     function getidrutina(){
       return $this->idrutina;
     } 
     function setdescripción($descripción){
       $this->descripción = $descripción;
     } 
     function getdescripción(){
       return $this->descripción;
     } 
     function setdia($dia){
       $this->dia = $dia;
     } 
     function getdia(){
       return $this->dia;
     } 
     function setestado($estado){
       $this->estado = $estado;
     } 
     function getestado(){
       return $this->estado;
     } 
}

?> 
