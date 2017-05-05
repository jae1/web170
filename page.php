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
			<small>page.php<br /></small>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="article-<?php the_ID()?>" class="article">
				<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
				<?php the_content()?>
			</article>
			<?php endwhile; endif; ?>
			<?php 
				if (is_404()) { 
					echo 'This page does not exist.';
				}
			?>
	</div>
	<?php get_sidebar(); ?>
</div>
<!-- END CONTENTS -->

<?php get_footer(); ?>