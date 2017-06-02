<?php

/*
Theme Name: WEB170 Spring 2017
Theme URI: https://github.com/jae1
Author: Jaewon Jeong
Author URI: https://jaewonjeong.com/
Description: This is a theme for my WEB170.
Version: 1.0
*/

// Register Menu Locations
register_nav_menus(array(
	'main-menu' => __('Main Menu'),
));

// Add theme support for Post Thumbnails & Featured Images
add_theme_support('post-thumbnails');

// Register Sidebar(s)
register_sidebars(2, array(
	'before_widget' => '<div id="%1$s class="widget %2$s">', 'after_widget' => '</div>',
));

// Get my search engine optimized title tag
function get_title_tag() {
	global $post;

	if (is_front_page()) { # front page
		bloginfo('description');
	} else if (is_home()) { # blog page
		echo get_the_title(get_option('page_for_posts'));
	} else if (is_page()) { # page
		echo get_the_title($post->ID);
		
		if ($post->post_parent) { # page has a parent
			echo ' | ' . get_the_title($post->post_parent);
		}
	} else if (is_category()) { # category page
		echo get_the_category()[0]->cat_name;
	} else if (is_single()) { # posting
		echo get_the_title($post->ID) . ' | ' . get_the_category()[0]->cat_name;
	} else { # other pages i.e. 404, search, etc.
		bloginfo('description');
	}
	
	echo ' | ' . get_bloginfo('name') . ' | Seattle, WA'; # rest of the title
}

// Add Post Type Support
add_post_type_support('page', 'excerpt');