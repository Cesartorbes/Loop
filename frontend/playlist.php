<!DOCTYPE html>
<html>
<head>
    <?php 
	include_once('includes/head.php');
	include_once('includes/musica.php')?>
</head>
 
<body>
    <!-- Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
   
    <!-- Page Content -->
    <div class="container-fluid playlistsbg">
        <div class="row tm-main-row">
 
		<?php include_once('includes/sidebar.php')?>
            
 
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">
            <section id="tm-section-2" class="tm-section tm-section-carousel">
                        <div>
                            <header class="mb-4"><h2 class="tm-text-shadow">Playlists</h2></header>                
                            <div class="tm-img-container">
                                <div class="tm-img-slider">
                                    <a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-01.png" alt="Image" class="img-fluid"></a>
                                    <a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-02-tn.jpg" alt="Image" class="img-fluid"></a>
                                    <a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-03-tn.jpg" alt="Image" class="img-fluid"></a>
                                    <a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-04-tn.jpg" alt="Image" class="img-fluid"></a>
                                    <a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-05-tn.jpg" alt="Image" class="img-fluid"></a>
                                    <a class="tm-slider-img"><img height="480" width="480" src="img/gallery-img-06-tn.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>                                    
                        </div>                          
                    </section>
                    <?php layoutmusica(); ?>            
                </div>  <!-- .tm-content -->
            </div>  <!-- row -->            
        </div>
 
		<?php 
	
	include_once('includes/scripts.php')?>
        
    </body>
</html>