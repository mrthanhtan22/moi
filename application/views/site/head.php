	<meta http-equiv=content-type content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="language" content="vietnamese">
    <!--GEO META TAG-->
    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Ho Chi Minh City" />
    <meta name="geo.position" content="10.800299;106.639169" />
    <meta name="ICBM" content="10.800299, 106.639169" />
    <!--END GEO META TAG-->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<?php foreach ($trangchu as $row): ?>
	<meta name="keywords" content="<?php echo $row->meta_key ?>" />
	<meta name="description" content="<?php echo $row->meta_desc ?>" itemprop="keywords"/>
	<title><?php echo $row->title ?></title>
	<?php endforeach ?>
	
	<meta content="all" name="robots">
    <meta name="robots" content="all, index, follow">
    <meta name="googlebot" content="all, index, follow">
	
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo public_url('images/favicon.ico') ?>" type="image/x-icon" />
		
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

			<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo public_url('contact') ?>/css/theme.css">
		<link rel="stylesheet" href="<?php echo public_url('contact') ?>/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo public_url('contact') ?>/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo public_url('contact') ?>/css/theme-shop.css">
		<link rel="stylesheet" href="<?php echo public_url('contact') ?>/css/theme-animate.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo public_url('contact') ?>/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo public_url('contact') ?>/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo public_url('contact') ?>/vendor/modernizr/modernizr.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo public_url()?>/bootstrap/bootstrap.min.css">

			<!--library of form search and menu-->
		<script src="<?php echo public_url()?>/jquery/jquery.js"></script>
		<script src="<?php echo public_url()?>/bootstrap/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" type="text/css" href="<?php echo public_url()?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo public_url()?>/lib/jquery.bxslider.css">
		<script src="<?php echo public_url()?>/lib/jquery.bxslider.js"></script>
		<script src="<?php echo public_url()?>/lib/jquery.bxslider.min.js"></script>
		<link rel="shortcut icon" href="<?php echo public_url()?>/images/favicon.png" />
		<link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo public_url()?>/css/datepicker.css">
		<link rel="stylesheet" type="text/css" href="<?php echo public_url()?>/lib/easy-autocomplete.css">
		<script src="<?php echo public_url()?>/js/function.js"></script>
		<script src="<?php echo public_url()?>/js/bootstrap-datepicker.js"></script>
		<!--end library of form search and menu-->
	
		
		<link rel="stylesheet" href="<?php echo public_url('site') ?>/css/camera.css">
		<link rel="stylesheet" href="<?php echo public_url('site') ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo public_url('site') ?>/css/style.css">
		<script src="<?php echo public_url('site') ?>/js/jquery.js"></script>
		<script src="<?php echo public_url('site') ?>/js/jquery-migrate-1.2.1.js"></script>
		<script src="<?php echo public_url('site') ?>/js/script.js"></script>
		<script src="<?php echo public_url('site') ?>/js/superfish.js"></script>
		<script src="<?php echo public_url('site') ?>/js/jquery.ui.totop.js"></script>
		<script src="<?php echo public_url('site') ?>/js/jquery.equalheights.js"></script>
		<script src="<?php echo public_url('site') ?>/js/jquery.mobilemenu.js"></script>
		<script src="<?php echo public_url('site') ?>/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo public_url('site') ?>/js/owl.carousel.js"></script>
		<script src="<?php echo public_url('site') ?>/js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="<?php echo public_url('site') ?>/js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		
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
		