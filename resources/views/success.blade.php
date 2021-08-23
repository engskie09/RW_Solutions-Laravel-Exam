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
	

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(template/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Thank You for Registration</h1>
							<h2>We sent Your informatin To Your Registered Email.</h2>
                            <h2>Please Click the button for Payment.</h2>
                            <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container"></div>
                    </div>
                </div>
                        
                        </div>
					</div>
				</div>

               
			</div>
		</div>

       
	</header>

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

    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
    <script>
        function initPayPalButton() {
        paypal.Buttons({
            style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'paypal',
            
            },

            createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
            });
            },

            onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                
                // Full available details
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                // Show a success message within this page, e.g.
                const element = document.getElementById('paypal-button-container');
                element.innerHTML = '';
                element.innerHTML = '<h3>Thank you for your payment!</h3>';

                // Or go to another URL:  actions.redirect('thank_you.html');
                
            });
            },

            onError: function(err) {
            console.log(err);
            }
        }).render('#paypal-button-container');
        }
        initPayPalButton();
    </script>


	</body>
</html>

