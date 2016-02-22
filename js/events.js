// Notícias
(function getMask(){
	$("div.news").hover(function (){
		$(this).find($("div.mask")).css({
			'opacity' : "1"
		})
	})
}) ();
(function displayMask(){
	$("div.news").mouseleave(function (){
		$(this).find($("div.mask")).css({
			'opacity' : '0'

		})
	})
}) ();

// Tv Prefeitura
(function hoverZoom() {
	$("div.preview-video").hover(function () {
		$(this).find($('img')).css({
			'transform' : 'scale(1.2)',
			'-webkit-filter' : 'blur(2px)',
			'filter' : 'blur(2px)',
			'transition' : '.5s ease-out'
		})
	})
}) ();

(function hoverInitial() {
	$("div.preview-video").mouseleave(function () {
		$(this).find($('img')).css({
			'transform' : 'scale(1)',
			'webkit-filter' : 'grayscale(10%)',
			'filter' : 'grayscale(10%)',
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