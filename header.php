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
	<link rel="stylesheet" type="text/css" href="http://izzyweb.com.br/salu/wp-content/themes/Portal Prefeitura/css/grids/grid-izzy.css">
	<link rel="stylesheet" type="text/css" href="http://izzyweb.com.br/salu/wp-content/themes/Portal Prefeitura/css/reset.css">
	
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

	<!-- Api Google -->
	<script src="https://apis.google.com/js/platform.js" async defer>
	  {lang: 'pt-BR'}
	</script>


	<title><?php bloginfo('name'); ?></title>

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );  wp_head(); ?>
</head>
<body class="container">
	<header id="home" class="principal parallax" data-speed="15">

	<!-- Menu principal -->
		<nav class="main-menu grd-100">
			<div class="menu-container grd-20">
				<?php wp_nav_menu( array(
					'menu' => 'left-menu'
				) ); ?>
			</div>
		</nav>

	<!-- Menu de acesso rápido -->
		<nav class="fast-access grd-100">
			<div class="col-6" style="text-align: center;">
				<i id="get-menu" class="fa fa-navicon"><span class="menu-name">Menu</span></i>
				<i id="close-menu" class="fa fa-times"><span class="menu-name">Fechar</span></i>
			</div>
			<div class="col-2" style="text-align: center;">
				<?php wp_nav_menu( array(
					'menu' => 'top-menu'
				) ); ?>			
			</div>
			<div class="col-3">
				<input placeholder="Faça sua busca" <?php the_search_query(); ?> />
				<button class="fa fa-search" type="submit"></button>
			</div>
		</nav>
		<!-- Cabeçalho com a logo input de buscas e previsão do tempo -->
		<div class="cabecalho grd-100">
			<div class="col-2 logo">
				<a href="http://izzyweb.com.br/salu"><img src="http://santalucia.pr.gov.br/wp-content/uploads/2015/09/santalucia.png" class="col-3" title="Brasão Santa Lúcia-PR"></a>
			</div>
			<div class="col-2 clima">
				<div id="cont_4e37f4b37a401c6f8153525a49ae645d"><span id="h_4e37f4b37a401c6f8153525a49ae645d"><a class="LinkWid" href="http://www.tempo.pt/santa-lucia.htm" target="_blank" style="font-family:Roboto; font-size:13px; color:#00ABEB;">Previs&atilde;o do tempo Santa L&uacute;cia-PR</a></span><script type="text/javascript" async src="http://www.tempo.pt/wid_loader/4e37f4b37a401c6f8153525a49ae645d"></script></div>
			</div>
		</div>
		
	</header><!--Fim do header.principal  -->
	