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


<?php
include_once("RutinaCollector.php");
include_once("ImagenCollector.php");
$RutinaCollectorObj = new RutinaCollector();


?>
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
	<link rel="stylesheet" href="../css/demo.css" type="text/css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/font-awesome/css/font-awesome.min.css">    
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/pace/pace-flash.css">
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/owl-carousel/owl.carousel.css">    
    <link rel="stylesheet" href="../css/settings.css" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://htmlstream.com/preview/unify-v1.6-production/One-Page/assets/css/one.style.css">
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
                    <li class="page-scroll home active">
                        <a href="#">Procesos</a>
		    </li>
			
		    <li class="page-scroll home active">
                        <a href="#">Contactenos</a>
		    </li>
			
		    
		    
		    
		    
		    
		    <li class="page-scroll home active">
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
       
	<div id="retorno">
	
			<br></br><br></br><br></br><br></br>
			
        <ul class="list-unstyled row portfolio-box-v1">
            <li class="col-sm-4">
                <img class="img-responsive" src="../image/gym1.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>Ingresar Nuevo Gimnasio</h3>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#gym">Ingresar</a>
                </div>
            </li>
            <li class="col-sm-4" align="center">
                <img class="img-responsive" src="../image/gym2.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>Ingresa Nueva Rutina</h3>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#Rutina">Ingresar</a>
                </div>
            </li>
            <li class="col-sm-4" align="center">
                <img class="img-responsive" src="../image/gym3.jpg" alt="">
                <div class="portfolio-box-v1-in">
                    <h3>Ingresa Nuevo Instructor</h3>
                    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#Instructor">Ingresar</a>
                </div>
            </li>
        </ul>
	</div>
		<br><br><br><br><br><br><br>
	<div id="gym" class="container content-lg" align="center">
       <div class="title-v1">
                <h2>GIMNASIOS</h2>
                <p>Encuentra el <strong>Gimnasio</strong> que prefieras segun el lugar de donde vivas. <br> 
                ENTRENA, INSISTE, PERSISTE Y <strong>RESISTE</strong>.</p>                
       </div>            
    
       <div class="row service-box-v1" align="center">
            <div class="col-md-4 col-sm-6">
                <div class="service-block service-block-default" align="center">
			    <center><img class="img-responsive" src="../image/perfil.jpg" alt=""></center>
				<br></br>
			     <input class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" type="file" id="foto" name="foto_fls" title="Sube tu foto" />                      
                </div>
            </div>
		<div class="col-md-4 col-sm-6">
           <div class="service-block service-block-default" align="center">
			   <div class="row">
                  <div >
				     <div align="center">
				<input class="button" type="button" value="Registra Nuevo Gimnasio" data-type="zoomin" />
				<?php include 'CRUD_INSTRUCTOR/frmGimnasio.php';?>	
				     </div>
                  </div>
               </div>                            
            </div>
        </div>
	   </div>
	    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#retorno">Menú</a>
	    
        </div>
	
		<br><br><br><br>
	<div id="Rutina" class="container content-lg" align="center">
            <div class="title-v1">
                <h2>RUTINAS</h2>
                <p>Encuentra el <strong>Gimnasio</strong> que prefieras segun el lugar de donde vivas. <br> 
                ENTRENA, INSISTE, PERSISTE Y <strong>RESISTE</strong>.</p>                
            </div>            
    
    <div class="row service-box-v1" align="center">
        <div class="col-md-4 col-sm-6">
           <div class="service-block service-block-default" align="center">
			<img class="img-responsive" src="../image/perfil.jpg" alt="">			
				<input class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" type="file" id="foto" name="foto_fls" title="Sube tu foto" />                        
          </div>
       </div>
	   <div class="col-md-4 col-sm-6">
           <div class="service-block service-block-default" align="center">
			   <div class="row">
                  <div >
				     <div align="center">
				<input class="button" type="button" value="Registra Nueva Rutina" data-type="zoomin" />
				<?php include 'CRUD_INSTRUCTOR/frmRutina.php';?>	
				     </div>
                  </div>
               </div>                            
            </div>
        </div>
	</div>
	<a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#retorno">Menú</a>
   </div>	

	<div id="Instructor" class="container content-lg" align="center">
       <div class="title-v1">
                <h2>INSTRUCTORES</h2>
                <p>Encuentra el <strong>Gimnasio</strong> que prefieras segun el lugar de donde vivas. <br> 
                ENTRENA, INSISTE, PERSISTE Y <strong>RESISTE</strong>.</p>                
       </div>            
    
       <div class="row service-box-v1" align="center" >
            <div class="col-md-4 col-sm-6">
                    <div class="service-block service-block-default" align="center">
					<form method="post" action="img.php" enctype="multipart/form-data"align="center">
						<!--<center><img class="img-responsive" src="../image/gym5.jpg" alt=""></center>-->
                        <h2 class="heading-md">FOTO DE INSTRUCTOR</h2>
						<input class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" type="file" name="imagen1" />
						</br>
						<h4 class="heading-md">Descripción</h4>
						<textarea cols="50" rows="3" name="texto"></textarea>
						</br>
						<input class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" type="submit" value="Sube tu Imagen"/>
						</br></br></br></br>
						<div>
					
							<?php
								include_once("ImagenCollector.php");
								$ImagenCollectorObj = new ImagenCollector();
								$id="1";
								if($id){						
										$Objimagen=$ImagenCollectorObj->showImagen($id);
										echo " <label><img src=".$Objimagen->getimagen()." width='100px' height='100px' ></label>";
										echo "";
										echo "<input type='text' value=".$Objimagen->gettexto()."/>";
								}
															
							?>				
						</div>
                    </form>                           
                    </div>
                </div>
	   <div class="col-md-4 col-sm-6">
           <div class="service-block service-block-default" align="center">
			   <div class="row">
                  <div >
				     <div align="center">
				<input class="button" type="button" value="Registra Nuevo Instructor" data-type="zoomin" />
				<?php include 'CRUD_INSTRUCTOR/frmInstructor.php';?>	
				     </div>
                  </div>
               </div>                            
            </div>
        </div>
	 </div>
	    <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#retorno">Menú</a>
        </div>

		





		
       
    </section>
    <!-- End Services Section -->
      <script type="text/javascript" src="../jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery-migrate-1.2.1.min.js"></script>    
    <script type="text/javascript" src="../jquery/bootstrap.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="../jquery/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
	<script type="text/javascript" src="../jquery/demo.js"></script>
	

</body>
</html>
