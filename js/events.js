// Notícias
(function getMask(){
	$("div.news").hover(function (){
		$(this).find($("div.mask")).css({
			'display' : "block",
			'top' : "0"
		})
	})
}) ();
(function displaMask(){
	$("div.news").mouseleave(function (){
		$(this).find($("div.mask")).css({
			'top' : '-100%',
			'display' : "none"
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
			'display' : 'block'
		})
	})
}) ();

(function desappearSubmenu () {
	$("#secao-2 li.menu-item").mouseleave(function () {
		$(this).find("ul.sub-menu").css({
			'display' : 'none'
		})
	})
}) ();