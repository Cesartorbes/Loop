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
 
<body class="pesquisarbg">
    <!-- Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
   
    <!-- Page Content -->
    <div class="container-fluid tm-main">
        <div class="row tm-main-row">
 
		<?php include_once('includes/sidebar.php')?>
            
 
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">
            <section id="tm-section-3" class="tm-section">                      
                        <div class="row mb-4">
                            <header class="col-xl-12"><h2 class="tm-text-shadow">Pesquisa</h2></header>    
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                                <div class="media tm-bg-transparent-black tm-border-white">
                                    <i class="fab fa-apple tm-icon-circled tm-icon-media"></i>
                                    <div class="media-body">
                                        <h3>HTML Templates</h3>
                                        <p>We provide a variety of templates for you at no cost. Please spread a word about <a href="https://plus.google.com/+tooplate" target="_parent">Tooplate</a> website. Thank you.</p>  
                                    </div>
                                </div>
                            </div>  
                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                                <div class="media tm-bg-transparent-black tm-border-white">
                                    <i class="fas fa-map-pin mr-4 tm-icon-circled tm-icon-media"></i>  
                                    <div class="media-body">
                                        <h3>Free Images</h3>
                                        <p>Photos by <a href="https://unsplash.com" target="_blank">Unsplash.com</a> website, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                                <div class="media tm-bg-transparent-black tm-border-white">
                                    <i class="fab fa-fly mr-4 tm-icon-circled tm-icon-media"></i>
                                    <div class="media-body">
                                        <h3>Phasellus eleifend</h3>
                                        <p>Phasellus feugiat scelerisque sapien, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>      
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
                                <div class="media tm-bg-transparent-black tm-border-white">
                                    <i class="fab fa-linode mr-4 tm-icon-circled tm-icon-media"></i>
                                    <div class="media-body">
                                        <h3>Phasellus eleifend</h3>
                                        <p>Phasellus feugiat scelerisque sapien, ac ornare arcu finibus sed. Aenean ultrices nisi sit amet facilisis viverra.</p>  
                                    </div>
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