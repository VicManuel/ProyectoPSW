<?php
session_start();
?>



	<?php
		include_once("UsuarioCollector.php");
		$UsuarioCollectorObj = new UsuarioCollector();
		$Usuario=$_POST["usuario"];
		$contrasena=$_POST["contrasena"];
		$_SESSION['usuario']= $_POST['usuario'];
	?>	
	
	<?php
		
		
		foreach ($UsuarioCollectorObj->readUsuario() as $ObjUsuario)
		{
			
			$user=$ObjUsuario->getuser();
			$passuser=$ObjUsuario->getpassuser();			
			$admin=$ObjUsuario->getadmin();
			$passadmin=$ObjUsuario->getpassadmin();
						
			if(($user==$Usuario)&&($passuser==$contrasena)){
				
				echo" <script> alert('BIENVENIDO USUARIO');
				window.location.href='sectores.php';</script>";
				
				
			}
			else{
				if(($admin==$Usuario)&&($passadmin==$contrasena)){
				
					echo" <script> alert('BIENVENIDO ADMINISTRADOR');
				window.location.href='Mantenimientos.php';</script>";
				
				}else
				{	
				//echo" <script>window.location.href='Login-Inicio.php';</script>";
					//header('location:Login-Inicio.php');
				}
			}
			
		}
		
	?>
		
		
	




