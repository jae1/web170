<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php bloginfo('description'); ?> | <?php bloginfo('name');?></title>

	<!-- STYLES -->
	<link href="<?php bloginfo('template_directory'); ?>/nav.css" rel="stylesheet" />
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
	<link href="<?php bloginfo('template_directory'); ?>form.css" rel="stylesheet" />
	<!-- <link href="css/font-awesome.min.css" rel="stylesheet" /> -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>
	<script src="https://use.fontawesome.com/3f2fee1521.js"></script>

	<!-- Begin WP Head function -->
	<?php wp_head(); ?>
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

	<!-- START PAGE TITLE -->
	<div class="container page-title">
		<div id="page-title">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
	<!-- END PAGE TITLE -->

	<!-- START CONTENT -->
	<div id="full-h" class="container">
		<div class="content">
			<div id="breadcrumb">
				<ul class="breadcrumb">
					<li><a href="https://jaewonjeong.com/scc/web170/wordpress/">Home</a></li>
					<li class="active"><?php the_title(); ?></li>
				</ul>
			</div>

			<div id="main-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article id="article-<?php the_ID(); ?>" class="article">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
					</article>
				<?php endwhile; endif; ?>			
				<small>index.php</small>
			</div>

			<!-- SIDEBAR -->
			<aside id="sidebar">
				<?php
					echo '<h2>';
					if (is_page()) {
						echo get_the_title($post->post_parent);
					} else {
						echo 'Blog';
					}
					echo '</h2>';

					echo '<ul>';
					if (is_page() || is_404()) { // when on a page
						if ($post->post_parent) { // the page has a parent
							wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); // list the children
						} else { // when on a parent Page
							wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,));
						}
					} else { // when not on a page
						wp_list_categories(array('title_li' => '',)); // list blog categories
					}
					echo '</ul>';	
				?>
			</aside>
		</div>
	</div>
	<!-- END CONTENTS -->

	<!-- START FOOTER -->
	<footer>
		<div class="bottom">
			<h4>STAY CONNECTED</h4>
			<ul class="social">
				<li><a href="#"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="copyright">
			<div class="bottom">
				<small>&copy; 2017 <b>THE LITTLE TACO</b>. All Rights Reserved.</small>
			</div>
		</div>
	</footer>
	<!-- END FOOTER -->

	<!-- Begin WP Footer function -->
	<?php wp_footer(); ?>
	<!-- End WP Footer function -->
</body>
</html>