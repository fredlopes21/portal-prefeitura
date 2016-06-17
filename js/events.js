// Menu Principal - Chamada do menu
(function getMainMenu() {
	$("#get-menu").click(function () {
		$(".secretarias, #close-menu").show("fast", "linear")
		$("#get-menu").hide("fast", "linear")
	})
}) ();

//Menu Principal - Esconder o menu
(function closeMainMenu() {
	$("#close-menu").click(function () {
		$(".secretarias, #close-menu").hide("fast", "linear")
		$("#get-menu").show("fast", "linear")
	})
}) ();

//Menu Principal - chamada submenu;
(function getSubMenu () {
	$("li.menu-item-has-children").click(function (event) {
		event.preventDefault();
		$(this).find($('ul.sub-menu')).css({
			'left' : '0',
			'z-index' : '99'
		})
	})

}) ();

// Menu Principal - Esconder Submenu
(function closeSubMenu () {
	$("ul.sub-menu > li:first-child").click(function (event) {
		event.preventDefault();
		$('html').find($('ul.sub-menu')).css({
			'left' : '-200%'
		})
	})
}) ();

// Slider
(function btnSlider() {
	if ($(".ativo").next().length) {
		$(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
	}else{
		$(".ativo").fadeOut().removeClass("ativo");
		$(".slider-item:eq(0)").fadeIn().addClass("ativo");
	}

	$("#next-sld").click(function() {
		var sliderAtual = $(".ativo");
		sliderAtual.fadeOut().next().fadeIn().addClass("ativo");
	})
	$("#prev-sld").click(function() {
		var sliderAtual = $(".ativo");
		sliderAtual.fadeOut().removeClass("ativo").prev().fadeIn().addClass("ativo")
	})
}) ();

 // (function btnSlider() {
// 	$("#prev-sld").click(function(){
// 		$(this).find($("li.slider-item")).css({
// 			'margin-left' : '-20%'
// 		})
// 	})
// 	$("#next-sld").click(function(){
// 		$('html').find($('ul.slider-body')).css({
// 			'left' : '20%'
// 		})
// 	})
// }) ();

// (function blurHover() {
// 	$(".description-slider").mouseenter(function() {
// 		$("ul.slider-body").find($('img')).css({
// 			'-webkit-filter' : 'blur(5px)',
// 			'-moz-filter' : 'blur(5px)',
// 			'filter': 'blur(5px)'
// 		})
// 	})

// 	$(".description-slider").mouseleave(function(){
// 		$("ul.slider-body").find($('img')).css({
// 			'-webkit-filter' : 'blur(0px)',
// 			'-moz-filter' : 'blur(0px)',
// 			'filter': 'blur(0px)'
// 		})
// 	})
// }) ();

(function rollPage(){
	$("li.menu-item a").click(function(event){
		event.preventDefault();
		var IdElemento = $(this).attr('href');
		var deslocamento = $(IdElemento).offset().top;
		$('html, body').animate({scrollTop: deslocamento}, 'slow');
	});
}) ();

(function parallax(){
	$(document).ready(function(){
		$('section.parallax').each(function(){
			var $obj = $(this);

			$(window).scroll(function(){
				var yPos = -($(window).scrollTop() / $obj.data('speed'));

				var bgPos = '50%'+yPos+'px';

				$obj.css('background-position', bgPos)

			});
		});
	});
}) ();

// Notícias
(function grayscaleOff(){
	$("div.news").hover(function (){
		$(this).find($("img")).css({
			'filter' : "sepia(100%)",
			'-webkit-filter' : "sepia(100%)"
		});
		$(this).find($("div.choice-action span")).css({
			'opacity' : '1'
		})
	})
	$("div.news").mouseleave(function (){
		$(this).find($("img")).css({
			'filter' : 'sepia(0)',
			'-webkit-filter' : 'sepia(0)'
		});
		$(this).find($("div.choice-action span")).css({
			'opacity' : '0'
		})
	})
}) ();

// Tv Prefeitura
(function hoverZoom() {
	$("div.preview-video").hover(function () {
		$(this).find($('img')).css({
			'transform' : 'scale(1.2)',
			'transition' : '.5s ease-out'
		})
	})
}) ();

(function hoverInitial() {
	$("div.preview-video").mouseleave(function () {
		$(this).find($('img')).css({
			'transform' : 'scale(1)',
			'transition' : '.3s ease-out'
		})
	})
}) ();

// Menu - #secao-2
(function appearSubmenu () {
	$("#secao-2 li.menu-item").hover(function () {
		$(this).find("ul.sub-menu").css({
			'opacity' : '1'
		})
	})
}) ();

(function desappearSubmenu () {
	$("#secao-2 li.menu-item").mouseleave(function () {
		$(this).find("ul.sub-menu").css({
			'opacity' : '0'
		})
	})
}) ();

// Filtro Transparência
(function selectFilter () {
	var compraDireta = $("option[name='compraDireta']").val();
	var	concorrencia = $("option[name='concorrencia']").val();
	var concursos = $("option[name='concursos']").val();
	var convite = $("option[name='convite']").val();
	var leilao = $("option[name='leilao]").val();
	var pregao = $("option[name='pregao']").val();
	var dispensa = $("option[name='dispensa']").val();
	var inegibilidade = $("option[name='inegibilidade']").val();
	var rdc = $("option[name='rdc']").val();
	var tPrecos = $("option[name='tomadadePrecos']").val();

	$("#filter").change(function() {
		var newVal = $("#filter").val();
		// Compra Direta
		if (newVal === compraDireta) {
			$('ul#compradireta').fadeIn('slow');
		}else{
			$('ul#compradireta').fadeOut('slow');
		}

		// Concorrência
		if(newVal === concorrencia){
			$('ul#concorrencia').fadeIn('slow');
		}else{
			$('ul#concorrencia').fadeOut('slow');
		}

		// concursos
		if(newVal === concursos){
			$('ul#concursos').fadeIn('slow');
		}else{
			$('ul#concursos').fadeOut('slow');
		}

		// Convite
		if (newVal === convite) {
			$('ul#convite').fadeIn('slow');
		}else{
			$('ul#convite').fadeOut('slow');
		}

		// Leilão
		if(newVal === leilao){
			$('ul#leilao').fadeIn('slow');
		}else{
			$('ul#leilao').fadeOut('slow');
		}

		// Pregão
		if(newVal === pregao){
			$('ul#pregao').fadeIn('slow');
		}else{
			$('ul#pregao').fadeOut('slow');
		}

		// Dispensa
		if(newVal === dispensa){
			$('ul#dispensa').fadeIn('slow');
		}else{
			$('ul#dispensa').fadeOut('slow');
		}

		// Inegibilidade
		if(newVal === inegibilidade){
			$('ul#processodeinegibilidade').fadeIn('slow');
		}else{
			$('ul#processodeinegibilidade').fadeOut('slow');
		}

		// RDC
		if(newVal === rdc){
			$('ul#rdc').fadeIn('slow');
		}else{
			$('ul#rdc').fadeOut('slow');
		}

		// Tomada de Preços
		if(newVal === tPrecos){
			$('ul#tomadadeprecos').fadeIn('slow');
		}else{
			$('ul#tomadadeprecos').fadeOut('slow');
		}
	})

}) ();


// Função para imprimir
$("#print").click(function(){
	window.print();
	return false;
})