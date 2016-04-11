<?php
/**
 * The Header for our theme
 * @package Portal Prefeitura
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<!-- grds e reset css -->
	<link rel="stylesheet" type="text/css" href="wp-content/themes/Portal Prefeitura/css/grids/grid-izzy.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/Portal Prefeitura/css/reset.css">
	
	<!-- Font Icons Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Api Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=419485581581521";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<title><?php bloginfo('name'); ?></title>

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );  wp_head(); ?>
</head>
<body class="container">
	<header class="principal">

	<!-- Menu principal -->
		<nav class="main-menu grd-20">
			<ul>
				<li class="fa fa-bar-chart"></li>
				<li class="fa fa-bar-chart"></li>
				<li class="fa fa-bar-chart"></li>
				<li class="fa fa-bar-chart"></li>
				<li class="fa fa-bar-chart"></li>
				<li class="fa fa-bar-chart"></li>
				<li class="fa fa-bar-chart"></li>

			</ul>
		</nav>

	<!-- Menu de acesso rápido -->
		<nav class="fast-access grd-5">
			<ul class="menu">
				<li class="menu-item fa fa-bar-chart fa-2x"></li>
				<li class="menu-item fa fa-bar-chart fa-2x"></li>
				<li class="menu-item fa fa-bar-chart fa-2x"></li>
				<li class="menu-item fa fa-bar-chart fa-2x"></li>
				<li class="menu-item fa fa-bar-chart fa-2x"></li>
				<li class="menu-item fa fa-bar-chart fa-2x"></li>
				<li class="menu-item fa fa-bar-chart fa-2x"></li>
			</ul>
		</nav>
		<!-- Cabeçalho com a logo input de buscas e previsão do tempo -->
		<div class="cabecalho grd-100">
			<div class="col-3 logo">
				<img src="http://localhost/wp/wp-content/uploads/2016/02/santalucia.png" class="col-3">	
				<h2 class="title"><?php bloginfo('name') ?></h2>
				<p class="sub-title"><?php bloginfo('description') ?></p>
			</div>
			<div class="col-3 search-top">
				<input placeholder="Faça sua busca" <?php the_search_query(); ?> />
				<button class="fa fa-search" type="submit">Pesquisar</button>
			</div>
			<div class="col-3 clima">
				<iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" height="145" src="http://www.tempoagora.com.br/ta-widgets?cidades=SantaLucia-PR&amp;tipo=horizontal"></iframe>
			</div>
		</div>
		
	</header><!--Fim do header.principal  -->
	