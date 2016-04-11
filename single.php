<!--Código do corpo do post -->
	<!-- Chamada do header -->
	<?php get_header(); ?>
	<main class="content">
		<!-- Função que faz a chamada dos posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Modo leitura -->
		<article class="modo-leitura">
			<div class="opcoes-de-leitura">
				<i class="fa fa-close col-5" title="Sair do modo leitura"></i>
				<i class="fa fa-close col-5" title="Sair do modo leitura"></i>
				<i class="fa fa-close col-5" title="Sair do modo leitura"></i>
			</div>
			<div class="grd-80 texto">
				<h1 class="title-post"><?php the_title()?></h1>
			
				<div class="text">
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</article>
		<!-- Dados do post -->
		<article id="body-post" class="grd-80">
			<h1 class="title-post"><?php the_title()?></h1>
			
			<div class="description">
				<span class="col-6" title="Autor"><i class="fa fa-user"></i><?php the_author() ?></span>
				<span class="col-6" title="Data de Postagem"><i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?></span>
				<div class="col-2" title="Categorias">
					<i class="fa fa-sitemap"></i>
					<?php the_category(); ?>
				</div>
				<div class="col-8">					
					<i class="fa fa-text-width" title="Entrar em modo leitura"></i>
				</div>
				<span><?php edit_post_link(('Editar')); ?></span>
			</div>
			<div class="text">
				<p><?php the_content(); ?></p>
			</div>

			<?php endwhile; else: ?>
				<!-- Senão - Mostra quando não existem posts -->
				<article class="post">
					<h2>Esse post não existe!</h2>
					<div class="description">
						<span>Erro 404</span>
						<span>Lamentamos mas não foram encontrados artigos</span>
					</div>
				</article>
			<?php endif; ?>

			<div class="share-box col-1">
				<h6 class="col-8">Compartilhe! <i class="fa fa-share-alt"></i></h6>
				<div class="col-10 twitter">
					<a href="<?php the_permalink() ?>" class="twitter-share-button" data-lang="pt" data-size="medium" data-hashtags="SantaLuciaPR, CrescendoEmHarmonia">Tweetar</a> 
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
					</script>
				</div>
				<div class="col-10">
					<div class="g-plusone"></div>
				</div>
				<div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button_count">
				</div>
			</div>
			<div class="comentarios col-2">
				<h6>Comentários</h6>
				<span>A Prefeitura de Santa Lúcia-PR e o autor da matéria não se responsabilizam por nenhum comentário abaixo.</span>
				<span>Os autores de comentários que contenham <strong>racismo</strong>, <strong>injuria</strong>, <strong>calúnia</strong>, <strong>difamação</strong>, bem como qualquer outro crime ao expressar opinião estarão sujeitos a completa responsabilização pelos mesmos, sem prejuízo das penas previstas na legislação brasileira.</span>
				<div class="fb-comments col-1" data-href="<?php the_permalink() ?>" data-numposts="5">
				</div>
			</div>
		</article>
	</main>

<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
