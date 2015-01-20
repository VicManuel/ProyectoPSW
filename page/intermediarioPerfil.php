<?php

include_once("perfilControlador.php");
include_once("perfilClase.php");


$PerfilControladorObj = new PerfilControlador();
$accion = $_GET['accion'];

if ($accion==1){
    //creacion de nuevo usuario
   $usuario = $UsuarioControladorObj->mostrarUsuarioJson();
    echo $usuario;
    
}
if ($accion==2){
    
    $datos = json_encode($_POST);
    $datosF = json_decode($datos, true);
    
    $PerfilControladorObj->validarSession($datosF['user'], $datosF['password']);
}

if ($accion == 3){
	$nombre = $_POST['nombre'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$imagen = $_POST['imagen'];
        
        $validarCorreo = $UsuarioControladorObj->validaCorreo($email);
        
        //el correo no está en la base, se puede guardar
        if ($validarCorreo == true) {
           $usuario = $UsuarioControladorObj->crearUsuario($nombre, $username, $email, $password, $imagen); 
           echo "Usuario guardado con éxito";
        }else{
            echo "Email ya existe";
    }
}
if ($accion == 4){
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$imagen = $_POST['imagen'];

	$usuario = $UsuarioControladorObj->actualizarUsuario($id, $nombre, $username, $email, $password, $imagen);
	echo "Usuario actualizado con éxito";
}
if ($accion == 5) {
	$id = $_POST['id'];
	$usuario = $UsuarioControladorObj->eliminarUsuario($id);
	echo "Usuario eliminado con éxito";
}

if ($accion == 6){
	$nombre = $_POST['nombre'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
        
        $validarCorreo = $UsuarioControladorObj->validaCorreo($email);
        
        //el correo no está en la base, se puede guardar
        if ($validarCorreo == true) {
           $usuario = $UsuarioControladorObj->crearUsuario1($nombre, $username, $email, $password); 
           echo "Usuario guardado con éxito";
        }else{
            echo "Email ya existe";
    }
}



?>

