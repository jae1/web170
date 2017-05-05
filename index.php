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
<!--					<img src="images/about2.jpeg" alt="About The Little Taco">-->
			<small>index.php<br /></small>
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

<!--
			<div class="story">
				<h2>Story</h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra eu quam eget lacinia. Duis sed enim lacinia, eleifend justo in, interdum tellus. &nbsp; <a href="story">Read more ≫</a></p>
			</div>
			<div class="mission">
				<h2>Mission</h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras viverra eu quam eget lacinia. Duis sed enim lacinia, eleifend justo in, interdum tellus. &nbsp; <a href="mission">Read more ≫</a></p>

			</div>
		</div>

		<aside id="sidebar">
			<ul>
				<li><span class="active">About</span>
					<ul>
						<li><a href="story">Story</a></li>
						<li><a href="mission">Mission</a></li>
					</ul>
				</li>
			</ul>
		</aside>
-->
	</div>
	<?php get_sidebar(); ?>
</div>
<!-- END CONTENTS -->

<?php get_footer(); ?>