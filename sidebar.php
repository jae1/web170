<aside id="sidebar">
<?php
	echo '<h2>';
	if (is_page) {
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