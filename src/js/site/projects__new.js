$(window).resize(function(){

	var 
		$pw = $('.project-wrapper'),
		wh = $(window).height(),
		offset = $( this ).offset(),
		pwOffset = $pw.offset().top,
		$pwHeight = wh - pwOffset,
		$projectHeight = $('.project-list__item').outerHeight(),
		$number = $pwHeight / $projectHeight,
		$rounded = Math.floor($number) 
	;

	//$pw.css('height', $pwHeight);

	//console.log( $rounded );

	//var $url = window.location.href;
	//window.history.pushState('page2', 'Title','?viewing=' + $rounded + '');

}).resize();

$('.project-list__item').hover(
	function() {
		var titleAttr = $(this).data('title');
		$(".project-list__image[data-title='" + titleAttr + "']").stop(true, true).fadeIn(500);
	},
	function() {
		var titleAttr = $(this).data('title');
		$(".project-list__image[data-title='" + titleAttr + "']").stop(true, true).fadeOut(500);
	}
);