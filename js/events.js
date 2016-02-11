(function getMask(){
	$("div.news").hover(function (){
		$(this).find($("div.mask")).css({
			'left' : "0"
		}).fadeIn()
	})
}) ();
(function displaMask(){
	$("div.news").mouseleave(function (){
		$(this).find($("div.mask")).css({
			'left' : '-100%'
		}).fadeOut()
	})
}) ();