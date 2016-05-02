var f = (function () {
	
	var $project 				=	$('.project__item-wrapper');
	var $windowHeight 	= $(window).height();
	var $projectWrap 		= $('.project-wrapper').height();
	var $projectIdeal		= $windowHeight-120;
	var $projectHeight 	= $project.outerHeight();
	var $projectCount 	= Math.floor($projectIdeal/$projectHeight)-4;
	var $calcHeight			= $projectHeight*$projectCount;

	//$('.project__item-wrapper').unwrap();

	var divs = $project;
	for(var i = 0; i < divs.length; i+=$projectCount) {
		divs.slice(i, i+$projectCount).wrapAll("<div class='carousel__slide'></div>");
	}

	//console.log('Window Height:', $windowHeight);
	//console.log('Project Wrapper Height:', $projectIdeal);
	//console.log('Project Height:', $projectHeight);
	//console.log('Project Count:', $projectCount);

	$('.carousel--custom').carousel();

});

var d = (function () {

	$('body').css('overflow', 'hidden' );
	$('.project-wrapper').css('opacity', 0 );
	//setTimout(function(){
		var $project 				=	$('.project__item-wrapper');
		var $windowHeight 	= $(window).height();
		var $projectWrap 		= $('.project-wrapper').height();
		var $projectIdeal		= $windowHeight-120;
		var $projectHeight 	= $project.outerHeight();
		var $projectCount 	= Math.floor($projectIdeal/$projectHeight)-4;
		var $calcHeight			= $projectHeight*$projectCount;

		setTimeout(function(){
			$('.carousel--custom').carousel('disable');
			$('.project__item-wrapper').unwrap();

			var divs = $project;
			for(var i = 0; i < divs.length; i+=$projectCount) {
				divs.slice(i, i+$projectCount).wrapAll("<div class='carousel__slide'></div>");
			}
		},300);

	setTimeout(function(){
		$('.carousel--custom').carousel('enable');
		$('.project-wrapper').css({
			opacity: 1
		});
		$('body').css('overflow', 'scroll' );
	},700);

});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) { } else {
	$(document).ready(f);
	$(window).resize(d);	
}




//$('.project__item-wrapper').each(function() {
//  $this = $(this);
//  if ($.inArray($this.data('title'), myArray) !== -1) {
//    $this.children('.status').text('New text value');
//  }
//});

$('.project__item-wrapper').hover(
	function() {
		var titleAttr = $(this).data('title');
		$(".project-images__project[data-title='" + titleAttr + "']").stop(true, true).addClass('is-visible');
	},
	function() {
		$(".project-images__project").stop(true, true).removeClass('is-visible');
	}
);