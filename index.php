

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>WEN CAR Shop</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/patros.css" >
		<link rel="shortcut icon" href="favicon.ico">
	</head>

	<body data-spy="scroll">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="images/logo_wen.png" alt="company logo" /></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
						<li class="active"><a href="#">首頁<br>Home</a></li>
		
					<?php 
						$lifetime = 180; //單位秒，3600秒=1小時
						session_set_cookie_params($lifetime);
							if(session_status()==PHP_SESSION_NONE){
						session_start();}
						if((!isset($_SESSION['login'])) or $_SESSION['login']!='true'){ ?>
						<li><a href="customer/login.php">會員登入<br>LogIn</a></li>
						
					<?php } else{ ?>
						<li><a href="customer/list.php">訂單查詢<br>Order Check</a>
						<li><a href="customer/logout.php">登出<br>Logout</a></li>
					<?php }?>
						<li><a href="searchCar/search.php">車款搜尋<br>Car Search</a></li>
						<li><a href="message/guestbook.php">留言板<br>GuestBook</a></li>
						
						
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header Carousel -->
		<header id="home" class="carousel slide">
			<ul class="cb-slideshow">
				<li><span>image1</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"><h3 style="font-family:微軟正黑體;">wen 二手車行</h3></div>
							</div>
						</div>
						<h4</h4>
					</div>
				</li>
				<li><span>image2</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center">
							</div>
						</div>
						<h4></h4>
					</div>
				</li>
				<li><span>image3</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"></div>
							</div>
						</div>
						<h4></h4>
					</div>
				</li>
				<li><span>Image 04</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"></div>
							</div>
						</div>
						
					</div>
				</li>
				<li><span>Image 05</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"></div>
							</div>
						</div>
					</div>
				</li>
				<li><span>Image 06</span>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center"></div>
							</div>
						</div>
					</div>
				</li>
			</ul>
			<div class="intro-scroller">
				<a class="inner-link" href="#about">
					<div class="mouse-icon" style="opacity: 1;">
						<div class="wheel"></div>
					</div>
				</a> 
			</div>          
		</header>
			
		<!-- Page Content -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="text-center">
							<h2>About Us</h2>
							<div class="row">
								<div class="col-md-12">
									<h3 style="font-family:微軟正黑體;">
									本車行提供許多二手車買賣資訊，並提供免費查詢二手車訊功能，如果你有在本行進行過交易，則將擁有一組本行的會員帳號密碼，而密碼可以自行更改，如果您是會員我們將提供更便利的登錄介面，以及更便利的特約維修服務，讓您在家也能逛車行，免去您來回奔波之苦。
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Google Map -->
		<script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true&amp;libraries=places"></script>

		<!-- Portfolio -->
		<script src="js/jquery.quicksand.js"></script>	    
	

		<!--Jquery Smooth Scrolling-->
		<script>
			$(document).ready(function(){
				$('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						'scrollTop': $target.offset().top
					}, 900, 'swing', function () {
						window.location.hash = target;
					});
				});

				$('a.page-scroll').bind('click', function(event) {
					var $anchor = $(this);
					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top
					}, 1500, 'easeInOutExpo');
					event.preventDefault();
				});

			   $(".nav a").on("click", function(){
					 $(".nav").find(".active").removeClass("active");
					$(this).parent().addClass("active");
				});

				$('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');
					$(window).scroll(function () {
						if ($(this).scrollTop() != 0) {
							$('#toTop').fadeIn();
						} else {
							$('#toTop').fadeOut();
						}
					}); 
				$('#toTop').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 700);
					return false;
				});

			});

		</script>

		<script>
		function gallery(){};

		var $itemsHolder = $('ul.port2');
		var $itemsClone = $itemsHolder.clone(); 
		var $filterClass = "";
		$('ul.filter li').click(function(e) {
		e.preventDefault();
		$filterClass = $(this).attr('data-value');
			if($filterClass == 'all'){ var $filters = $itemsClone.find('li'); }
			else { var $filters = $itemsClone.find('li[data-type='+ $filterClass +']'); }
			$itemsHolder.quicksand(
			  $filters,
			  { duration: 1000 },
			  gallery
			  );
		});

		$(document).ready(gallery);
		</script>


		<script type="text/javascript">
	$(document).ready(function(){
		inicializemap()

		$('#contactForm').on('submit', function(e){
			e.preventDefault();
			e.stopPropagation();

			// get values from FORM
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			var goodToGo = false;
			var messgaeError = 'Request can not be send';
			var pattern = new RegExp(/^(('[\w-\s]+')|([\w-]+(?:\.[\w-]+)*)|('[\w-\s]+')([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);


			 if (name && name.length > 0 && $.trim(name) !='' && message && message.length > 0 && $.trim(message) !='' && email && email.length > 0 && $.trim(email) !='') {
				  if (pattern.test(email)) {
					 goodToGo = true;
				  } else {
					 messgaeError = 'Please check your email address';
					 goodToGo = false; 
				  }
			 } else {
			   messgaeError = 'You must fill all the form fields to proceed!';
			   goodToGo = false;
			 }

			 
			if (goodToGo) {
			   $.ajax({
				 data: $('#contactForm').serialize(),
				 beforeSend: function() {
				   $('#success').html('<div class="col-md-12 text-center"><img src="images/spinner1.gif" alt="spinner" /></div>');
				 },
				 success:function(response){
				   if (response==1) {
					 $('#success').html('<div class="col-md-12 text-center">Your email was sent successfully</div>');
					 window.location.reload();
				   } else {
					 $('#success').html('<div class="col-md-12 text-center">E-mail was not sent. Please try again!</div>');
				   }
				 },
				 error:function(e){
				   $('#success').html('<div class="col-md-12 text-center">We could not fetch the data from the server. Please try again!</div>');
				 },
				 complete: function(done){
				   console.log('Finished');
				 },
				 type: 'POST',
				 url: 'js/send_email.php', 
			   });
			   return true;
			} else {
			   $('#success').html('<div class="col-md-12 text-center">'+messgaeError+'</div>');
			   return false;
			}
			return false;
		});
	});

	var map = null;
	 var latitude;
	 var longitude;
	 function inicializemap(){
	   latitude = 41.3349509; 
	   longitude = 19.8217028;

	  var egglabs = new google.maps.LatLng(latitude, longitude);
	  var egglabs1 = new google.maps.LatLng(43.0630171, 89.2296082);
	  var egglabs2 = new google.maps.LatLng(13.0630171, 80.2296082 );


	  var image = new google.maps.MarkerImage('images/marker.png', new google.maps.Size(84,56), new google.maps.Point(0,0), new google.maps.Point(42,56));
	  var mapCoordinates = new google.maps.LatLng(latitude, longitude);
	  var mapOptions = {
	   backgroundColor: '#ffffff',
	   zoom: 10,
	   disableDefaultUI: true,
	   center: mapCoordinates,
	   mapTypeId: google.maps.MapTypeId.ROADMAP,
	   scrollwheel: true,
	   draggable: true, 
	   zoomControl: false,
	   disableDoubleClickZoom: true,
	   mapTypeControl: false,
	   styles: [
					{
						"featureType": "all",
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"color": "#1f242f"
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.icon",
						"stylers": [
							{
								"hue": "#ff9d00"
							}
						]
					},
					{
						"featureType": "landscape.man_made",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#fef8ef"
							}
						]
					},
					{
						"featureType": "poi.medical",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"hue": "#ff0000"
							}
						]
					},
					{
						"featureType": "poi.park",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#c9d142"
							},
							{
								"lightness": "0"
							},
							{
								"visibility": "on"
							},
							{
								"weight": "1"
							},
							{
								"gamma": "1.98"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry",
						"stylers": [
							{
								"weight": "1.00"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#d7b19c"
							},
							{
								"weight": "1"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"weight": "4.03"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"visibility": "off"
							},
							{
								"color": "#ffed00"
							}
						]
					},
					{
						"featureType": "road.highway.controlled_access",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "transit.line",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#cbcbcb"
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#0b727f"
							}
						]
					}
				]
					  };

	  map = new google.maps.Map(document.getElementById('map-canvas-holder'),mapOptions);
	  marker = new google.maps.Marker({position: egglabs, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS1'}); 
	  marker = new google.maps.Marker({position: egglabs1, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS2'}); 
	  marker = new google.maps.Marker({position: egglabs2, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS3'}); 
	  google.maps.event.addListener(map, 'zoom_changed', function() {
	   var center = map.getCenter();
	   google.maps.event.trigger(map, 'resize');
	   map.setCenter(center);
	  });
	 }

</script>


</body>
</html>




