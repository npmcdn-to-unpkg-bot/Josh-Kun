<<<<<<< HEAD
var f = (function () {
	
	var $project 				=	$('.project__item-wrapper');
	var $windowHeight 	= $(window).height();
	var $projectWrap 		= $('.project-wrapper').height();
	var $projectIdeal		= $windowHeight-120;
	var $projectHeight 	= $project.outerHeight();
	var $projectCount 	= Math.floor($projectIdeal/$projectHeight)-4;
=======
/// WTTTFF

var f = (function () {
	
	var $project 				=	$('.project-list__item');
	var $windowHeight 	= $(window).height();
	var $projectWrap 		= $('#page-content__inner').height();
	var $projectIdeal		= $windowHeight-120;
	var $projectHeight 	= $project.outerHeight();
	var $projectCount 	= Math.floor($projectIdeal/$projectHeight)-3;
>>>>>>> develop
	var $calcHeight			= $projectHeight*$projectCount;

	//$('.project__item-wrapper').unwrap();

	var divs = $project;
	for(var i = 0; i < divs.length; i+=$projectCount) {
<<<<<<< HEAD
		divs.slice(i, i+$projectCount).wrapAll("<div class='carousel__slide'></div>");
=======
		divs.slice(i, i+$projectCount).wrapAll("<div class='carousel__slide project-list__wrapper'></div>");
>>>>>>> develop
	}

	//console.log('Window Height:', $windowHeight);
	//console.log('Project Wrapper Height:', $projectIdeal);
	//console.log('Project Height:', $projectHeight);
	//console.log('Project Count:', $projectCount);

<<<<<<< HEAD
	$('.carousel--custom').carousel();
=======
	$('.carousel--custom').carousel({
		pagination: false,
		controls: false,
		single :true
	});
>>>>>>> develop

});

var d = (function () {

	$('body').css('overflow', 'hidden' );
<<<<<<< HEAD
	$('.project-wrapper').css('opacity', 0 );
	//setTimout(function(){
		var $project 				=	$('.project__item-wrapper');
		var $windowHeight 	= $(window).height();
		var $projectWrap 		= $('.project-wrapper').height();
=======
	$('#page-content__inner').css('opacity', 0 );
	//setTimout(function(){
		var $project 				=	$('.project-list__item');
		var $windowHeight 	= $(window).height();
		var $projectWrap 		= $('#page-content__inner').height();
>>>>>>> develop
		var $projectIdeal		= $windowHeight-120;
		var $projectHeight 	= $project.outerHeight();
		var $projectCount 	= Math.floor($projectIdeal/$projectHeight)-4;
		var $calcHeight			= $projectHeight*$projectCount;

		setTimeout(function(){
			$('.carousel--custom').carousel('disable');
<<<<<<< HEAD
			$('.project__item-wrapper').unwrap();

			var divs = $project;
			for(var i = 0; i < divs.length; i+=$projectCount) {
				divs.slice(i, i+$projectCount).wrapAll("<div class='carousel__slide'></div>");
=======
			$('.project-list__item').unwrap();

			var divs = $project;
			for(var i = 0; i < divs.length; i+=$projectCount) {
				divs.slice(i, i+$projectCount).wrapAll("<div class='carousel__slide project-list__wrapper'></div>");
>>>>>>> develop
			}
		},300);

	setTimeout(function(){
		$('.carousel--custom').carousel('enable');
<<<<<<< HEAD
		$('.project-wrapper').css({
=======
		$('#page-content__inner').css({
>>>>>>> develop
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

<<<<<<< HEAD
$('.project__item-wrapper').hover(
	function() {
		var titleAttr = $(this).data('title');
		$(".project-images__project[data-title='" + titleAttr + "']").stop(true, true).addClass('is-visible');
	},
	function() {
		$(".project-images__project").stop(true, true).removeClass('is-visible');
	}
);
=======
// $('.project-list__item').hover(
// 	function() {
// 		var titleAttr = $(this).data('title');
// 		$(".project-list__image[data-title='" + titleAttr + "']").fadeIn(500);
// 	},
// 	function() {
// 		var titleAttr = $(this).data('title');
// 		$(".project-list__image[data-title='" + titleAttr + "']").fadeOut(500);
// 	}
// );
>>>>>>> develop
