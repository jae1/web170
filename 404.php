<?php get_header(); ?>

<!-- START PAGE TITLE -->
<div class="container page-title">
	<div id="page-title">
		<h2><?php the_title()?></h2>
	</div>
</div>
<!-- END PAGE TITLE -->

<!-- START CONTENT -->
<div id="full-h" class="container">
	<div class="content">
		<div id="breadcrumb">
			<ul class="breadcrumb">
				<li><a href="https://jaewonjeong.com/scc/web170/wordpress/">Home</a></li>
				<li class="active"><?php the_title()?></li>
			</ul>
		</div>

		<div id="main-content">
			<h2>404 Error</h2>
			
			<small>404.php</small>
			
		</div>
	<?php get_sidebar(); ?>
	</div>
</div>
<!-- END CONTENTS -->

<?php get_footer(); ?>