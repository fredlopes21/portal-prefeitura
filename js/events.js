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