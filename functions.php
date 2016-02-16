<!--Local onde ficam algumas funções que adicionam mais capacidades aos temas
<!-- Widgets -->
<?php 
if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name'			=> 'Area-1',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',
		));
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
;	
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 650, 250, true ); // Tamanho da largura das imagens.
	}

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

?>