	<?php get_header(); ?>
	<section id="blog-post" class="grd-100">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Modo leitura -->
		<article class="modo-leitura">
			<div class="opcoes-de-leitura">
			</div>
			<div class="grd-80 texto">
				<h1 class="title-post"><?php the_title()?></h1>
			
				<div class="text">
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</article>
		<article class="content-post">
			<header class="grd-100 wrapper-header">
				<?php the_post_thumbnail('large'); ?>
				<h1 class="title-post"><?php the_title()?></h1>						
				<span class="date" title="Data de Postagem">Santa Lúcia <?php the_time('d/M/Y') ?></span>
			</header>
			<div class="bg-post">	
				<div class="grd-80 wrapper-post">
					<?php the_content(); ?>
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
				<div class="grd-80 wrapper-informations">
					<div class="grd-50">
						<div class="wrapper-category col-2" title="Categorias">
							<span class="title">Tags</span>
							<i>
								<svg enable-background="new 0 0 32 32" height="24px" id="svg2" version="1.1" viewBox="0 0 32 32" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="category"><polygon points="20,20 20,12 12,12 12,14 8,14 8,10 10,10 10,2 2,2 2,10 6,10 6,26 12,26 12,30 20,30 20,22 12,22 12,24.001 8,24    8,16 12,16 12,20  "/></g></svg>
							</i>
							<?php the_category(); ?>
						</div>
						<div class="wrapper-author">
							<span class="title">Autor</span>
							<i>
								<svg enable-background="new 0 0 32 32" height="24px" id="svg2" version="1.1" viewBox="0 0 32 32" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="user_x5F_close_x5F_edit"><path d="M32,23c-0.002-4.973-4.029-9-9-9c-0.025,0-0.049,0.003-0.074,0.004C23.608,12.826,24,11.459,24,10c0-4.418-3.582-8-8-8   c-4.418,0-8,3.582-8,8c0,4.26,3.332,7.732,7.531,7.977c-0.419,0.622-0.753,1.304-1.008,2.023H4c-4,0-4,4-4,4v8h32v-8   C32,24,32,23.207,32,23z M29.883,23c-0.009,3.799-3.084,6.874-6.883,6.883c-3.801-0.009-6.876-3.084-6.885-6.883   c0.009-3.801,3.084-6.876,6.885-6.884C26.799,16.124,29.874,19.199,29.883,23z"/><polygon points="22,27 19,27 19,24  "/><rect height="4.243" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 56.5269 20.5858)" width="7.071" x="20.464" y="19.879"/></g></svg>
							</i>
							<span class="author" title="Autor"><?php the_author() ?></span>
						</div>
						<!-- <span class="edit"><?php edit_post_link(('Editar')); ?></span> -->
					</div>
					<div class="grd-20 wrapper-options">
						<i>
							<svg enable-background="new 0 0 32 32" height="32px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="text_x5F_align_x5F_center"><polygon points="2,6 2,4 30,4 30,6 2,6  "/><polygon points="2,14 2,12 30,12 30,14 2,14  "/><polygon points="2,22 2,20 30,20 30,22 2,22  "/><polygon points="6,10 6,8 26,8 26,10 6,10  "/><polygon points="6,18 6,16 26,16 26,18 6,18  "/><polygon points="6,26 6,24 26,24 26,26 6,26  "/></g></svg>Modo Leitura
						</i>
						<i id="print">
							<svg enable-background="new 0 0 32 32" height="32px" id="svg2" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><g id="background"><rect fill="none" height="32" width="32"/></g><g id="printer"><path d="M27.533,26.001L30,26V16h-4V2H6v14H2v10h2.466l-2.133,4h27.334L27.533,26.001z M8,4h16v12H8V4z M7.799,24h16.402l2.133,4   H5.667L7.799,24z"/></g></svg>Imprimir
						</i>
					</div>
					<div class="grd-30 wrapper-network">
						<i>
							<!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="24px" id="Capa_1" style="enable-background:new 0 0 80 90;" version="1.1" viewBox="0 0 80 90" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M65,60c-3.436,0-6.592,1.168-9.121,3.112L29.783,47.455C29.914,46.654,30,45.837,30,45c0-0.839-0.086-1.654-0.217-2.456   l26.096-15.657C58.408,28.833,61.564,30,65,30c8.283,0,15-6.717,15-15S73.283,0,65,0S50,6.717,50,15   c0,0.837,0.086,1.654,0.219,2.455L24.123,33.112C21.594,31.168,18.438,30,15,30C6.717,30,0,36.717,0,45s6.717,15,15,15   c3.438,0,6.594-1.167,9.123-3.113l26.096,15.657C50.086,73.346,50,74.161,50,75c0,8.283,6.717,15,15,15s15-6.717,15-15   S73.283,60,65,60z"/></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
						</i>
						<span class="title">compartilhe!</span>
						<div class="container-network">
							<div class="fb-share-button" data-href="<?php the_permalink() ?>" data-layout="button_count">
							</div>
							<div class="twitter">
								<a href="<?php the_permalink() ?>" class="twitter-share-button" data-lang="pt" data-size="medium" data-hashtags="SantaLuciaPR, CrescendoEmHarmonia">Tweetar</a> 
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
								</script>
							</div>
							<div class="g-plus">
								<div class="g-plusone"></div>
							</div>		
						</div>
					</div>
				</div>
				<div class="grd-80 comentarios">
					<h6 class="title">Comentários</h6>
					<span class="warning col-2">A Prefeitura de Santa Lúcia-PR e o autor da matéria não se responsabilizam por nenhum comentário abaixo.
					Os autores de comentários que contenham <strong>racismo</strong>, <strong>injuria</strong>, <strong>calúnia</strong>, <strong>difamação</strong>, bem como qualquer outro crime ao expressar opinião estarão sujeitos a completa responsabilização pelos mesmos, sem prejuízo das penas previstas na legislação brasileira.</span>
					<div class="fb-comments col-2" data-href="<?php the_permalink() ?>" data-numposts="5">
					</div>
				</div>
			</div>
		</article>
	</section>

<!-- Chamada da sidebar e footer -->

