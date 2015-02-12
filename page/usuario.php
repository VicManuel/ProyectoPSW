<?php

class Usuario
{
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $edad;
	private $idTelefono;
    

    
     function __construct($idUsuario, $nombre, $apellido, $edad, $idTelefono) {
       $this->idUsuario = $idUsuario;
	   $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
	   $this->idTelefono = $idTelefono;
     }
	 
	 function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
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
       $this->edad = $edad;
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
	 
}

?> 