<?php

class Imagen
{
    private $idimagenes;
    private $imagen;
    private $texto;
    
    
     function __construct($idimagenes, $imagen, $texto) {
       $this->idimagenes = $idimagenes;
       $this->imagen = $imagen;
       $this->texto = $texto;       
     }
    
     function setidimagenes($idimagenes){
       $this->idimagenes = $idimagenes;
     } 
     function getidimagenes(){
       return $this->idimagenes;
     } 
     function setimagen($imagen){
       $this->imagen = $imagen;
     } 
     function getimagen(){
       return $this->imagen;
     } 
     function settexto($texto){
       $this->texto = $texto;
     } 
     function gettexto(){
       return $this->texto;
     }      
}

?> 
