<?php

class Rutina
{
    private $idrutina;
    private $descripcion;
    private $dia;
    private $estado;
    private $imagenRutina;
    
     function __construct($idrutina, $descripcion, $dia, $estado,$imagenRutina) {
       $this->idrutina = $idrutina;
       $this->descripcion = $descripcion;
       $this->dia = $dia;
       $this->estado = $estado;
        $this->imagenRutina = $imagenRutina;
     }
    
     function setidrutina($idrutina){
       $this->idrutina = $idrutina;
     } 
     function getidrutina(){
       return $this->idrutina;
     } 
     function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getdescripcion(){
       return $this->descripcion;
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
     function setimagenRutina($imagenRutina){
       $this->imagenRutina = $imagenRutina;
     } 
     function getimagenRutina(){
       return $this->imagenRutina;
     } 
}

?> 
