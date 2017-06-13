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
				<article id="post-excerpt-<?php the_ID(); ?>" class="post-excerpt">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category('|'); ?></small>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
					<p>
						<?php echo get_the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read More >></a>
					</p>
				</article>
			<?php endwhile; endif; ?>			
			<small>index.php</small>
		</div>
		
		<!-- SIDEBAR -->
		<?php get_sidebar(); ?>
	</div>
</div>
<!-- END CONTENTS -->

<?php get_footer(); ?>