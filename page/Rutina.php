<?php

class Rutina
{
    private $idrutina;
    private $descripci�n;
    private $dia;
    private $estado;
    
     function __construct($idrutina, $descripci�n, $dia, $estado) {
       $this->idrutina = $idrutina;
       $this->descripci�n = $descripci�n;
       $this->dia = $dia;
       $this->estado = $estado;
     }
    
     function setidrutina($idrutina){
       $this->idrutina = $idrutina;
     } 
     function getidrutina(){
       return $this->idrutina;
     } 
     function setdescripci�n($descripci�n){
       $this->descripci�n = $descripci�n;
     } 
     function getdescripci�n(){
       return $this->descripci�n;
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
