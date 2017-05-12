<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?=bloginfo('description')?> | <?=bloginfo('name')?></title>

		<!-- STYLES -->
		<link href="<?=bloginfo('template_directory')?>/nav.css" rel="stylesheet" />
		<link href="<?=bloginfo('stylesheet_url')?>" rel="stylesheet" />
		<link href="<?=bloginfo('template_directory')?>form.css" rel="stylesheet" />
		<!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

		<!-- SCRIPTS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="<?=bloginfo('template_directory')?>/js/nav.js"></script>
		<script src="https://use.fontawesome.com/3f2fee1521.js"></script>
		
		<!-- Begin WP Head function -->
		<?=wp_head()?>
		<!-- End WP Head function -->
	</head>

	<body <?php body_class(); ?>>
		<!-- START HEADER -->
		<header>
			<!-- START NAVIGATION -->
			<nav id="top-nav" role="navigation">
				<a id="logo" href="https://jaewonjeong.com/scc/web170/wordpress/"><span class="hidden">The Little Taco</span></a>
				<div class="hamburger" id="hamburger">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
				<!-- Begin WordPress Menu -->
				<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => false, 'menu_class' => false,)); ?>
				<!-- End WordPress Menu -->
			</nav>
			<!-- END NAVIGATION -->
		</header>
		<!-- END HEADER -->
