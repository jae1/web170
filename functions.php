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