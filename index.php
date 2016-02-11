<!--Código do corpo do site -->
	<!-- Chamada do header -->
	<?php get_header(); ?>

	<header class="principal">
	<!-- Menu de acesso rápido -->
		<nav class="fast-access">
			<?php wp_nav_menu( array(
				'menu' => 'Acesso-a-Informação'
			) ); ?>
		</nav>
		<!-- Cabeçalho com a logo input de buscas e previsão do tempo -->
		<div class="cabecalho">
			<div class="colunm-3 logo">
				<img src="http://localhost/wp-content/themes/Portal%20Prefeitura/img/santalucia-logo.png" class="colunm-3">	
				<h4 class="title"><?php bloginfo('name') ?></h4>
				<span><?php bloginfo('description') ?></span>
			</div>
			<div class="colunm-3 search-top">
				<input placeholder="Digite sua busca" <?php the_search_query(); ?> />
				<button class="ico-search" type="submit">Pesquisar</button>
			</div>
			<div class="colunm-3 clima">
				<iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" height="145" src="http://www.tempoagora.com.br/ta-widgets?cidades=SantaLucia-PR&amp;tipo=horizontal"></iframe>
			</div>
		</div>
		
		<nav class="main-menu">
			<?php wp_nav_menu( array(
				'menu' => 'menu principal'
			) ); ?>
		</nav>

		
		<!-- Slider -->
		<div class="slider-main">
			<ul class="slider-body">
			<!-- Função que faz a chamada dos posts -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li class="slider-item colunm-1">
					<?php the_post_thumbnail('large'); ?>
					<div class="description">
						
					</div>
				</li>
			</ul>

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
		</div>

	</header>

	<!-- Corpo do site  -->
	<section id="secao-2" class="grid-1">
		<!-- Notícias Box -->
		<article class="box-noticias colunm-3">
		<h5 class="ico-news title-news">Notícias</h5>
		<!-- Função que faz a chamada dos posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<!-- Dados do post -->
			<div class="news">
				<?php the_post_thumbnail('thumbnail') ?>
				<div class="description">
					<h6><?php the_title()?></h6>
					<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. </p>
					<span class="ico-calendar"><?php the_time('d/M/Y') ?></span>
					<?php the_category() ?>
				</div>
				<div class="mask">
					<a href="<?php the_permalink() ?>"><h5 class="ico-link title-mask">Ler a notícia</h5></a>
				</div>
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

		<!-- Vídeos Box -->
		<article class="box-videos colunm-3">
		<h5 class="ico-tv-pref title-tvpref">Tv Prefeitura</h5>
			<!-- Função que faz a chamada dos posts -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<!-- Dados do post -->
			<div class="preview-video">
				<?php the_post_thumbnail('medium') ?>
				<div class="description">
					<span>Postado por: <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
					<span><?php comments_popup_link('Sem comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></span>
					<span><?php edit_post_link(('Editar')); ?></span>
					<p><?php the_excerpt(); ?></p>
				</div>			
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

		<!-- Mural de recados -->
		<article class="mural-recados colunm-3">
		<h5 class="ico-mural title-mural">Mural de Recados</h5>
			<!-- Função que faz a chamada dos posts -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<!-- Dados do post -->
			<div class="message-posts">
				<h4><a href="<?php the_permalink() ?>"><?php the_title()?></a></h4>
				<div class="description">
					<span>Postado por: <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
					<span><?php comments_popup_link('Sem comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></span>
					<span><?php edit_post_link(('Editar')); ?></span>
					<p><?php the_excerpt(); ?></p>
				</div>			
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


<!-- Bibliotecas Javascript -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="http://localhost/wp/wp-content/themes/Portal Prefeitura/js/events.js"></script>
<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

