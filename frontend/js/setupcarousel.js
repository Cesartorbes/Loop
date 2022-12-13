var sidebarVisible = false;
var currentPageID = "#tm-section-1";

// Setup Carousel
function setupCarousel() {

		var slider = $('.tm-img-slider');
		var windowWidth = $(window).width();

		if (slider.hasClass('slick-initialized')) {
			slider.slick('destroy');
		}

		if(windowWidth < 640) {
			slider.slick({
				  dots: true,
				  infinite: false,
				  slidesToShow: 1,
				  slidesToScroll: 1
			  });
		}
		else if(windowWidth < 992) {
			slider.slick({
				  dots: true,
				  infinite: false,
				  slidesToShow: 2,
				  slidesToScroll: 1
			  });
		}
		else {
			// Slick carousel
			  slider.slick({
				  dots: true,
				  infinite: false,
				  slidesToShow: 3,
				  slidesToScroll: 2
			  });
		}

		// Init Magnific Popup
		$('.tm-img-slider').magnificPopup({
		  delegate: 'a', // child items selector, by clicking on it popup will open
		  type: 'image',
		  gallery: {enabled:true}
		  // other options
		});
	  }
  

  // Setup Nav
  function setupNav() {
	  // Add Event Listener to each Nav item
	 $(".tm-main-nav a").click(function(e){
		
		
		setupCarousel();
		setupFooter();

		// Hide the nav on mobile
		$("#tmSideBar").removeClass("show");
	});	    
  }

  
  // If there is enough room, stick the footer at the bottom of page content.
  // If not, place it after the page content
  function setupFooter() {
	  
	  var padding = 100;
	  var footerPadding = 40;
	  var mainContent = $("section"+currentPageID);
	  var mainContentHeight = mainContent.outerHeight(true);
	  var footer = $(".footer-link");
	  var footerHeight = footer.outerHeight(true);
	  var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
	  var windowHeight = $(window).height();		

	  if(totalPageHeight > windowHeight){
		  $(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
		  footer.css("bottom", footerHeight + "px");  			
	  }
	  else {
		  $(".tm-content").css("margin-bottom", "0");
		  footer.css("bottom", "20px");  				
	  }  			
  }

  // Everything is loaded including images.
  $(window).on("load", function(){

	  // Render the page on modern browser only.
	  if(renderPage) {
		// Remove loader
		  $('body').addClass('loaded');

		  // Handle click of "Continue", which changes to next page
		  // The link contains data-nav-link attribute, which holds the nav item ID
		  // Nav item ID is then used to access and trigger click on the corresponding nav item
		  
		var page = window.location.pathname
		var pageatual = page.split('/')[3]

		switch (pageatual) {
			case "pesquisar.php":
				var bgImg = "constructive_bg_03.jpg";
				$('#tmNavLink3').addClass('active');
				break;
				
				case "playlist.php":
				var bgImg = "constructive_bg_02.jpg";
				$('#tmNavLink2').addClass('active');
				break;

				case "index.php":
				var bgImg = "constructive_bg_04.jpg";
				$('#tmNavLink1').addClass('active');
				break;

				case "registro.php":
				var bgImg = "constructive_bg_01.jpg";
				$('#tmNavLink4').addClass('active');
				break;

				default:
				var bgImg = "constructive_bg_04.jpg";
				$('#tmNavLink1').addClass('active');
				break;
				
		}
		 
		 $.backstretch("img/" + bgImg, {fade: 500});
		 // Setup Carousel, Nav, and Nav Toggle
		setupCarousel();
		setupNav();
		setupNavToggle();
		setupFooter();

		// Resize Carousel upon window resize
		$(window).resize(function() {
			setupCarousel();
			setupFooter();
		});
	  }	      	
});
