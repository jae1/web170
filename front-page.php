<?php get_header(); ?>

<div id="full-h" class="container">
	<div class="content">
		<div id="main-content">
			<h2>About Us</h2>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="article-<?php the_ID(); ?>" class="article">
					<?php the_content(); ?>
				</article>
			<?php endwhile; endif; ?>
			
			<h2>Latest News</h2>
			<ul>
			<?php rewind_posts(); ?>
			<?php query_posts(array('posts_per_page' => '4', 'category_name' => 'news')); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink();?>"><?php the_title();?></a><br />
				<small><?php the_time('F j, Y'); ?> in <?php the_category(','); ?></small></li>
			<?php endwhile; endif; ?>
			</ul>
			
			<h2>Latest Promotions</h2>
			<ul>
			<?php rewind_posts(); ?>
			<?php query_posts(array('posts_per_page' => '4', 'category_name' => 'promotions')); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink();?>"><?php the_title();?></a><br />
				<small><?php the_time('F j, Y'); ?> in <?php the_category(','); ?></small></li>
			<?php endwhile; endif; ?>
			</ul>

			<small>front-page.php</small>
		</div>
	</div>
</div>

<?php get_footer(); ?>