<?php

  $last_visit = isset($_COOKIE['last_visit']) ? $_COOKIE['last_visit'] : "Primera vez";
  $current_visit = date("C");
  setcookie("last_visit", $current_visit, (time()+60*60*24*30));
  session_start();
  $user = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null ;

if($user == ''){
	header('Location: Login-Inicio.php?error=2');
}

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
    <link rel="shortcut icon" href="../image/icono.ico"/>
    <!-- CSS Global Compulsory -->
     <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/css/one.style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/font-awesome/css/font-awesome.min.css">    
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/pace/pace-flash.css">
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/owl-carousel/owl.carousel.css">    
    <link rel="stylesheet" href="../css/settings.css" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->
    <link rel="stylesheet" type="text/css" href="../css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" href="../css/principal.css" type="text/css">

    <!-- Style Switcher -->
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/css/plugins/style-switcher.css">

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="../css/one.dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/css/custom.css">
<style type="text/css"></style></head>

<!-- 
The #page-top ID is part of the scrolling feature.
The data-spy and data-target are part of the built-in Bootstrap scrollspy function.
-->
<body id="body" data-spy="scroll" class="demo-lightbox-gallery dark  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <!--=== Style Switcher ===-->    
    <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
    <div class="style-switcher animated fadeInRight">
        <div class="style-swticher-header">
            <div class="style-switcher-heading">Style Switcher</div>            
            <div class="theme-close"><i class="icon-close"></i></div>
        </div>

        
    </div>
    <!--=== End Style Switcher ===--> 

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
                   
                    <li class="page-scroll">
                        <a href="nosotros.php">Nosotros</a>
                    </li>
					<li class="page-scroll">
                        <a href="#">Sectores</a>
                    </li>
					 <li class="page-scroll">
                        <a href="pesoIdeal.php">Peso Ideal</a>
                    </li>
                    <li class="page-scroll">
                        <a href="contactenos.php">Contactenos</a>
                    </li>                    
                
		     <li class="page-scroll">
                       <?php
				
				if (isset($_SESSION['usuario'])){
				  echo "<p><h4> usuario:(" . $_SESSION['usuario'] . ") [<a href='../logout.php'>Salir</a>]";
				 }
				  
			?>	 
                    </li> 	
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--=== End Header ===-->
	
   <section id="services">
	   <div>
			<br></br><br></br><br></br><br></br>
        <ul class="list-unstyled row portfolio-box-v1">
            <li class="col-sm-4">
                <img class="img-responsive" src="../image/gym1.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>NORTE</h3>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#gym">Ver</a>
                </div>
            </li>
            <li class="col-sm-4">
                <img class="img-responsive" src="../image/gym2.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>CENTRO</h3>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#gym">Ver</a>
                </div>
            </li>
            <li class="col-sm-4">
                <img class="img-responsive" src="../image/gym3.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>SUR</h3>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#gym">Ver</a>
                </div>
            </li>
        </ul>
		</div>
	</section>
	
	       <div id="gym" class="container content-lg">
            <div class="title-v1">
                <h2>GIMNASIOS</h2>
                <p>Encuentra el <strong>Gimnasio</strong> que prefieras segun el lugar de donde vivas. <br> 
                ENTRENA, INSISTE, PERSISTE Y <strong>RESISTE</strong>.</p>                
            </div>            
    
            <div class="row service-box-v1">
                <div class="col-md-4 col-sm-6">
                    <div class="service-block service-block-default">
					    <img class="img-responsive" src="../image/gym5.jpg" alt="">
                        <h2 class="heading-md">CROSSFIT GUAYAQUIL - GIMNASIO CORPUS</h2>
						<p>Dirección: Cdla. La Garzota II Mz. 44 Villa 33</p>
                        <ul class="list-unstyled">
                            <li><a href="#rutinas">Rutinas</a></li>
                            <li><a href="#horarios">Horarios</a></li>
                            <li>Entrenadores</li>
                        </ul>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-block service-block-default">
                        <img class="img-responsive" src="../image/gym4.jpg" alt="">
                        <h2 class="heading-sm">TAURUS FITNESS COMPANY</h2>
                        <p>Dirección:(Frente al Monumento del Cenepa) Cdla. Comegua Mz B Solar 13</p>
                        <ul class="list-unstyled">
                            <li><a href="#rutinas">Rutinas</a></li>
                            <li><a href="#horarios">Horarios</a></li>
                            <li>Entrenadores</li>
                        </ul>                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="service-block service-block-default">
                        <img class="img-responsive" src="../image/gym6.jpg" alt="">					
                        <h2 class="heading-sm">HOMETOWN GYM & HOMETOWN CIRCUITS</h2>
                        <p>Dirección: Centro Comercial Piazza Ceibos Locales B11 - B14 (HTG) / B1 - B3 (HTC)</p>
                        <ul class="list-unstyled">
                            <li><a href="#rutinas">Rutinas</a></li>
                            <li><a href="#horarios">Horarios</a></li>
                            <li>Entrenadores</li>
                        </ul>                        
                    </div>
                </div>
		<div class="col-md-4 col-sm-12">
                    <div class="service-block service-block-default">
                        <img class="img-responsive" src="../image/gym7.jpeg" alt="">
                        <h2 class="heading-sm">GOLD'S GYM</h2>
                        <p>Dirección: Estamos ubicados en la Av. Francisco de Orellana, en el World Trade Center, planta baja.</p>
                        <ul class="list-unstyled">
                            <li><a href="#rutinas">Rutinas</a></li>
                            <li><a href="#horarios">Horarios</a></li>
                            <li>Entrenadores</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	
		
	<div id="horarios" class="container content-lg">
		<div class="title-v1">
        	        <h2>HORARIOS</h2>
                	<p>Nuestros <strong>Horarios</strong> son los siguientes:</p>
		</div>

		<div class="row service-box-v1">
			<div class="col-md-4 col-sm-12">
	                    <div class="service-block service-block-default">
        	                <img class="img-responsive" src="../image/gym7.jpeg" alt="">
                	        <h2 class="heading-sm">GOLD'S GYM</h2>
				<ul class="list-unstyled">
	                		<li><strong>Lunes a Jueves :</strong> 05H30 - 23H00</li>
					<li> <strong>Viernes :</strong> 05H30 - 22H00</li> 
					<li><strong>Sábado :</strong> 09H00 - 17H00</li>
				</ul>
			    </div>
			</div>
			<div class="col-md-4 col-sm-6">
                            <div class="service-block service-block-default">
                                <img class="img-responsive" src="../image/gym5.jpg" alt="">
                                <h2 class="heading-sm">CROSSFIT GUAYAQUIL - GIMNASIO CORPUS</h2>
                                <ul class="list-unstyled">
                                        <li><strong>Lunes a Viernes :</strong> 06H00 - 22H00</li>
                                        <li><strong>Sábado :</strong> 09H00 - 14H00</li>
                                </ul>
                            </div>
                        </div>
			<div class="col-md-4 col-sm-6">
                            <div class="service-block service-block-default">
                                <img class="img-responsive" src="../image/gym4.jpg" alt="">
                                <h2 class="heading-sm">TAURUS FITNESS COMPANY</h2>
                                <ul class="list-unstyled">
                                        <li><strong>Lunes a Viernes :</strong> 05H30 - 22H30</li>
                                        <li><strong>Sábado :</strong> 07H00 - 14H00</li>
                                </ul>
                             </div>
                        </div>
			<div class="col-md-4 col-sm-12">
                            <div class="service-block service-block-default">
                                <img class="img-responsive" src="../image/gym6.jpg" alt=""><br>
                                <h2 class="heading-sm">HOMETOWN GYM</h2>
                                <ul class="list-unstyled">
                                        <li><strong>Lunes a Jueves :</strong> 06H00 - 24H00</li>
                                        <li><strong>Viernes :</strong> 06H00 - 22H00</li>
					<li><strong>Sábados y Domingos :</strong> 07H00 - 15H00</li>
                                </ul><br>
				<h2 class="heading-sm">HOMETOWN CIRCUIT</h2>
                                <ul class="list-unstyled">
                                        <li><strong>Lunes a Viernes :</strong><br>
					1era Sesión :  06H00 - 12H00<br>
					2da Sesión  :  17H00 - 22H00</li>
                                        <li><strong>Sábados :</strong> 07H00 - 15H00</li>
                                </ul>
                            </div>
                        </div>
		</div>
	</div>	


	<div id="rutinas" class="container content-lg">
                <div class="title-v1">
                        <h2>RUTINAS</h2>
                        <p>Nuestros <strong>rutinas</strong> son los siguientes:</p>
                </div>

                <div class="row service-box-v1">
                        <div class="col-md-4 col-sm-12">
                            <div class="service-block service-block-default">
                                <img class="img-responsive" src="../image/gym7.jpeg" alt="">
                                <h2 class="heading-sm">GOLD'S GYM</h2>
                                <ul class="list-unstyled">
                                        <li><strong><a href="../image/goldsgym1.png">Rutina 1</a></strong></li>
					<li><strong><a href="../image/goldsgym2.png">Rutina 2</a></strong></li>
                                </ul>
                            </div>			</div>
			<div class="col-md-4 col-sm-6">
                            <div class="service-block service-block-default">
                                <img class="img-responsive" src="../image/gym5.jpg" alt="">
                                <h2 class="heading-sm">CROSSFIT GUAYAQUIL - GIMNASIO CORPUS</h2>
                                <ul class="list-unstyled">
                                        <li><strong>Lunes a Viernes :</strong> 06H00 - 22H00</li>
                                        <li><strong>Sábado :</strong> 09H00 - 14H00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-block service-block-default">
                                <img class="img-responsive" src="../image/gym4.jpg" alt="">
                                <h2 class="heading-sm">TAURUS FITNESS COMPANY</h2>
                                <ul class="list-unstyled">
                                       <li><strong><a href="../image/taurusRutinas.png">Rutina</a></strong></li>
                                </ul>
                             </div>
                        </div>
			<div class="col-md-4 col-sm-12">
                            <div class="service-block service-block-default">
                                <img class="img-responsive" src="../image/gym6.jpg" alt=""><br>
                                <h2 class="heading-sm">HOMETOWN GYM</h2>
                                <ul class="list-unstyled">
                                        <li><strong>Lunes a Jueves :</strong> 06H00 - 24H00</li>
                                        <li><strong>Viernes :</strong> 06H00 - 22H00</li>
                                        <li><strong>Sábados y Domingos :</strong> 07H00 - 15H00</li>
                                </ul><br>
                                <h2 class="heading-sm">HOMETOWN CIRCUIT</h2>
                                <ul class="list-unstyled">
                                        <li><strong>Lunes a Viernes :</strong><br>
                                        1era Sesión :  06H00 - 12H00<br>
                                        2da Sesión  :  17H00 - 22H00</li>
                                        <li><strong>Sábados :</strong> 07H00 - 15H00</li>
                                </ul>
                            </div>
                        </div>
                </div>
        </div>

		





		
       
    </section>
    <!-- End Services Section -->
      <script type="text/javascript" src="../jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery-migrate-1.2.1.min.js"></script>    
    <script type="text/javascript" src="../jquery/bootstrap.min.js"></script>


</body>
</html>
