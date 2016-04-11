// Menu Principal - Chamada do menu
(function getMainMenu() {
	$("#get-menu").click(function () {
		$("nav.main-menu").css({
			'left' : '0'
		})
		$("#get-menu").css({
			'display' : 'none'
		})
		$("#close-menu").css({
			'display' : 'block'
		})
	})
}) ();

//Menu Principal - Esconder o menu
(function closeMainMenu() {
	$("#close-menu").click(function () {
		$("nav.main-menu").css({
			'left' : '-100%'
		})
		$("#close-menu").css({
			'display' : 'none'
		})
		$("#get-menu").css({
			'display' : 'block'
		})
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
			'left' : '-100%'
		})
		console.log('essa porra ta funcionando!')
	})
}) ();

// Slider
(function btnSlider() {
	$("#prev-sld").click(function(){
		$('html').find($('ul.slider-body')).css({
			'left' : '-100%'
		})
	})
	$("#next-sld").click(function(){
		$('html').find($('ul.slider-body')).css({
			'left' : '100%'
		})
	})
}) ();

(function blurHover() {
	$(".description-slider").mouseenter(function() {
		console.log("Sim, está aqui");
		$("ul.slider-body").find($('img')).css({
			'-webkit-filter' : 'blur(5px)',
			'-moz-filter' : 'blur(5px)',
			'filter': 'blur(5px)'
		})
	})

	$(".description-slider").mouseleave(function(){
		$("ul.slider-body").find($('img')).css({
			'-webkit-filter' : 'blur(0px)',
			'-moz-filter' : 'blur(0px)',
			'filter': 'blur(0px)'
		})
	})
}) ();

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