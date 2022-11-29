<?php
include_once('includes/modal.php');
include_once('..\backend\conecta.php');
?>
<!DOCTYPE html>
<html>
<head>
    <?php 
	include_once('includes/head.php');
	include_once('includes/musica.php')?>
    <script>
        var renderPage = true;
 
    if(navigator.userAgent.indexOf('MSIE')!==-1
        || navigator.appVersion.indexOf('Trident/') > 0){
        /* Microsoft Internet Explorer detected in. */
        alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
        renderPage = false;
    }
    </script>
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
                                       
                <footer class="footer-link">
                    <p class="tm-copyright-text">Copyright &copy; 2022 Loop Co. Ltd.</p>
                </footer>
            </div>  <!-- row -->            
        </div>
        <div id="preload-01"></div>
        <div id="preload-02"></div>
        <div id="preload-03"></div>
        <div id="preload-04"></div>
 
		<?php 
	
	include_once('includes/scripts.php')?>
        
    </body>
</html>