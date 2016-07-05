$(window).resize(function(){

	var 
		$pw = $('.project-wrapper'),
		wh = $(window).height(),
		offset = $( this ).offset(),
		hh = $("#single-page header").height();
		tools = $('#page-content--tools').height();
		pwOffset = $pw.offset().top,
		$pwHeight = wh - (hh + tools),
		$projectHeight = $('.project-list__item').outerHeight(),
		$number = $pwHeight / $projectHeight,
		$rounded = Math.floor($number) 
	;

	$pw.css('height', $pwHeight);

	//console.log( $rounded );

	//var $url = window.location.href;
	//window.history.pushState('page2', 'Title','?viewing=' + $rounded + '');

}).resize();

$('.project-list__item').hover(
	function() {
		var titleAttr = $(this).data('title');
		$(".project-list__image[data-title='" + titleAttr + "']").stop(true, true).css({
			opacity: 1,
			display: 'block'
		});
	},
	function() {
		var titleAttr = $(this).data('title');
		$(".project-list__image[data-title='" + titleAttr + "']").stop(true, true).css({
			opacity: 0,
			display: 'none',
		});
	}
);