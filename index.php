<!--Código do corpo do site -->
	<!-- Chamada do header -->
	<?php get_header(); ?>
	<!-- Slider -->

		<div class="slider-main">
		<h5 class="title-destaque">Destaques</h5>
			<ul class="slider-body">
			<!-- Função que faz a chamada dos posts -->
			<?php query_posts('showposts=5&category_name=destaques') ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li class="slider-item">
					<?php the_post_thumbnail('large'); ?>
					<div class="description-slider">
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
					<div class="description-slider">
						<span>Erro 404</span>
						<span>Lamentamos mas não foram encontrados artigos</span>
					</div>
				</article>
			<?php endif; ?>
			</ul>
			<i id="prev-sld" class="fa fa-angle-left fa-4x"></i>
			<i id="next-sld" class="fa fa-angle-right fa-4x"></i>
		</div>


	<!-- Ínicio da #secao-2  -->
	<section id="secao-2" class="grd-100 parallax" data-speed="15">
		<!-- Notícias Box -->
		<article class="col-1 transition-100">
			<div class="box-noticias">
				<header class="cabecalho">
					<h5 class="title-news title-color">Notícias</h5>
					<i class="fa fa-angle-right fa-2x"></i>
					<i class="fa fa-angle-left fa-2x"></i>
				</header>
				
		<!-- Função que faz a chamada dos posts -->
				<?php 
					query_posts('showposts=5&category_name=noticias');			
					if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>
				<!-- Dados do post -->
				<div class="news col-5">
					<?php the_post_thumbnail('thumbnail') ?>
					<div class="choice-action">
						<a href="<?php the_permalink() ?>"><span class="fa fa-plus-square fa-2x">Ler na Íntegra</span></a>			
					</div>
					<div class="description">
						<span><i class="fa fa-calendar"></i><?php the_time('d/M/Y') ?></span>
						<span><i class="fa fa-user"></i><?php the_author() ?></span>
					</div>
					<div class="title-link">
						<a href="<?php the_permalink() ?>"><h6><?php the_title()?></h6></a>				
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
			</div>
		</article>

		<!-- #TV Prefeitura -->
		<article class="col-1">
			<div class="box-videos">
				<header class="cabecalho">
					<h5 class="title-tvpref title-color">Tv Prefeitura</h5>
					<i class="fa fa-angle-right fa-2x"></i>
					<i class="fa fa-angle-left fa-2x"></i>
				</header>
				<?php  
					query_posts('showposts=3&category_name=tvprefeitura');
					if (have_posts() ): while (have_posts() ) : the_post();
				?>
				<!-- Dados do post -->
				<div class="preview-video col-3">
					<div class="prev-img">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium') ?></a>
					</div>
					<div class="description">
						<a href="<?php the_permalink() ?>">
							<h5><?php the_title() ?></h5>
							<i class="fa fa-play-circle fa-5x"></i>
						</a>
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
			</div>
		</article>
	</section> <!-- Fim da #secao-2 -->

	<section id="secao-3" class="grd-100 parallax" data-speed="15">
	<header>
	<div class="col-2">
		<h2 class="title">Transparência</h2>
		<p>Essa seção visa assegurar a boa e correta aplicação dos recursos públicos. O objetivo é aumentar a transparência da gestão pública, permitindo que o cidadão acompanhe como o dinheiro público está sendo utilizado e ajude a fiscalizar.</p>
	</div>
	<div class="col-2 contact">
		<h5 class="title">Tem alguma dúvida?</h5>
		<span class="btn-callmodal">Entre em contato com os responsáveis</span>
	</div>
	</header>
		<div class="main-panel grd-90">
			<article class="col-4">
				<div class="box-edital">
					<h5 class="box-title">Editais <i id="editais" class="fa fa-info-circle" title="Do que se trata?"></i></h5>
					<ul class="content">
						<?php 
							query_posts('showposts=10&category_name=editais');
							if ( have_posts() ) : while ( have_posts() ) : the_post();
						?>
						<a href="<?php the_permalink() ?>" title="Baixar Edital"><li class="link-item"><?php the_title() ?><i class="fa fa-file-pdf-o" title="Arquivo em PDF"></i></li></a>

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
			</article>

			<article class="col-4">
				<div class="box-licitacoes">
					<h5 class="box-title">Licitações <i id="licitacoes" class="fa fa-info-circle" title="Do que se trata?"></i></h5>
					<ul class="content">
						<?php  
							query_posts('showposts=10&category_name=licitacoes');
							if (have_posts()): while(have_posts()): the_post();
						?>
						<a href="<?php the_permalink() ?>" title="Baixar Licitação"><li class="link-item"><?php the_title() ?> <i class="fa fa-file-word-o" title="Arquivo em MS Word"></i></li></a>

						<?php 
							endwhile; 
							else:
						?>

						<li>Erro 404 - Informações não encontradas!</li>

						<?php endif; ?>
					</ul>
				</div>
			</article>

			<article class="col-4">
				<div class="box-decretos">
					<h5 class="box-title">Decretos <i id="decretos" class="fa fa-info-circle" title="Do que se trata?"></i></h5>
					<ul class="content">
						<?php  
							query_posts('showposts=10&category_name=decretos');
							if(have_posts()): while(have_posts()): the_post();
						?>
						<a href="<?php the_permalink() ?>"><li class="link-item"><?php the_title() ?></li></a>

						<?php  
							endwhile;
							else:
						?>

						<li>Erro 404 - Informações não cadastradas!</li>

						<?php endif; ?>
					</ul>
				</div>
			</article>
			<article class="col-4">
				<div class="box-transp">				
					<h5 class="box-title">Links<i id="transparencia" class="fa fa-info-circle" title="Do que se trata?"></i></h5>
					<ul class="content">
						<a href="http://200.0.51.251:7474/esportal/esportalprincipal.index.logic" target="_blank"><li class="link-item">Portal da Transparência<i class="fa fa-external-link" title="Link Externo"></i></li></a>
						<a href="http://www.diariomunicipal.com.br/amp/#" target="_blank"><li class="link-item">Diário Oficial<i class="fa fa-external-link" title="Link Externo"></i></li></a>
						<a href="http://goo.gl/idPt6R" target="_blank"><li class="link-item">Contas Públicas<i class="fa fa-external-link" title="Link Externo"></i></li></a>
						<a href="http://200.0.51.251:7474/esportal/slccontrato.load.logic" target="_blank"><li class="link-item">Contratos<i class="fa fa-external-link" title="Link Externo"></i></li></a>
						<a href=""><li class="link-item">Leis e Atos Normativos<i class="fa fa-external-link" title="Link Externo"></i></li></a>
						<a href=""><li class="link-item">Plano Diretor<i class="fa fa-external-link" title="Link Externo"></i></li></a>
						<a href=""><li class="link-item">Plano de San. Básico<i class="fa fa-external-link" title="Link Externo"></i></li></a>
						<a href=""><li class="link-item">Acesso a Informação<i class="fa fa-external-link" title="Link Externo"></i></li></a>
						<a href="http://www.governotransparente.com.br/"><li class="link-item">Governo Transparente <i class="fa fa-external-link" title="Link Externo"></i></li></a>
					</ul>
				</div>
			</article>
		</div>
	</section> <!-- Fim da #secao-3 -->

	<!-- Ínicio da #secao-4 -->
	<section id="secao-4" class="grd-100 parallax" data-speed="15">
		<div class="grd-90">		
			<h2 class="col-2 title-color">Contato</h2>
			<div class="col-2 social-media">
				<h6 class="title-color">Siga a Prefeitura nas redes sociais</h6>
				<a href="#" target="_blank" title="Página no Facebook"><i class="fa fa-facebook-official fa-3x"></i></a>
				<a href="#" target="_blank" title="Siga no Twitter"><i class="fa fa-twitter-square fa-3x"></i></a>
				<a href="#" target="_blank" title="Canal no Youtube"><i class="fa fa-youtube-square fa-3x"></i></a>
			</div>
			<article class="col-2 form">
				<h5 class="title">Fale com a Prefeitura <i class="fa fa-envelope" title="E-mail"></i></h5>
				<form>
					<input type="text" name="name" placeholder="Digite seu nome" />
					<input type="tel" name="telefone" placeholder="Digite seu telefone" />
					<input type="email" name="email" placeholder="Digite seu E-mail" />
					<input type="text" name="cidade" placeholder="Digite sua Cidade" />
					<textarea name="msg" placeholder="Deixe sua Mensagem"></textarea>
				</form>
				<button class="btn-main cancelar">Cancelar</button>
				<button class="btn-main enviar">Enviar</button>
			</article>
			<article class="col-2 infos">
				<h5 class="title">Endereço <i class="fa fa-map" title="Mapa"></i></h5>
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3603.9040735760673!2d-53.5699739!3d-25.4080214!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sus!4v1459530937543" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				<ul class="details col-1">
					<li><strong>Avenida do Rosário - 238</strong> <i class="fa fa-copy" title="Copiar"></i></li>
					<li>CEP: <strong>85795-000</strong> <i class="fa fa-copy" title="Copiar"></i></li>
					<li>Fone/Fax: <strong>(45) 3288-1144</strong> <i class="fa fa-copy" title="Copiar"></i></li>
					<li>CNPJ: <strong>00.000.000/0000-00</strong> <i class="fa fa-copy" title="Copiar"></i></li>
				</ul>
			</article>
		</div>
		<!-- <div class="grd-20 cont-sec">
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
		</div> -->
	</section>
	</main>

<!-- #include scripts -->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="http://izzyweb.com.br/salu/wp-content/themes/Portal Prefeitura/js/events.js"></script>
<!-- <script type="text/javascript" src="http://localhost/wp/wp-content/themes/Portal Prefeitura/js/events.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

