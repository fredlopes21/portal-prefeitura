<!--Igual ao index.php, o código nessa parte vai mostrar os artigos que estão no arquivo, nas categorias, tags, etc.. 
	
	Chamada do header -->
	<?php get_header(); ?>
	<section id="content-archives" class="grd-90">
		<?php $post = $posts[0]; ?> <!-- Hack. Seta o $post para que o the_date() funcione  -->
			<!-- Arquivos por categoria -->
			<?php if (is_category()) { ?>
				<h2 class="title-color">Arquivos listados na categoria: <strong><?php single_cat_title(); ?></strong></h2>

			<!-- Arquivos por dia -->
			<?php } elseif(is_day()) { ?>
				<h2 class="title-color">Arquivo de: <strong><?php the_time('j de F de Y'); ?></strong></h2>

			<!-- Arquivos por Mês -->
			<?php } elseif(is_month()) { ?>
				<h2 class="title-color">Arquivo de: <?php the_time('F de Y'); ?></h2>

			<!-- Arquivos por ano -->
			<?php } elseif(is_year()) { ?>
				<h2 class="title-color">Arquivo de: <?php the_time('Y'); ?></h2>

			<!-- Arquivos por Autor -->
			<?php } elseif(is_author()) { ?>
				<h2 class="title-color">Arquivo do Autor</h2>

			<!-- se houver paginação -->
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged']))  { ?>
				<h2 class="title-color">Arquivo do Blog</h2>
			<?php } ?>

		<!-- Função que faz o loop nos posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

		<!-- Dados do post -->
		<article class="archive col-5">
			<a href="<?php the_permalink() ?>"><h6><?php the_title()?></h6></a>
			<?php the_post_thumbnail('medium') ?>
			<div class="description">
				<span><i class="fa fa-user"></i><?php the_author() ?></span>
				<span><i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?></span>
			</div>
		</article>
			<?php endwhile ?>
			<?php else: ?>
				<!-- Senão - Mostra quando não existem posts -->
				<article class="post">
					<h2>Nada encontrado</h2>
					<div class="description">
						<span>Erro 404</span>
						<span>Lamentamos mas não foram encontrados artigos</span>
					</div>
				</article>
			<?php endif; ?>
		
		<div class="navegacao">
			<span class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></span>
			<span class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></span>
		</div>
	</section>


<!-- Corpo do site PS: a tag <body> já foi aberta no header -->

<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
