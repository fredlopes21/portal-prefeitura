<!--Código do corpo da page -->
	<!-- Chamada do header -->
	<?php get_header(); ?>
	<section id="content-page" class="grd-90">
		<!-- Função que faz a chamada dos posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<!-- Dados do post -->
		<article class="page-post">
			<h2 class="title-color"><?php the_title()?></h2>
			<div class="description">
				<span class="col-6"> <i class="fa fa-user"></i><?php the_author() ?></span>
				<span class="col-6"> <i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?></span>
			</div>
			<div class="post">
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

<!-- Chamada da sidebar e footer -->
<?php get_footer(); ?>
