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
	<!-- grds e reset css
	<link rel="stylesheet" type="text/css" href="http://izzyweb.com.br/salu/wp-content/themes/Portal Prefeitura/css/grids/grid-izzy.css">
	<link rel="stylesheet" type="text/css" href="http://izzyweb.com.br/salu/wp-content/themes/Portal Prefeitura/css/reset.css">

	<link rel="stylesheet" type="text/css" href="http://izzyweb.com.br/salu/wp-content/themes/Portal Prefeitura/css/style-portal.css"> 
 	 -->
	<!--  -->
	<link rel="stylesheet" type="text/css" href="wp-content/themes/Portal Prefeitura/css/grids/grid-izzy.css">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/Portal Prefeitura/css/reset.css">

	<link rel="stylesheet" type="text/css" href="wp-content/themes/Portal Prefeitura/css/style-portal.css"> 
	

	<!-- Font Icons Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->
	<!-- <link rel="stylesheet" href="<?php bloginfo( 'pingback_url' ); ?>"> -->

	<!-- Api Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=419485581581521";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Api Google -->
	<script src="https://apis.google.com/js/platform.js" async defer>
	  {lang: 'pt-BR'}
	</script>


	<title><?php bloginfo('name'); ?></title>
</head>
<body class="container">
	<header id="home" class="grd-100 parallax" data-speed="15">
		<i id="get-menu">
			<svg enable-background="new 0 0 32 32" id="Слой_1" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<g id="Menu">
			<path d="M1,7h30c0.552,0,1-0.448,1-1c0-0.552-0.448-1-1-1H1C0.448,5,0,5.448,0,6C0,6.552,0.448,7,1,7z"/>
			<path d="M31,15H1c-0.552,0-1,0.448-1,1c0,0.552,0.448,1,1,1h30c0.552,0,1-0.448,1-1C32,15.448,31.552,15,31,15z"/>
			<path d="M31,25H1c-0.552,0-1,0.448-1,1c0,0.552,0.448,1,1,1h30c0.552,0,1-0.448,1-1C32,25.448,31.552,25,31,25z"/>
			</g></svg><span class="title">Menu</span>
		</i>
		<div class="cabecalho">
			<div class="logo">
				<a href="http://izzyweb.com.br/salu"><img src="http://goo.gl/0FtqxI" class="brasao" title="Brasão Santa Lúcia-PR"></a>
			</div>
			<h2 class="title"><?php bloginfo('name'); ?></h2>
		</div>


		<nav class="main-menu">
			<h3 class="col-1 title-menu">Menu</h3>
			<i id="close-menu">
				<svg height="40px" width="40px" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="77.6,21.1 49.6,49.2 21.5,21.1 19.6,23 47.6,51.1 19.6,79.2 21.5,81.1 49.6,53 77.6,81.1 79.6,79.2   51.5,51.1 79.6,23 "/>
				</svg>
				<span class="title">Fechar</span></i>
			<div class="col-1 navigation">
				<?php wp_nav_menu( array(
					'menu' => 'top-menu'
				) ); ?>			
			</div>
			<h3 class="col-1 title-menu">Secretarias</h5>
			<div class="col-4 secretarias">
				<h3 class="title">Secretárias</h3>
				<?php wp_nav_menu( array(
					'menu' => 'left-menu'
				) ); ?>
			</div>

		</nav>

		<!-- Menu de acesso rápido 
		<nav class="fast-access">
			
			<div class="col-3">
				<input placeholder="Faça sua busca" <?php $search_query = get_search_query(); ?> />
				<button class="fa fa-search" type="submit"></button>
			</div>
		</nav> 
		-->		
	</header><!--Fim do header.principal  -->
	