<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name' ); ?></title>

	<meta name="description" content="<?php bloginfo('description' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/style.css">

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/css/owl.theme.css">



	<script src="<?php bloginfo('template_url' ); ?>/js/modernizr.custom.min"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url' ); ?>/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
 
		  $("#owl-demo").owlCarousel({
		 
		      navigation : false, // Show next and prev buttons
		      slideSpeed : 100,
		      paginationSpeed : 400,
		      singleItem:true,
		      responsive:true,
		      //autoPlay:true
		 
		  });
		 
		});
	</script>
</head>
<body>

	<header>
		<div class="container">	

			<div class="row">
				<!-- Logo principal -->
				<a class="offset-by-one three columns" href="<?php echo home_url('/'); ?>"><img width="160px" src="<?php bloginfo('template_url' ); ?>/img/logo.png" alt="L&L Talento"></a>
				<!-- Menu principal -->
				<nav class="offset-by-three five columns menu-top">
					<?php wp_nav_menu(array(
					'container'=>false,
					'item_wrap'=>'<ul id="menu-header">%3$s</ul>',
					'theme-location'=>'menu-top',
					) ); ?>
				</nav>

			</div>
		</div>
	</header>
	
