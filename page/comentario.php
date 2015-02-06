<?php

class Comentario
{
    private $idCodigo;
    private $descripcion;
    
     function __construct($idComentario, $descripcion) {
       $this->idComentario = $idComentario;
       $this->descripcion = $descripcion;
     }
    
     function setIdComentario($idComentario){
       $this->idComentario = $idComentario;
     } 
     function getIdComentario(){
       return $this->idUsuario;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
}

?> 