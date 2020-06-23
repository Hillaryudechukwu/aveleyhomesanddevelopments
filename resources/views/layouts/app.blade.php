<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!--A Design by W3layouts Author: W3layout-->
<head>
<title>Aveleyhomes @yield('title')</title>
<!--meta tags -->
<style>
	.mt-0 {
  margin-top: 0 !important;
}

.mb-10 {
  margin-top: -10px !important;
}


</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Roof Houses Responsive web  design" />
<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        },
		false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
		<!-- bootstrap style sheet -->
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- fontawesome -->
			<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
		<!-- gallery css -->
			<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
		<!-- stylesheets-->
			<link href="css/style.css" rel='stylesheet' type='text/css' media="all">

		<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>
<body>
<!-- nav -->
{{-- --}}
<header>
<nav class="navbar navbar-expand-lg navbar-light mb">
  <h1><a class="navbar-brand mt-0" href="/"><img src="images/logo2.png" alt="image" /> </a></h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services">SERVICES</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/gallery">GALLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blogs">BLOGS</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/feedback">CONTACT</a>
      </li>
	  
    </ul>
  </div>
</nav>
</header>
<!-- //nav -->
<!-- banner -->
@yield('slider')

<!-- //banner -->
<!-- about -->
					@yield('about')
<!-- about -->
<!-- services -->
					@yield('services')
<!-- //services -->
<!-- video section -->
   @yield('///videoo')
<!-- //video section -->
<!-- team -->
	@yield('team')
		<!-- team -->
 
 <!--gallery  -->
 
   @yield('gallery')
   @yield('testimonies')

    <!-- //gallery -->
	<!-- Counter -->
@yield('counter')
<!-- //Counter -->
<!-- Latest -->
@yield('latest')
<!-- //Latest -->
<!-- contact -->
@yield('contacts')
<!-- //contact -->

<!--footer -->
<div class="footer footer_w3layouts_section_1its">
	<div class="container">
		<div class="footer-top">
		<div class="row">
			<div class="col-md-3 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus.Nulla porttitor accumsana tincidunt.</p>
					<ul class="social_section_1info">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 footer-grid_section_1its_w3">
				@yield('contact')
			</div>
			<div class="col-md-2 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Navigation</h3>
				</div>
				<ul class="links">
					<li><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/services">Services</a></li>
					<li><a href="/team">Team</a></li>
					<li><a href="/gallery" >Gallery</a></li>
					<li><a href="/news">Blogs</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Latest news</h3>
				</div>
				<div class="d-flex justify-content-around">
						<a href="#" class="col-4 fot_tp p-2">
							<img src="images/g1.jpg" class="img-fluid" alt="image">
						</a>
						<a href="#" class="col-4 fot_tp p-2">
							<img src="images/g2.jpg" class="img-fluid" alt="image">
						</a>
						<a href="#" class="col-4 fot_tp p-2">
							<img src="images/g3.jpg" class="img-fluid" alt="image">
						</a>
					</div>
					<div class="d-flex justify-content-around">
						<a href="#" class="col-4 fot_tp p-2">
							<img src="images/g4.jpg" class="img-fluid" alt="image">
						</a>
						<a href="#" class="col-4 fot_tp p-2">
							<img src="images/g5.jpg" class="img-fluid" alt="image">
						</a>
						<a href="#" class="col-4 fot_tp p-2">
							<img src="images/g6.jpg" class="img-fluid" alt="image">
						</a>
					</div>

			</div>
			</div>
		</div>
		<div class="copyright">
			<p>© Aveley homes and developments 2018. All Rights Reserved | Design by <a href="http://aveleyhomesanddevelopments.co.uk/">aveleyhomesanddevelopments.co.uk</a> </p>
		</div>
	</div>
</div>
<!-- //footer -->


	<!-- js -->
		<script src="js/jquery.min.v3.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <!-- //js -->
	
	<!-- stats -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
	<!-- //stats -->
	<!--testimonies-->
		<script>
		// When the DOM is ready, run this function
		$(document).ready(function() {
		//Set the carousel options
		$('#quote-carousel').carousel({
		pauseOnHover: true,
		interval: 1000,
		});
		});
		</script>
	<!--testimonies-->

	<!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
	
    <!-- //smooth-scrolling-of-move-up -->
<!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
	</script>
	<script>
			// When the DOM is ready, run this function
			$(document).ready(function() {
			//Set the carousel options
			$('#quote-carousel').carousel({
			pauseOnHover: true,
			interval: 1000,
			});
			});
	</script>
    <script src="js/SmoothScroll.min.js"></script>
	
    <!-- //smooth-scrolling-of-move-up -->


	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <script src="js/jquery-1.7.2.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
	
	<!-- video js (background) -->
		<script src="js/jquery.vide.min.js"></script>
    <!-- //video js (background) -->
	
</body>
</html>
