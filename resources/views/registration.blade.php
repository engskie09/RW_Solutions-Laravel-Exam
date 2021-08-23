<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RW Solutions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

	<link rel="stylesheet" href="template/css/animate.css">
	<link rel="stylesheet" href="template/css/icomoon.css">

	<link rel="stylesheet" href="template/css/bootstrap.css">

	<link rel="stylesheet" href="template/css/style.css">

	<script src="template/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 text-right menu-1">
					<ul>
						<li class="has-dropdown">
							<a>Services</a>
							<ul class="dropdown">
								<li><a>Web Design</a></li>
								<li><a>eCommerce</a></li>
								<li><a>Branding</a></li>
								<li><a>API</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-xs-2 text-center">
					<div id="fh5co-logo"><a>Welcome</a></div>
				</div>
				<div class="col-xs-5 text-left menu-1">
					<ul>
						<li class="active"><a>Register</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(template/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>RW Solutions</h1>
							<h2>We find Ways</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Penthouse, LPL Towers, 112 Legaspi Street <br> Legaspi Village, Makati, 1200 Metro Manila</li>
							<li class="phone"><a href="tel://(02) 8892 0642">(02) 8892 0642</a></li>
							<li class="email"><a href="mailto:rafaelmasallo@gmail.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://FreeHTML5.co">FreeHTML5.co</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Join Now</h3>
					<form action="{{route('store')}}" method="POST">
                        
						<div class="row form-group">
							<div class="col-md-6">
                            {{ csrf_field() }}
								<input type="text" name="username" class="form-control" placeholder="Username">
							</div>
							<div class="col-md-6">
                            {{ csrf_field() }}
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
                            {{ csrf_field() }}
								<input type="email" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
                            {{ csrf_field() }}
								<input type="number" name="mobileno" class="form-control" placeholder="Mobile No.">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
                            {{ csrf_field() }}
								<textarea name="background" cols="30" rows="10" class="form-control" placeholder="Say something about Yourself"></textarea>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<div id="map" class="fh5co-map"></div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Lets Get</h2>
					<p>Started.</p>
            </div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-md-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Get In Touch</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
					<h3>A Little About RW Solutions</h3>
					<p>We are proud.</p>
					<p><a href="#">Learn More</a></p>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Bootstrap Theme.</small> 
						<small class="block">Frameworked by Bootstrap
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="template/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="template/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="template/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="template/js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="template/js/google_map.js"></script>

	<script src="template/js/main.js"></script>

	</body>
</html>

