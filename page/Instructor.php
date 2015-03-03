<?php

class Instructor
{
    private $codigo;
    private $nombre;
    private $apellido;
    private $sexo;
      private $telefono;
    private $tipoTelefono;
    private $foto;
   
    private $comentario;
    
     function __construct($codigo, $nombre, $apellido,$sexo,$foto,$telefono,$tipoTelefono,$comentario) {
       $this->codigo = $codigo;
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->sexo = $sexo;
        $this->telefono = $telefono;
       $this->tipoTelefono = $tipoTelefono;
       $this->foto = $foto;    
     $this->comentario = $comentario;
    
     function setcodigo($codigo){
       $this->codigo = $codigo;
     } 
     function getcodigo(){
       return $this->codigo;
     } 
     function setnombre($nombre){
       $this->nombre = $nombre;
     } 
     function getnombre(){
       return $this->nombre;
     } 
     function setapellido($apellido){
       $this->apellido = $apellido;
     } 
     function getapellido(){
       return $this->apellido;
     } 
     
     function setsexo($sexo){
       $this->sexo = $sexo;
     } 
     function getsexo(){
       return $this->sexo;
     }
     function setfoto($foto){
       $this->foto = $foto;
     } 
     function getfoto(){
       return $this->foto;
     }
    
     function setcomentario($comentario){
       $this->comentario = $comentario;
     } 
     function getcomentario(){
       return $this->comentario;
     }
     
     function settelefono($telefono){
       $this->telefono = $telefono;
     } 
     function gettelefono(){
       return $this->telefono;
     } 
     function settipoTelefono($tipoTelefono){
       $this->tipoTelefono = $tipoTelefono;
     } 
     function gettipoTelefono(){
       return $this->tipoTelefono;
     } 
     
}
}
?> 
