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
    <div class="container-fluid tm-main">
        <div class="row tm-main-row">
 
		<?php include_once('includes/sidebar.php')?>
            
 
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">
            <section id="tm-section-3" class="tm-section">                      
                        <div class="row mb-4">
                            <header class="col-xl-12"><h2 class="tm-text-shadow">Pesquisa</h2></header>    
                        </div>
                        <div class="row">
                                             
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