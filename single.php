<?php get_header(); ?>

<!-- START CONTENT -->
<div id="full-h" class="container">
	<div class="content">
		<div>
			<?php if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<small id="breadcrumbs">','</small>');}
			?>
		</div>

		<div id="main-content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="article-<?php the_ID(); ?>" class="article">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></small>
					<?php the_content(); ?>
				</article>
			<?php endwhile; endif; ?>
			<small>single.php</small>
		</div>
		
		<!-- SIDEBAR -->
		<?php get_sidebar(); ?>
	</div>
</div>
<!-- END CONTENTS -->

<?php get_footer(); ?>