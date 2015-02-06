<?php

class Instructor
{
    private $idInstructor;
    private $nombre;
    private $apellido;
    private $edad;
    private $idTelefono;
    private $comentario;
    
     function __construct($idInstructor, $nombre, $apellido, $edad, $idTelefono, $comentario) {
       $this->idInstructor = $idInstructor;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
       $this->idTelefono = $idTelefono;
       $this->comentario = $comentario;

     }
    
     function setIdInstrcutor($idInstructor){
       $this->idInstructor = $idInstructor;
     } 
     function getIdInstructor(){
       return $this->idInstructor;
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
       
     function setEdad($edad){
       $this->idUsuario = $edad;
     } 
     function getEdad(){
       return $this->edad;
     } 
     function setIdTelefono($idTelefono){
       $this->idTelefono = $idTelefono;
     } 
     function getIdTelefono(){
       return $this->idTelefono;
     }
     function setIdUsuario($comentario){
       $this->comentario = $comentario;
     } 
     function getIdUsuario(){
       return $this->comentario;
     }   
}

?> 