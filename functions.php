
<?php

$themename = "Portal Prefeituras";
$themefolder = "sahifa";

define ('theme_name', $themename );
define ('theme_ver' , 1.2 );
	// Tirar a barra de admin quando em produção.
	add_filter('show_admin_bar', '__return_false'); 

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );	
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( auto, auto );
	add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
	add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
	add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies


	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
?>