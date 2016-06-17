	<?php get_header(); ?>
	<section id="destaques" class="grd-90">
		<div class="bg-color"></div>
			<div class="title-container">
				<h5 class="title-section">seção de destaques</h5>
				<?php $timezone_format = ('j \d\e F \d\e Y'); ?>
				<p class="today">Santa Lúcia <?php print date_i18n($timezone_format); ?></p>
			</div>
			<div class="widget-weather grd-50" style="text-align:  center;">
				<span class="title">Previsão do Tempo</span>
				<div id="cont_e626cd83641a215bd7894242776b0543"><span id="h_e626cd83641a215bd7894242776b0543"></span><script type="text/javascript" async src="http://www.tempo.pt/wid_loader/e626cd83641a215bd7894242776b0543"></script></div>
			</div>
			<div id="slider">
				<ul class="slider-body parallax" data-speed="150">
				<!-- Função que faz a chamada dos posts -->
				<?php query_posts('showposts=3&category_name=destaques') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li class="slider-item">
						<?php the_post_thumbnail('large'); ?>
						<figcaption>
						<span class="date">Santa Lúcia
							<i>
								<svg height="15px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="15px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"/><g id="date"><g><path d="M26,4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4h-4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4H0v28    h32V4H26z M10,28H6v-4h4V28z M10,20H6v-4h4V20z M18,28h-4v-4h4V28z M18,20.008h-4v-4h4V20.008z M22,28v-4h4L22,28z M26,20h-4v-4h4 V20z" /><path d="M8,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S8,7.105,8,6z"/><path d="M20,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S20,7.105,20,6z"/></g></g></svg>
							</i><?php the_time('d/M/Y') ?>
						</span>
							<a href="<?php the_permalink() ?>">
								<h1 class="slider-title"><?php the_title() ?></h1>
							</a>
						</figcaption>
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
				<i id="prev-sld" class="fa fa-angle-left fa-4x"></i>
				<i id="next-sld" class="fa fa-angle-right fa-4x"></i>
				</ul>
				<ul id="slider-control">
					<li class="ctrl-item current"></li>
					<li class="ctrl-item"></li>
					<li class="ctrl-item"></li>
					<li class="ctrl-item"></li>
					<li class="ctrl-item"></li>
				</ul>
			</div>
	</section>

	<!-- Ínicio da #secao-2  -->
	<section id="noticias" class="grd-100 parallax" data-speed="15">
		<div class="container grd-90">
			<!-- Notícias Box -->
			<article class="col-1 transition-100">
				<div class="title-container">
					<h5 class="title-section">seção de notícias</h5>
					<p class="today">Santa Lúcia <?php print date_i18n($timezone_format); ?></p>
				</div>
				<div class="box-noticias" data-speed="1500">
					<header class="cabecalho">
						<i class="fa fa-angle-right fa-2x"></i>
						<i class="fa fa-angle-left fa-2x"></i>
					</header>
					<div class="wrapper-news">
						<?php 
							query_posts('showposts=4&category_name=noticias');			
							if ( have_posts() ) : while ( have_posts() ) : the_post();
						?>
					
						<div class="news-cards col-5">
							<?php the_post_thumbnail('thumbnail') ?>
							<div class="description-news">
								<a href="<?php the_permalink() ?>"><p class="title"><?php the_title()?></p></a>
								<span class="divider"></span>
								<span class="date">
									<i><svg height="12px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="12px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"/><g id="date"><g><path d="M26,4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4h-4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4H0v28    h32V4H26z M10,28H6v-4h4V28z M10,20H6v-4h4V20z M18,28h-4v-4h4V28z M18,20.008h-4v-4h4V20.008z M22,28v-4h4L22,28z M26,20h-4v-4h4 V20z" /><path d="M8,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S8,7.105,8,6z"/><path d="M20,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S20,7.105,20,6z"/></g></g></svg>
									</i><?php the_time('d/M/Y') ?>
								</span>
								<span class="author"><i class="fa fa-user"></i><?php the_author() ?></span>
							</div>
						</div>	
						<?php endwhile ?>
						<?php else: ?>
							<!-- Senão - Mostra quando não existem posts -->
							<div class="post-404">
								<h2>Nada encontrado</h2>
								<div class="description">
									<span>Erro 404</span>
									<span>Lamentamos mas não foram encontrados artigos</span>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<ul id="slider-control-news">
					<li class="ctrl-item current"></li>
					<li class="ctrl-item"></li>
					<li class="ctrl-item"></li>
					<li class="ctrl-item"></li>
					<li class="ctrl-item"></li>
				</ul>
			</article>

			<!-- #TV Prefeitura -->
			<article class="col-1">
			<h2 class="title-tvpref">Tv Prefeitura <i><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 50 50" height="70px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="70px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><rect fill="none" height="30" stroke="#982C48" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" width="48" x="1" y="8"/><line fill="none" stroke="#982C48" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" x1="39" x2="11" y1="42" y2="42"/><path fill="#982C48" d="M31.977,23.049l-11.021-6.363c-0.197-0.113-0.441-0.113-0.637,0C20.121,16.799,20,17.009,20,17.236v12.729  c0,0.228,0.121,0.438,0.318,0.551c0.098,0.057,0.208,0.085,0.318,0.085c0.109,0,0.22-0.028,0.318-0.085l11.021-6.363  c0.197-0.114,0.318-0.324,0.318-0.552S32.174,23.163,31.977,23.049z"/></svg></i> <span class="divider"></span></h2>
				<div class="box-tv-prefeitura">
					<header class="cabecalho">
						<h2 class="title-tvpref title-color">Tv Prefeitura</h2>
						<i class="fa fa-angle-right fa-2x"></i>
						<i class="fa fa-angle-left fa-2x"></i>
					</header>
					<div class="tv-pref">
						<?php  
							query_posts('showposts=2&category_name=tvprefeitura');
							if (have_posts() ): while (have_posts() ) : the_post();
						?>
					
						<div class="wrapper-video col-3">
							<?php the_post_thumbnail('medium') ?>
							<div class="description-tvpref">
								<a href="<?php the_permalink() ?>">
									<p class="title"><?php the_title() ?></p>
									<i class="play"><svg height="64px" width="64px" enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="outline"><path d="M32,2c16.542,0,30,13.458,30,30S48.542,62,32,62S2,48.542,2,32S15.458,2,32,2 M32,0C14.327,0,0,14.327,0,32   s14.327,32,32,32c17.673,0,32-14.327,32-32S49.673,0,32,0L32,0z"/><path d="M21.58,18.871l24.593,13.13L21.58,45.129V18.871 M19.58,15.536v32.928L50.42,32.001L19.58,15.536L19.58,15.536z"/></g></svg></i>
								</a>
								<span class="date">
									<i><svg height="12px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="12px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"/><g id="date"><g><path d="M26,4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4h-4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4H0v28    h32V4H26z M10,28H6v-4h4V28z M10,20H6v-4h4V20z M18,28h-4v-4h4V28z M18,20.008h-4v-4h4V20.008z M22,28v-4h4L22,28z M26,20h-4v-4h4 V20z" /><path d="M8,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S8,7.105,8,6z"/><path d="M20,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S20,7.105,20,6z"/></g></g></svg></i><?php the_time('d/M/Y') ?>
								</span>
								<span class="author"><?php edit_post_link(('Editar')); ?></span>
							</div>
						</div>

						<?php endwhile ?>
						<?php else: ?>
							<!-- Senão - Mostra quando não existem posts -->
							<div class="post-404">
								<h2>Nada encontrado</h2>
								<div class="description">
									<span>Erro 404</span>
									<span>Lamentamos mas não foram encontrados artigos</span>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<ul id="slider-control-tvpref">
					<li class="ctrl-item current"></li>
					<li class="ctrl-item"></li>
					<li class="ctrl-item"></li>
				</ul>
			</article>
		</div>
	</section> <!-- Fim da #secao-2 -->

	<section id="transparencia" class="grd-100 parallax" data-speed="15">
		<div class="grd-90">
			<div class="back-color">
				<div class="title-container">
					<h5 class="title-section">seção de tranparência</h5>
					<p class="today">Santa Lúcia <?php print date_i18n($timezone_format); ?></p>
				</div>
			<div class="btn-boxes-mobile">
				<h4 class="title">Selecione um serviço</h4>
				<div class="btn-box">
					<h6 class="title-box">Editais</h6>
					<i>
						<svg height="60px" width="60px" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="72.2,50.2 48.7,73.7 50.2,75.3 76.4,49.1 50.2,22.9 48.7,24.5 72.2,48 18.5,48 18.5,50.2 "/></svg>
					</i>
				</div>
				<div class="btn-box">
					<h6 class="title-box">Licitações</h6>
					<i>
						<svg height="60px" width="60px" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="72.2,50.2 48.7,73.7 50.2,75.3 76.4,49.1 50.2,22.9 48.7,24.5 72.2,48 18.5,48 18.5,50.2 "/></svg>
					</i>
				</div>
				<div class="btn-box">
					<h6 class="title-box">Decretos</h6>
					<i>
						<svg height="60px" width="60px" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="72.2,50.2 48.7,73.7 50.2,75.3 76.4,49.1 50.2,22.9 48.7,24.5 72.2,48 18.5,48 18.5,50.2 "/></svg>
					</i>
				</div>
				<div class="btn-box">
					<h6 class="title-box">Transparência</h6>
					<i>
						<svg height="60px" width="60px" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="72.2,50.2 48.7,73.7 50.2,75.3 76.4,49.1 50.2,22.9 48.7,24.5 72.2,48 18.5,48 18.5,50.2 "/></svg>
					</i>
				</div>
				<div class="btn-box">
					<h6 class="title-box">Links úteis</h6>
					<i>
						<svg height="60px" width="60px" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="72.2,50.2 48.7,73.7 50.2,75.3 76.4,49.1 50.2,22.9 48.7,24.5 72.2,48 18.5,48 18.5,50.2 "/></svg>
					</i>
				</div>
				<div class="btn-box">
					<h6 class="title-box">Proc. Geral da República</h6>
					<i>
						<svg height="60px" width="60px" enable-background="new 0 0 100 100" id="Layer_1" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="72.2,50.2 48.7,73.7 50.2,75.3 76.4,49.1 50.2,22.9 48.7,24.5 72.2,48 18.5,48 18.5,50.2 "/></svg>
					</i>
				</div>
			</div>
			<div class="box-links">
				<h4 class="title">Links úteis</h4>
				<ul class="content-links">
					<li class="link-item"><a href="#">http://www.google.com.br</a></li>
					<li class="link-item"><a href="#">http://www.google.com.br</a></li>
					<li class="link-item"><a href="#">http://www.google.com.br</a></li>
					<li class="link-item"><a href="#">http://www.google.com.br</a></li>
					<li class="link-item"><a href="#">http://www.google.com.br</a></li>
					<li class="link-item"><a href="#">http://www.google.com.br</a></li>
					<li class="link-item"><a href="#">http://www.google.com.br</a></li>
					<li class="link-item"><a href="#">http://www.google.com.br</a></li>
				</ul>
			</div>
			<div class="main-panel grd-90">
				<article class="col-4 box">
					<div class="wrapper-edital">
						<header class="cabecalho">					
							<h5 class="title">Editais <i id="question" class="fa fa-info-circle" title="Do que se trata?"></i></h5>
							<div class="description">
								<span class="resumo" title="Resumo do objeto">Resumo do Objeto</span>
								<span class="calendar" title="Data da postagem">
									<i ><svg height="12px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="12px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"/><g id="date"><g><path d="M26,4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4h-4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4H0v28    h32V4H26z M10,28H6v-4h4V28z M10,20H6v-4h4V20z M18,28h-4v-4h4V28z M18,20.008h-4v-4h4V20.008z M22,28v-4h4L22,28z M26,20h-4v-4h4 V20z" /><path d="M8,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S8,7.105,8,6z"/><path d="M20,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S20,7.105,20,6z"/></g></g></svg></i>
								</span>
							</div>
						</header>
						<ul class="content-list">
							<?php 
								query_posts('showposts=10&category_name=editais');
								if ( have_posts() ) : while ( have_posts() ) : the_post();
							?>
							<a href="<?php the_permalink() ?>">
								<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
							</a>

							<?php 
								endwhile; 
								else: 
							?>
							<i class="pac-ghost">
								<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
							</i>
							<p class="title-404">Desculpe, não temos itens nessa categoria.</p>
							<?php endif; ?>
						</ul>
					</div>
				</article>		

				<article class="col-4 box">
					<div class="wrapper-licitacoes">
						<header class="cabecalho">
							<h5 class="title">Licitações <i id="question" class="fa fa-info-circle" title="Do que se trata?"></i></h5>
							<div class="description">
								<span class="resumo" title="Resumo do objeto">Resumo do Objeto</span>
								<span class="calendar" title="Data da postagem">
									<i ><svg height="12px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="12px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"/><g id="date"><g><path d="M26,4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4h-4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4H0v28    h32V4H26z M10,28H6v-4h4V28z M10,20H6v-4h4V20z M18,28h-4v-4h4V28z M18,20.008h-4v-4h4V20.008z M22,28v-4h4L22,28z M26,20h-4v-4h4 V20z" /><path d="M8,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S8,7.105,8,6z"/><path d="M20,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S20,7.105,20,6z"/></g></g></svg></i>
								</span>
							</div>
						</header>
						<div class="wrapper-filter">
							<input id="filter" list="options-filter" placeholder="Selecione uma modalidade" />
							<datalist name="options-filter" id="options-filter">
								<option name="compraDireta" value="Compra Direta">Compra Direta</option>
								<option name="concorrencia" value="Concorrência">Concorrência</option>
								<option name="concursos" value="Concursos">Concursos</option>
								<option name="convite" value="Convite">Convite</option>
								<option name="leilao" value="Leilão">Leilão</option>
								<option name="pregao" value="Pregão">Pregão</option>
								<option name="dispensa" value="Processo de Dispensa">Processo de Dispensa</option>
								<option name="inegibilidade" value="Processo de Inegibilidade">Processo de Inegibilidade</option>
								<option name="rdc" value="Regime diferenciado de contratações">Regime Diferenciado de Contratações</option>
								<option name="tomadadePrecos" value="Tomada de Preços">Tomada de Preços</option>
							</datalist>
							</div>
							<!-- Lista de Compras Diretas cadastradas -->
							<ul id="compradireta">
								<?php  
									query_posts('showposts=10&category_name=compradireta');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
							<!-- Lista de Concorrência cadastradas -->
							<ul id="concorrencia">
								<?php  
									query_posts('showposts=10&category_name=concorrencia');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>
								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>
								

								<?php endif; ?>
							</ul>
							<!-- Lista de Concursos cadastrados -->
							<ul id="concursos">
								<?php  
									query_posts('showposts=10&category_name=concurso');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
							<!-- Lista de Convites cadastrados -->
							<ul id="convite">
								<?php  
									query_posts('showposts=10&category_name=convite');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
							<!-- Lista de Leilões cadastrados -->
							<ul id="leilao">
								<?php  
									query_posts('showposts=10&category_name=leilao');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
							<!-- Lista de Pregões cadastrados -->
							<ul id="pregao">
								<?php  
									query_posts('showposts=10&category_name=pregao');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
							<!-- Lista de Processo de dispensas cadastrados -->
							<ul id="processodedispensa">
								<?php  
									query_posts('showposts=10&category_name=processodedispensa');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
							<!-- Lista de Processo de Inegibilidade cadastrados -->
							<ul id="processodeinegibilidade">
								<?php  
									query_posts('showposts=10&category_name=processodeinegibilidade');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>" title="Baixar Licitação"><li class="link-item"><?php the_title() ?> <i class="fa fa-file-word-o" title="Arquivo em MS Word"></i></li></a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
							<!-- Lista de RDC cadastrados -->
							<ul id="rdc">
								<?php  
									query_posts('showposts=10&category_name=rdc');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
							<!-- Lista de Tomada de Preços cadastrados -->
							<ul id="tomadadeprecos">
								<?php  
									query_posts('showposts=10&category_name=tomadadeprecos');
									if (have_posts()): while(have_posts()): the_post();
								?>
								<a href="<?php the_permalink() ?>">
									<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
								</a>

								<?php 
									endwhile; 
									else:
								?>

								<i class="pac-ghost">
									<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
								</i>
								<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

								<?php endif; ?>
							</ul>
					</div>
				</article>

				<article class="col-4 box">
					<div class="wrapper-decretos">
						<header class="cabecalho">
							<h5 class="title">Decretos <i id="question" class="fa fa-info-circle" title="Do que se trata?"></i></h5>
							<div class="description">
								<span class="resumo" title="Resumo do objeto">Resumo do Objeto</span>
								<span class="calendar" title="Data da postagem">
									<i ><svg height="12px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="12px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"/><g id="date"><g><path d="M26,4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4h-4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4H0v28    h32V4H26z M10,28H6v-4h4V28z M10,20H6v-4h4V20z M18,28h-4v-4h4V28z M18,20.008h-4v-4h4V20.008z M22,28v-4h4L22,28z M26,20h-4v-4h4 V20z" /><path d="M8,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S8,7.105,8,6z"/><path d="M20,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S20,7.105,20,6z"/></g></g></svg></i>
								</span>
							</div>
						</header>
						<ul class="content-list">
							<?php  
								query_posts('showposts=10&category_name=decretos');
								if(have_posts()): while(have_posts()): the_post();
							?>
							<a href="<?php the_permalink() ?>">
								<li class="link-item"  title="<?php the_title() ?>"><?php the_title() ?><span class="date" title="Data da postagem"><?php the_time("d/m/y") ?></span></li>
							</a>

							<?php  
								endwhile;
								else:
							?>
							<i class="pac-ghost">
								<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.0//EN'  'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'><svg enable-background="new 0 0 24 32" height="42" overflow="visible" viewBox="0 0 24 32" width="34" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Layer_2"><g id="Green_x5F_pacman_ghost"><path d="M12,0C5.373,0,0,5.373,0,12v20l3-3l3,3l3-3l3,3l3-3l3,3l3-3l3,3V12        C24,5.373,18.627,0,12,0z" fill="#34B67A" id="Body"/><path d="M21.325,11.125C20.775,10.444,19.943,10,19,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C20.555,14.597,20,13.866,20,13        S20.554,11.403,21.325,11.125z" fill="#E6E6E6" id="Right_x5F_eye"/><path d="M13.325,11.125C12.775,10.444,11.943,10,11,10        c-1.657,0-3,1.343-3,3s1.343,3,3,3c0.943,0,1.775-0.445,2.325-1.125C12.555,14.597,12,13.866,12,13        S12.554,11.403,13.325,11.125z" fill="#E6E6E6" id="Left_x5F_eye"/><path d="M22,13c0-0.713-0.26-1.36-0.675-1.875        C20.554,11.403,20,12.134,20,13s0.555,1.597,1.325,1.875C21.74,14.36,22,13.713,22,13z" fill="#25374B" id="Right_x5F_eyeball"/><path d="M14,13c0-0.713-0.26-1.36-0.675-1.875        C12.554,11.403,12,12.134,12,13s0.555,1.597,1.325,1.875C13.74,14.36,14,13.713,14,13z" fill="#25374B" id="Left_x5F_eyeball"/></g></g></g></svg>
							</i>
							<p class="title-404">Desculpe, não temos itens nessa categoria.</p>

							<?php endif; ?>
						</ul>
					</div>
				</article>
				<article class="col-4 box">
					<div class="wrapper-transp">
						<header class="cabecalho">
							<h5 class="title">Links<i id="question" class="fa fa-info-circle" title="Do que se trata?"></i></h5>
							<div class="description">
								<span class="resumo" title="Resumo do objeto">Resumo do Objeto</span>
								<span class="calendar" title="Data da postagem">
									<i ><svg height="12px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="12px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Layer_1"/><g id="date"><g><path d="M26,4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4h-4v2.047c0,2.211-1.789,4-4,4s-4-1.789-4-4V4H0v28    h32V4H26z M10,28H6v-4h4V28z M10,20H6v-4h4V20z M18,28h-4v-4h4V28z M18,20.008h-4v-4h4V20.008z M22,28v-4h4L22,28z M26,20h-4v-4h4 V20z" /><path d="M8,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S8,7.105,8,6z"/><path d="M20,6V2c0-1.105,0.895-2,2-2s2,0.895,2,2v4c0,1.105-0.895,2-2,2S20,7.105,20,6z"/></g></g></svg></i>
								</span>
							</div>
						</header>
						<ul class="content-list">
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
			<div class="proposta-eletronica grd-90">
				<div class="content col-2">
					<div class="box-title col-2">
						<h1 class="title" title="Cotação e Proposta Eletrônica">Cotação e Proposta Eletrônica</h1>
						<span class="divider"></span>
						<i><svg enable-background="new 0 0 32 32" height="60px" id="svg2" version="1.1" viewBox="0 0 32 32" width="60px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="download_x5F_information"><path d="M22,8h-4V2h-4v6h-4l6,6L22,8z M23,14c-2.143,0-4.106,0.751-5.652,2H2v8h12.059C14.557,28.5,18.367,32,23,32   c4.971,0,9-4.028,9-8.999C32,18.029,27.971,14,23,14z M8,22.001H4v-2h4V22.001z M23,30c-3.865-0.008-6.994-3.135-7-6.999   c0.006-3.865,3.135-6.995,7-7c3.864,0.006,6.991,3.135,6.999,7C29.991,26.865,26.864,29.992,23,30z"/><path d="M22,28h2v-6h-2V28z M22,18v2h2v-2H22z"/></g></svg></i>
					</div>
					<div class="description col-2">
						<p>A presente abordagem do Sistema de Cotação Eletrônica de Preços tem o escopo de difundir este procedimento inserido no contexto das aquisições e contratações da Administração Pública através do modelo mencionado no parágrafo segundo do art. 4º do Decreto nº 5.450/2005, regulado pela Portaria nº 306/2001 do MPOG, que no atual cenário vem sendo reproduzido simetricamente por órgãos das demais esferas governamentais em seus procedimentos de dispensa de licitação, fundados no inciso II do art. 24 da Lei nº 8.666/93.</p>
					</div>
				</div>
				<div class="download col-2">
					<div class="wrapper-download">
						<h3 class="title">Clique no ícone para baixar</h3>
						<p>Programa de cotação e proposta eletrônica</p>
						<a href="http://goo.gl/wHCifC" target="_blank" title="Baixar Programa de cotação e proposta eletrônica. Link Seguro">
						<i><svg enable-background="new 0 0 32 32" height="60px" id="svg2" version="1.1" viewBox="0 0 32 32" width="60px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="download_x5F_accept"><path d="M22,8h-4V2h-4v6h-4l6,6L22,8z M23,14c-2.143,0-4.106,0.751-5.652,2H2v8h12.059C14.557,28.5,18.367,32,23,32   c4.971,0,9-4.028,9-8.999C32,18.029,27.971,14,23,14z M8,22.001H4v-2h4V22.001z M23,30c-3.865-0.008-6.994-3.135-7-6.999   c0.006-3.865,3.135-6.995,7-7c3.864,0.006,6.991,3.135,6.999,7C29.991,26.865,26.864,29.992,23,30z"/><polygon points="18,23 20,21 22,23 26,19 28,21 22,27  "/></g></svg></i>
						</a>
					</div>
					<div class="wrapper-download">
						<h3 class="title">Clique no ícone para baixar</h3>
						<p>Arquivo de proposta .ESL</p>
						<a href="http://200.0.51.251:7474/esportal/esportalpublicacao.loadPublicacao.logic?publicacao.idPublicacao=46" target="_blank" title="Baixar arquivo de proposta .ESL. Link Seguro">
						<i><svg enable-background="new 0 0 32 32" height="60px" id="svg2" version="1.1" viewBox="0 0 32 32" width="60px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="document_x5F_text_x5F_edit"><path d="M24,14.059V5.584L18.414,0H0v32h24v-0.059c4.499-0.5,7.998-4.309,8-8.941C31.998,18.366,28.499,14.556,24,14.059z    M17.998,2.413L21.586,6h-3.588V2.413z M2,30V1.998h14v6.001h6v6.06c-1.752,0.194-3.352,0.89-4.652,1.941H4v2h11.517   c-0.412,0.616-0.743,1.289-0.994,2H4v2h10.059C14.022,22.329,14,22.661,14,23c0,2.829,1.308,5.351,3.349,7H2z M23,29.883   c-3.801-0.009-6.876-3.084-6.885-6.883c0.009-3.801,3.084-6.876,6.885-6.885c3.799,0.009,6.874,3.084,6.883,6.885   C29.874,26.799,26.799,29.874,23,29.883z M20,12H4v2h16V12z"/><g><polygon points="22,27 19,27 19,24   "/><rect height="4.243" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 56.5269 20.5858)" width="7.071" x="20.464" y="19.879"/></g></g></svg></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		</section> <!-- Fim da #secao-3 -->
		</div>

	<!-- Ínicio da #secao-4 -->
	<section id="contato" class="grd-100 parallax" data-speed="15">
		<div class="title-container">
			<h5 class="title-section">seção de contato</h5>
			<p class="today">Santa Lúcia <?php print date_i18n($timezone_format); ?></p>
		</div>
		<div class="wrapper-contato grd-90">		
			<article class="col-2 form">
				<h4 class="title">Fale com a Prefeitura <span class="divider"></span></h4>
				<form action="/salu/wp-content/themes/Portal Prefeitura/email-contato/contato.php" method="post">
					<input type="text" name="contactname" placeholder="Digite seu nome" />
					<input type="tel" name="contactphone" placeholder="Digite seu telefone" />
					<input type="email" name="contactemail" placeholder="Digite seu E-mail" />
					<input type="text" name="contactcity" placeholder="Digite sua Cidade" />
					<textarea name="contactmsg" placeholder="Deixe sua Mensagem"></textarea>
					
					<button type="submit" class="btn-enviar">Enviar</button>
					<button type="reset" class="btn-cancelar">Cancelar</button>
				</form>
				
			</article>
			<div class="plugin-fb-page">
				<div class="fb-page" data-href="https://www.facebook.com/santaluciapr/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/santaluciapr/"><a href="https://www.facebook.com/santaluciapr/">Município de Santa Lúcia - PR</a></blockquote></div></div>
			</div>
			<article class="col-2 endereco">
				<h4 class="title">Como chegar em santa Lúcia<span class="divider"></span></h4>
				<div class="wrapper-rotas">
					<div class="col-4">
						<span class="cidade">Boa Vista da Aparecida</span>
						<span class="divider">-</span>
						<span class="cidade">Santa Lúcia</span>
					</div>
					<div class="col-4">
						<span class="cidade">Capitão Leônidas Marques</span>
						<span class="divider">-</span>
						<span class="cidade">Santa Lúcia</span>
					</div>
					<div class="col-4">
						<span class="cidade">Cascavel</span>
						<span class="divider">-</span>
						<span class="cidade">Santa Lúcia</span>
					</div>
					<div class="col-4">
						<span class="cidade">Santa Tereza do Oeste</span>
						<span class="divider">-</span>
						<span class="cidade">Santa Lúcia</span>
					</div>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3603.9040735760673!2d-53.5699739!3d-25.4080214!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sus!4v1459530937543" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				<h4 class="title">Endereços Públicos<span class="divider"></span></h4>
				<div class="wrapper-rotas">
					<div class="col-4">
						<span class="cidade">Paço Municipal Aldino Dalbel</span>
					</div>
					<div class="col-4">
						<span class="cidade">UBS Frei Dudu / Hospital Municipal</span>
					</div>
					<div class="col-4">
						<span class="cidade">Ginásio de Esportes João Cominnetti</span>
					</div>
					<div class="col-4">
						<span class="cidade">Colégio Estadual / Escola Municipal</span>
					</div>
				</div>
			</article>
			<!-- <div class="col-2 social-media">
				<h4 class="title-color">Siga a Prefeitura na rede social</h4>
				<div class="fb-page" data-href="https://www.facebook.com/santaluciapr" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/santaluciapr"><a href="https://www.facebook.com/santaluciapr">Município de Santa Lúcia - PR</a></blockquote></div></div>
			</div> -->
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
			<nav class="contact-menu">
				<ul class="menu">
					<li class="menu-item">
						<h2>Mais Informações</h2>
					</li>
					<li class="menu-item"><svg enable-background="new 0.464 -2.279 141.732 141.732" height="32px" id="Livello_1" version="1.1" viewBox="0.464 -2.279 141.732 141.732" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_111"><path d="M0,137.174l34.864-28.711v-58.74L0,78.435V137.174z M70.629,77.856L36.465,49.723v58.74l34.164,28.134V77.856z    M81.893,21.947c0,6.062-4.912,10.975-10.974,10.975c-6.061,0-10.974-4.914-10.974-10.975c0-6.061,4.913-10.975,10.974-10.975   C76.98,10.973,81.893,15.887,81.893,21.947 M90.334,32.922c1.869-3.23,2.943-6.975,2.943-10.975C93.277,9.826,83.451,0,71.331,0   C59.209,0,49.383,9.826,49.383,21.947c0,5.331,1.9,10.215,5.061,14.018l16.906,24.39L88.5,35.61   c0.617-0.772,1.182-1.585,1.691-2.438l0.174-0.25H90.334z M72.27,136.399l33.631-27.694V49.967L72.27,77.662V136.399z    M142.66,137.174V78.435l-35.279-29.05v58.738L142.66,137.174z"/></g><g id="Livello_1_1_"/></svg><span>Como chegar</span></li>
					<li class="menu-item"><svg height="32px" version="1.1" viewBox="0 0 32 32" width="32px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g id="icon-86-document-list"><path d="M19,3 L9.0085302,3 C7.8992496,3 7,3.89833832 7,5.00732994 L7,27.9926701 C7,29.1012878 7.89092539,30 8.99742191,30 L24.0025781,30 C25.1057238,30 26,29.1090746 26,28.0025781 L26,11 L21.0059191,11 C19.8980806,11 19,10.1132936 19,9.00189865 L19,3 L19,3 Z M20,3 L20,8.99707067 C20,9.55097324 20.4509752,10 20.990778,10 L26,10 L20,3 L20,3 Z M15,14 L15,15 L23,15 L23,14 L15,14 L15,14 Z M10,13 L10,16 L13,16 L13,13 L10,13 L10,13 Z M11,14 L11,15 L12,15 L12,14 L11,14 L11,14 Z M10,18 L10,21 L13,21 L13,18 L10,18 L10,18 Z M11,19 L11,20 L12,20 L12,19 L11,19 L11,19 Z M15,19 L15,20 L23,20 L23,19 L15,19 L15,19 Z M10,23 L10,26 L13,26 L13,23 L10,23 L10,23 Z M11,24 L11,25 L12,25 L12,24 L11,24 L11,24 Z M15,24 L15,25 L23,25 L23,24 L15,24 L15,24 Z" id="document-list"/></g></g></svg><span>Telefones Públicos</span></li>
				</ul>				
			</nav>
	</section>

		
	</main>
	
<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

