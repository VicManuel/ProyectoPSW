<?php

class Gimnasio
{
    private $idgimnasio;
    private $nombre;
    private $direccion;
    private $descripcion;
    private $fechaApertura;
    private $imagenGym;
    
     function __construct($idgimnasio, $nombre, $direccion,$descripcion,$fechaApertura,$imagenGym) {
       $this->idgimnasio = $idgimnasio;
       $this->nombre = $nombre;
       $this->direccion = $direccion;
       $this->descripcion = $descripcion;
       $this->fechaApertura = $fechaApertura;
       $this->imagenGym = $imagenGym;
     }
    
     function setidgimnasio($idgimnasio){
       $this->idgimnasio = $idgimnasio;
     } 
     function getidgimnasio(){
       return $this->idgimnasio;
     } 
     function setnombre($nombre){
       $this->nombre = $nombre;
     } 
     function getnombre(){
       return $this->nombre;
     } 
     function setdireccion($direccion){
       $this->direccion = $direccion;
     } 
     function getdireccion(){
       return $this->direccion;
     } 
     
     function setdescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getdescripcion(){
       return $this->descripcion;
     }
     function setfechaApertura($fechaApertura){
       $this->fechaApertura = $fechaApertura;
     } 
     function getfechaApertura(){
       return $this->fechaApertura;
     }
     function setimagenGym($imagenGym){
       $this->imagenGym = $imagenGym;
     } 
     function getimagenGym(){
       return $this->imagenGym;
     } 
}

?> 
