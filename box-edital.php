<!-- Mural de recados -->
		<article class="col-2">
			<div class="mural-recados">
				<header class="cabecalho">
					<h5 class="title-mural"><i class="fa fa-bullhorn"></i>Mural de Recados</h5>
					<i class="fa fa-angle-right"></i>
					<i class="fa fa-angle-left"></i>
				</header>
				<!-- Função que faz a chamada dos posts -->
				<?php 
					query_posts('showposts=2&cat=15');
					if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				?> 
				<!-- Dados do post -->
				<div class="message-posts">
					<h6><?php the_title()?></h6>
					<div class="description">
						<span>Autor: <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
						<span><?php comments_popup_link('Sem comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></span>
						<span><?php edit_post_link(('Editar')); ?></span>
					</div>
					<?php the_excerpt(); ?>
					<i class="fa fa-arrows fa-2x" title="Expandir Recado"></i>
					<footer>
					<div class="social-share">
					<span>Compartilhe!</span>
						<i class="fa fa-facebook"></i>
						<i class="fa fa-twitter"></i>
					</div>
					</footer>
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
			</div>
		</article>		