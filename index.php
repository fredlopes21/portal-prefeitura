<!--Código do corpo do site -->
	<!-- Chamada do header -->
	<?php get_header(); ?>

	<header class="principal">
	<!-- Botão Chama menu -->
		<div id="get-menu" class="btn-menu-fixo grd-10">
			<div class="globe">
				<i class="ico-menu"></i>
			</div>
		</div>
	<!-- Menu principal -->
		<nav class="main-menu grd-20">
			<div id="close-menu">
				<i class="ico-close"></i>
			</div>
			<h4 class="title-menu">Menu</h4>
			<?php wp_nav_menu( array(
				'menu' => 'main-menu'
			) ); ?>
		</nav>

	<!-- Menu de acesso rápido -->
		<nav class="fast-access">
			<?php wp_nav_menu( array(
				'menu' => 'acesso-rapido'
			) ); ?>
		</nav>
		<!-- Cabeçalho com a logo input de buscas e previsão do tempo -->
		<div class="cabecalho grd-100">
			<div class="col-3 logo">
				<img src="http://localhost/wp/wp-content/uploads/2016/02/santalucia.png" class="col-3">	
				<h4 class="title"><?php bloginfo('name') ?></h4>
				<span><?php bloginfo('description') ?></span>
			</div>
			<div class="col-3 search-top">
				<input placeholder="Digite sua busca" <?php the_search_query(); ?> />
				<button class="ico-search" type="submit">Pesquisar</button>
			</div>
			<div class="col-3 clima">
				<iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" height="145" src="http://www.tempoagora.com.br/ta-widgets?cidades=SantaLucia-PR&amp;tipo=horizontal"></iframe>
			</div>
		</div>
		
		
		
		<!-- Slider -->
		<div class="slider-main grd-100">
			<ul class="slider-body">
			<!-- Função que faz a chamada dos posts -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li class="slider-item">
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

	</header><!--Fim do header.principal  -->

	<!-- Ínicio da #secao-2  -->
	<section id="secao-2" class="grd-100">

		<!-- Notícias Box -->
		<article class="box-noticias col-3">
		<h5 class="ico-news title-news">Notícias</h5>
		<!-- Função que faz a chamada dos posts -->
		<?php query_posts('showposts=5') ?>
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
					<a href="<?php the_permalink() ?>"><h5 class="ico-read-more title-mask">Ler a notícia</h5></a>
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
		<article class="box-videos col-3">
		<h5 class="ico-tv-pref title-tvpref">Tv Prefeitura</h5>
			<!-- Função que faz a chamada dos posts -->
			<?php query_posts('showposts=3') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<!-- Dados do post -->
			<div class="preview-video">
				<?php the_post_thumbnail('medium') ?>
				<div class="description">
					<h5><?php the_title() ?></h5>
					<a href="<?php the_permalink() ?>"><i class="ico-playtv"></i></a>
					<span class="ico-calendar"><?php the_time('d/M/Y') ?></span>
					<span><?php edit_post_link(('Editar')); ?></span>
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
		<article class="mural-recados col-3">
		<div class="timeline"></div>
		<h5 class="ico-mural title-mural">Mural de Recados</h5>
			<!-- Função que faz a chamada dos posts -->
			<?php query_posts('showposts=2') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<!-- Dados do post -->
			<div class="message-posts">
				<h6><?php the_title()?></h6>
				<p><?php the_excerpt(); ?></p>
				<footer>
					<span>Postado por: <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
					<span><?php comments_popup_link('Sem comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></span>
					<span><?php edit_post_link(('Editar')); ?></span>
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
		</article>		
	</section> <!-- Fim da #secao-2 -->

	<section id="secao-3" class="grd-100">

		<div class="main-panel grd-80">
			<div class="col-2 cidadao">
			<h5 class="ico-cidadao">Cidadão</h5>
				<ul class="grade-cidadao">
					<a href=""><li class="ico-casa">Casa</li></a>
					<a href=""><li class="ico-direito">Direitos</li></a>
					<a href=""><li class="ico-saude">Saúde</li></a>
					<a href=""><li class="ico-meio-ambiente">Meio Ambiente</li></a>
					<a href=""><li class="ico-documentos">Documentos</li></a>
					<a href=""><li class="ico-rel-internacional">Relações Internacionais</li></a>
					<a href=""><li class="ico-transporte">Transporte</li></a>
					<a href=""><li class="ico-rec-naturais">Recursos Naturais</li></a>
					<a href=""><li class="ico-trabalho">Trabalho</li></a>
					<a href=""><li class="ico-educacao">Educação e Ciência</li></a>
					<a href=""><li class="ico-seguranca">Segurança</li></a>
					<a href=""><li class="ico-cultura">Cultura e Lazer</li></a>
					<a href=""><li class="ico-receita">Receita</li></a>
					<a href=""><li class="ico-comunidade">Comunidade e Ação Social</li></a>
					<a href=""><li class="ico-tecnologia">Tecnologia e Comunicação</li></a>
					<a href=""><li class="ico-esporte">Esporte</li></a>
				</ul>
			</div>

			<div class="col-2 empresa">
				<h5 class="ico-empresa">Empresa</h5>
				<ul class="grade-empresa">
					<a href=""><li class="ico-investimento">Investindo no Paraná</li></a>
					<a href=""><li class="ico-licitacoes">Licitações e Fornecedores</li></a>
					<a href=""><li class="ico-educacao">Educação e Ciência</li></a>
					<a href=""><li class="ico-tecnologia">Tecnologia e Comunicação</li></a>
					<a href=""><li class="ico-documentos">Documentos</li></a>
					<a href=""><li class="ico-registro-comercial">Registro Comercial</li></a>
					<a href=""><li class="ico-comunidade">Comunidade e Ação Social</li></a>
					<a href=""><li class="ico-meio-ambiente">Meio Ambiente</li></a>
					<a href=""><li class="ico-trabalho">Trabalho</li></a>
					<a href=""><li class="ico-direito">Direitos</li></a>
					<a href=""><li class="ico-saude">Saúde</li></a>
					<a href=""><li class="ico-rec-naturais">Recursos Naturais</li></a>
					<a href=""><li class="ico-receita">Receita</li></a>
					<a href=""><li class="ico-rel-internacional">Relações Internacionais</li></a>
					<a href=""><li class="ico-transporte">Transporte</li></a>
					<a href=""><li class="ico-cultura">Cultura e Lazer</li></a>
				</ul>
			</div>
		</div>

		<div class="links-uteis grd-20">
			<h5 class="ico-download">Downloads</h5>
			<ul class="items-link">
				<a href=""><li>Cotação de Proposta Eletrônica</li></a>
				<a href=""><li>Arquivo de proposta.esl</li></a>
			</ul>
		</div>



		<div class="transparencia">
			<h5>Transparência</h5>
			<ul class="items-trans">
				<a class="col-8" href=""><li>Portal da Transparência</li></a>
				<a class="col-8" href=""><li>Diário Oficial</li></a>
				<a class="col-8" href=""><li>Contas Públicas</li></a>
				<a class="col-8" href=""><li>Contratos</li></a>
				<a class="col-8" href=""><li>Leis e Atos Normativos</li></a>
				<a class="col-8" href=""><li>Plano Diretor</li></a>
				<a class="col-8" href=""><li>Plano de San. Básico</li></a>
				<a class="col-8" href=""><li>Acesso a Informação</li></a>
			</ul>
		</div>

	</section> <!-- Fim da #secao-3 -->

	<!-- Ínicio da #secao-4 -->
	<section id="secao-4" class="grd-100">

		<div class="grd-80">
			<article class="col-2 infos">
				<h5>Prefeitura Municipal de Santa Lúcia-PR</h5>
				<div class="details">
					<span>Avenida do Rosário - 238</span>
					<span>CEP: 85795-000</span>
					<span>Fone/Fax: (45) 3288-1144</span>
					<span>CNPJ: 00.000.000/0000-00</span>
				</div>
				<img src="http://localhost/wp/wp-content/themes/Portal Prefeitura/img/mapa.jpeg">
			</article>
			<article class="form col-2">
				<h5>Fale com a Prefeitura</h5>
				<form>
					<input type="text" name="name" placeholder="Seu nome" />
					<input type="tel" name="telefone" placeholder="(00) 0000-0000" />
					<input type="email" name="email" placeholder="meuemail@domain.com" />
					<input type="text" name="cidade" placeholder="Minha Cidade" />
					<textarea name="msg" placeholder="Deixe sua Mensagem"></textarea>
				</form>
				<button class="btn-main enviar">Enviar</button>
				<button class="btn-main">Cancelar</button>
			</article>
		</div>
		<div class="grd-20 cont-sec">
			<h5>Contato Secretarias</h5>
			<span>Administração</span>
			<span>Agricultura</span>
			<span>Assistência Social</span>
			<span>Des. Ecônomico</span>
			<span>Educação e Cultura</span>
			<span>Esporte</span>
			<span>Finanças</span>
			<span>Gabinete</span>
			<span>Saúde</span>
		</div>
	</section>
	</main>


<!-- Bibliotecas Javascript -->
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="http://localhost/wp/wp-content/themes/Portal Prefeitura/js/events.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

