<aside id="sidebar">
	<?php
		echo '<h2>';
		if (is_page) {
			echo get_the_title();
		}
		echo '</h2>';

		if (is_page()) { // when on a Page
			if ($post->post_parent) { // the page has a parent
				wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent, )); // list the children
			} else { // when on a parent Page
				wp_list_pages(array('tilte_li' => '', 'child_of' => $post->ID,));
			}
		} else { // if on the parent page

		}
	?>
</aside>
