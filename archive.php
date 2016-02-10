<!--Igual ao index.php, o código nessa parte vai mostrar os artigos que estão no arquivo, nas categorias, tags, etc.. 
	
	Chamada do header -->
	<?php get_header(); ?>
	<main class="content">
		<?php $post = $posts[0]; ?> <!-- Hack. Seta o $post para que o the_date() funcione  -->
			<!-- Arquivos por categoria -->
			<?php if (is_category()) { ?>
				<p>Arquivo da Categoria: <?php echo single_cat_title(); ?></p>

			<!-- Arquivos por dia -->
			<?php } elseif(is_day()) { ?>
				<p>Arquivo de: <?php the_time('j de F de Y'); ?></p>

			<!-- Arquivos por Mês -->
			<?php } elseif(is_month()) { ?>
				<p>Arquivo de: <?php the_time('F de Y'); ?></p>

			<!-- Arquivos por ano -->
			<?php } elseif(is_year()) { ?>
				<p>Arquivo de: <?php the_time('Y'); ?></p>

			<!-- Arquivos por Autor -->
			<?php } elseif(is_author()) { ?>
				<p>Arquivo do Autor</p>

			<!-- se houver paginação -->
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged']))  { ?>
				<p>Arquivo do Blog</p>
			<?php } ?>

		<!-- Função que faz a chamada dos posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

		<!-- Dados do post -->
		<article class="post">
			<h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>
			<div class="description">
				<span>Postado por: <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
				<span><?php comments_popup_link('Sem comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></span>
				<span><?php edit_post_link(('Editar')); ?></span>
				<span><?php the_content(); ?></span>
			</div>

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
		</article>
		<div class="navegacao">
			<span class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></span>
			<span class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></span>
		</div>
	</main>


<!-- Corpo do site PS: a tag <body> já foi aberta no header -->

<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
