<?php

class Usuario
{
    private $idUsuario;
    private $admin;
    private $passadmin;
    private $user;
    private $passuser;
    private $correo;
    
     function __construct($idUsuario, $admin, $passadmin, $user, $passuser, $correo) {
       $this->idusuario = $idUsuario;
       $this->admin = $admin;
       $this->passadmin = $passadmin;
       $this->user = $user;
       $this->passuser = $passuser;
       $this->correo = $correo;
     }
    
     function setidUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getidUsuario(){
       return $this->idUsuario;
     } 
     function setadmin($admin){
       $this->admin = $admin;
     } 
     function getadmin(){
       return $this->admin;
     } 
     function setpassadmin($passadmin){
       $this->passadmin = $passadmin;
     } 
     function getpassadmin(){
       return $this->passadmin;
     } 
     function setuser($user){
       $this->user = $user;
     } 
     function getuser(){
       return $this->user;
     } 
     function setpassuser($passuser){
       $this->passuser = $passuser;
     } 
     function getpassuser(){
       return $this->passuser;
     } 
     function setcorreo($correo){
       $this->correo = $correo;
     } 
     function getcorreo(){
       return $this->correo;
     } 
      
}

?> 
