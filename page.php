	<?php get_header(); ?>
	<section id="page-content" class="grd-90">
		<!-- Função que faz a chamada dos posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<!-- Dados do post -->
		<article class="page-post">
			<h1 class="title-page"><?php the_title()?></h1>
			<span class="date">Atualizado <?php the_time('d/M/Y') ?></span>
			<div class="content">
				<?php the_content(); ?>
			</div>

			<?php endwhile; else: ?>
				<!-- Senão - Mostra quando não existem posts -->
				<article class="post">
					<h2>Nada encontrado</h2>
					<div class="description">
						<span>Erro 404</span>
						<span>Lamentamos mas não foram encontrados artigos</span>
					</div>
				</article>
			<?php endif; ?>
		</article>
	</section>

<?php get_footer(); ?>
