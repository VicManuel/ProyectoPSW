<?php
$err = isset($_GET['error']) ? $_GET['error'] : null ;
  $last_visit = isset($_COOKIE['last_visit']) ? $_COOKIE['last_visit'] : "Primera vez";
  $current_visit = date("C");
  setcookie("last_visit", $current_visit, (time()+60*60*24*30));
  session_start();
?>

<!DOCTYPE html>
<!-- saved from url=(0089)http://htmlstream.com/preview/unify-v1.6-production/One-Page/dark-page-example.html#intro -->
<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>WODHARD</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="image/icono.ico"/>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/one.style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">    
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/pace/pace-flash.css">
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/owl-carousel/owl.carousel.css">    
    <link rel="stylesheet" href="css/settings.css" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->
    <link rel="stylesheet" type="text/css" href="..css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="..css/main.css">
	<link rel="stylesheet" href="..css/principal.css" type="text/css">

    <!-- Style Switcher -->
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/css/plugins/style-switcher.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="../css/one.dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="../css/custom.css">
<style type="text/css"></style></head>

<!-- 
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" class="demo-lightbox-gallery dark  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
   
    <!--=== Header ===-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <span>W</span>od<span>H</span>ard
                    <!-- <img src="assets/img/logo1.png" alt="Logo"> -->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="page-scroll home active">
                        <a href="../index.php">Inicio</a>
                    </li>
					<li class="page-scroll home active">
                        
                    </li>
					
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--=== End Header ===-->
   <!--=== Content Part ===-->
   <section>
   <br></br><br></br>
    <div class="container content">		
    	<div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
	      
	      
	
		
		
			
			<form class="reg-page" action="CRUD_USUARIO.php" method="post">
			  <?php
				if($err==1){
				  echo "Usuario o Contraseña Erróneos <br />";
				}
				if($err==2){
				 	echo" <script> alert('DEBE INICIAR SESION');</script>";
				}
			  ?>	
							<div class="reg-header">            
								<h2>Ingrese a su Cuenta</h2>
							</div>

							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" placeholder="Usuario" class="form-control" name="usuario">
							</div>                    
							<div class="input-group margin-bottom-20">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="Password" placeholder="Contrasena" class="form-control" name="contrasena">
							</div>                    

							<div class="row">
								<div class="col-md-6">
									<input class="btn-u pull-right" type="submit" name="iniciar" value="Iniciar Session"/>                        
								</div>
							</div>
						</form> 
			
		    
	
                
			
						
					
            </div>
        </div><!--/row-->
    </div>
	</section>
	<!--/container-->		
    <!--=== End Content Part ===-->
             

    
    <script type="text/javascript" src="../jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery-migrate-1.2.1.min.js"></script>    
    <script type="text/javascript" src="../jquery/bootstrap.min.js"></script>


</body>
</html>


