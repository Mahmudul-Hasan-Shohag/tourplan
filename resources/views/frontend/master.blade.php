
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tour Plan</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://demo.themezy.com/system/resources/demo_themes/000/000/138//booking/css/booking.css">
		<link rel="stylesheet" href="https://demo.themezy.com/system/resources/demo_themes/000/000/138//css/camera.css">
		<link rel="stylesheet" href="https://demo.themezy.com/system/resources/demo_themes/000/000/138//css/owl.carousel.css">
		<link rel="stylesheet" href="https://demo.themezy.com/system/resources/demo_themes/000/000/138//css/style.css">
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/jquery.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/jquery-migrate-1.2.1.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/script.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/superfish.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/jquery.ui.totop.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/jquery.equalheights.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/jquery.mobilemenu.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/jquery.easing.1.3.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/owl.carousel.js"></script>
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="https://demo.themezy.com/system/resources/demo_themes/000/000/138//booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		
@include('frontend.partials.header')


		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/nw.jpeg">
					<div class="caption fadeIn">
						<h2></h2>
						<div class="price">
							
							<span></span>
						</div>
						<!--<a href=""></a>-->
					</div>
				</div>

                <div data-src="images/ti.jpg">
					<div class="caption fadeIn">
						<h2></h2>
						<div class="">
							
							<span></span>
						</div>
						
					</div>
				</div>


               
				
              
				<div data-src="images/tindu.jpg">
					<div class="caption fadeIn">
						<h2></h2>
						<div class="">
							
							<span></span>
						</div>
						
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->

<div class="content"><div class="ic"></div>

<div class="container_12">

@foreach($spot as $data)

				<div class="grid_4">
				<br>
					<div class="banner">
					<img width="300" height="300" src="{{url('/uploads/spot/'.$data->spot_image)}}" alt="img">
						<div class="label">
							<div class="title" style="color:black"></div>
							<div class="price">Journey date:{{$data->date}}<span>{{$data->destination}}</span><span>{{$data->cost}} BDT</span></div>
							<a href="{{route('spot.details',$data->id)}}">Show Details</a>
							
						</div>
					</div>
				</div>	
				
				@endforeach
				



				
				
					
					
					
					
				
@include('frontend.partials.footer')

		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

