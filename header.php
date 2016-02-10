<?php
/**
 * The Header for our theme
 * @package Portal Prefeitura
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<!-- Grids e reset css -->
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/Portal Prefeitura/css/grids/grid-izzy.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/Portal Prefeitura/css/reset.css">

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo( 'pingback_url' ); ?>">


	<title><?php bloginfo('name'); ?></title>

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );  wp_head(); ?>
</head>
<body>
	