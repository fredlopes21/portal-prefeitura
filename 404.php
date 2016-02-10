<!--Código do corpo 404 -->
	<!-- Chamada do header -->
	<?php get_header(); ?>
	<main class="content">
		<!-- Dados do post -->
		<article class="post">
			<h1>Não encontramos o que você procura!</h1>
			<div class="description">
				<input type="text" placeholder="Digite o que você procura" />
			</div>

			<!-- Chamada dos comentários ao final do post -->
			<!-- <?php comments_template(); ?> -->
	</main>

	<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
