<!--Código do corpo do site -->
	<!-- Chamada do header -->
	<?php get_header(); ?>

	<header class="principal">

	<!-- Menu principal -->
		<nav class="main-menu grd-20">
			<?php wp_nav_menu( array(
				'menu' => 'main-menu'
			) ); ?>
		</nav>

	<!-- Menu de acesso rápido -->
		<nav class="fast-access grd-100">
			<i id="get-menu" class="fa fa-navicon fa-4x"></i>
			<i id="close-menu" class="fa fa-times fa-4x"></i>
			<?php wp_nav_menu( array(
				'menu' => 'acesso-rapido'
			) ); ?>
		</nav>
		<!-- Cabeçalho com a logo input de buscas e previsão do tempo -->
		<div class="cabecalho grd-100">
			<div class="col-3 logo">
				<img src="http://localhost/wp/wp-content/uploads/2016/02/santalucia.png" class="col-3">	
				<h2 class="title"><?php bloginfo('name') ?></h2>
				<p class="sub-title"><?php bloginfo('description') ?></p>
			</div>
			<div class="col-3 search-top">
				<input placeholder="Faça sua busca" <?php the_search_query(); ?> />
				<button class="fa fa-search" type="submit">Pesquisar</button>
			</div>
			<div class="col-3 clima">
				<iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" height="145" src="http://www.tempoagora.com.br/ta-widgets?cidades=SantaLucia-PR&amp;tipo=horizontal"></iframe>
			</div>
		</div>
		
		
		
		<!-- Slider -->

		<h4 class="title-destaque"><i class="fa fa-photo"></i>Destaques</h4>
		<div class="slider-main">
			<ul class="slider-body">
			<!-- Função que faz a chamada dos posts -->
			<?php query_posts('showposts=5') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li class="slider-item">
					<?php the_post_thumbnail('large'); ?>
					<div class="description">
					<a href="<?php the_permalink() ?>">
						<h1 class="slider-title"><?php the_title() ?></h1>
						<span><i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?></span>
						<p class="slider-preview" <?php the_excerpt() ?>></p>
					</div>
					</a>
				</li>			

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
			</ul>
		</div>

	</header><!--Fim do header.principal  -->

	<!-- Ínicio da #secao-2  -->
	<section id="secao-2" class="grd-100">

		<!-- Notícias Box -->
		<article class="box-noticias col-3">
		<h5 class="title-news"><i class="fa fa-newspaper-o"></i>Notícias</h5>
		<!-- Função que faz a chamada dos posts -->
		<?php 
			query_posts('showposts=5');
			
			
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		<!-- Dados do post -->
			<div class="news">
				<?php the_post_thumbnail('thumbnail') ?>
				<div class="description">
					<span><i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?></span>
					<?php the_category() ?>
					<h6><?php the_title()?></h6>
					<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
				</div>
				<div class="mask">
					<a href="<?php the_permalink() ?>"><i class="fa fa-external-link fa-2x" ></i><h5 class="title-mask">Ler a notícia</h5></a>
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
		<h5 class="title-tvpref"><i class="fa fa-television"></i>Tv Prefeitura</h5>
			<!-- Função que faz a chamada dos posts -->
			<?php query_posts('showposts=3') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
			<!-- Dados do post -->
			<div class="preview-video">
				<?php the_post_thumbnail('medium') ?>
				<div class="description">
					<h5><?php the_title() ?></h5>
					<a href="<?php the_permalink() ?>"><i class="fa fa-play-circle"></i></a>
					<span><i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?></span>
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
		<h5 class="title-mural"><i class="fa fa-bullhorn"></i>Mural de Recados</h5>
			<!-- Função que faz a chamada dos posts -->
			<?php query_posts('showposts=2') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
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
		</article>		
	</section> <!-- Fim da #secao-2 -->

	<section id="secao-3" class="grd-100">
		<div class="transparencia grd-70">
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

		<div class="main-panel grd-80">
			<div class="col-2 cidadao">
			<h5><i class="fa fa-child"></i>Cidadão</h5>
				<ul class="grade-cidadao">
					<a href=""><li><i class="fa fa-home fa-2x"></i>Casa</li></a>
					<a href=""><li><i class="fa fa-balance-scale fa-2x"></i>Direitos</li></a>
					<a href=""><li><i class="fa fa-medkit fa-2x"></i>Saúde</li></a>
					<a href=""><li><i class="fa fa-tree fa-2x"></i>Meio Ambiente</li></a>
					<a href=""><li><i class="fa fa-file-archive-o fa-2x"></i>Documentos</li></a>
					<a href=""><li><i class="fa fa-globe fa-2x"></i>Relações Internacionais</li></a>
					<a href=""><li><i class="fa fa-bus fa-2x"></i>Transporte</li></a>
					<a href=""><li><i class="fa fa-leaf fa-2x"></i>Recursos Naturais</li></a>
					<a href=""><li><i class="fa fa-cogs fa-2x"></i>Trabalho</li></a>
					<a href=""><li><i class="fa fa-institution fa-2x"></i>Educação e Ciência</li></a>
					<a href=""><li><i class="fa fa-lock fa-2x"></i>Segurança</li></a>
					<a href=""><li><i class="fa fa-music fa-2x"></i>Cultura e Lazer</li></a>
					<a href=""><li><i class="fa fa-money fa-2x"></i>Receita</li></a>
					<a href=""><li><i class="fa fa-group fa-2x"></i>Comunidade e Ação Social</li></a>
					<a href=""><li><i class="fa fa-wifi fa-2x"></i>Tecnologia e Comunicação</li></a>
					<a href=""><li><i class="fa fa-soccer-ball-o fa-2x"></i>Esporte</li></a>
				</ul>
			</div>

			<div class="col-2 empresa">
				<h5><i class="fa fa-building"></i>Empresa</h5>
				<ul class="grade-empresa">
					<a href=""><li><i class="fa fa-line-chart fa-2x"></i>Investindo no Paraná</li></a>
					<a href=""><li><i class="fa fa-file fa-2x"></i>Licitações e Fornecedores</li></a>
					<a href=""><li><i class="fa fa-institution fa-2x"></i>Educação e Ciência</li></a>
					<a href=""><li><i class="fa fa-wifi fa-2x"></i>Tecnologia e Comunicação</li></a>
					<a href=""><li><i class="fa fa-archive fa-2x"></i>Documentos</li></a>
					<a href=""><li><i class="fa fa-suitcase fa-2x"></i>Registro Comercial</li></a>
					<a href=""><li><i class="fa fa-group fa-2x"></i>Comunidade e Ação Social</li></a>
					<a href=""><li><i class="fa fa-tree fa-2x"></i>Meio Ambiente</li></a>
					<a href=""><li><i class="fa fa-cogs fa-2x"></i>Trabalho</li></a>
					<a href=""><li><i class="fa fa-balance-scale fa-2x"></i>Direitos</li></a>
					<a href=""><li><i class="fa fa-medkit fa-2x"></i>Saúde</li></a>
					<a href=""><li><i class="fa fa-leaf fa-2x"></i>Recursos Naturais</li></a>
					<a href=""><li><i class="fa fa-money fa-2x"></i>Receita</li></a>
					<a href=""><li><i class="fa fa-globe fa-2x"></i>Relações Internacionais</li></a>
					<a href=""><li><i class="fa fa-bus fa-2x"></i>Transporte</li></a>
					<a href=""><li><i class="fa fa-music fa-2x"></i>Cultura e Lazer</li></a>
				</ul>
			</div>
		</div>

		<div class="links-uteis grd-20">
			<h5><i class="fa fa-download"></i>Downloads</h5>
			<ul class="items-link">
				<a href=""><li><i class="fa fa-caret-square-o-down"></i>Cotação de Proposta Eletrônica</li></a>
				<a href=""><li><i class="fa fa-caret-square-o-down"></i>Arquivo de proposta.esl</li></a>
			</ul>
		</div>

	</section> <!-- Fim da #secao-3 -->

	<!-- Ínicio da #secao-4 -->
	<section id="secao-4" class="grd-100">

		<div class="grd-80">
			<article class="col-2 infos">
				<h5>Prefeitura Municipal de Santa Lúcia-PR</h5>
				<div class="details">
					<span><i class="fa fa-location-arrow"></i>Avenida do Rosário - 238</span>
					<span><i class="fa fa-location-arrow"></i>CEP: 85795-000</span>
					<span><i class="fa fa-location-arrow"></i>Fone/Fax: (45) 3288-1144</span>
					<span><i class="fa fa-location-arrow"></i>CNPJ: 00.000.000/0000-00</span>
				</div>
				<h6><i class="fa fa-street-view"></i>Como chegar</h6>
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

<!-- #include scripts -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="http://localhost/wp/wp-content/themes/Portal Prefeitura/js/events.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

