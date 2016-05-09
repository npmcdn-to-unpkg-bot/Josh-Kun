$page = $('#single-page');
$slide = $('#single-page').find('.slide');

var isAnimating = function() {
	$slide.addClass('is-animating');
};

var isLoading = function() {
	$slide.addClass('is-loading');
	$slide.removeClass('is-animating');
};

var isLoaded = function() {
	$slide.addClass('is-loaded');
	$slide.removeClass('is-loading');
}

function projectView(){
	$('.ajax-link').magnificPopup({
		type: 'ajax',
		midClick: true,
		removalDelay: 600,
		mainClass: 'mfp-slideup fs-grid',
		alignTop: true,
		//fixedContentPos: false,
		overflow: 'scroll',
		callbacks: {
		  parseAjax: function(mfpResponse) {
		    mfpResponse.data = $(mfpResponse.data).find('#page-content');
		  },
		  ajaxContentAdded: function() {
		  	$slide.addClass('is-viewing');
		  	var mp 		= $.magnificPopup.instance,
		  			src 	= this.currItem.src,
		  			t 		= $(mp.currItem.el[0]),
		  			title = t.data('title');
		  	//History.pushState(null, title, src);
		  },
		  beforeClose: function() {
		  	$slide.removeClass('is-viewing');	
		  	//History.back();
		  },
		}
	});
}

$(document).on('click', '.popup-modal-dismiss', function (e) {
	e.preventDefault();
	$.magnificPopup.close();
});

$(document).ready(function(){
	projectView();

	// Experiment Here

	var d= 0;
	var fadeIn = 1200;
	var timer = 1000;

	$container = $('#single-page__three');

	$container.find('img').each(function() {
		$(this).parent().parent().parent().parent().delay(d).fadeIn(fadeIn);
		d += timer;
	});

	var count = $container.find('.covered').size(); 
	var isLoadingTime = count * timer;
	var isLoadedTime  = isLoadingTime + 2000;

	setTimeout(isAnimating, 0);
	//setTimeout(isLoading, isLoadingTime);
	//setTimeout(isLoaded, isLoadedTime);

	// This is sacred:

	//setTimeout(isAnimating, 0);
	//$('#single-page__three img').each(function(i) {
	//	if (this.complete) {
	//		$(this).parent().parent().parent().parent().fadeIn();
	//		console.log('finished loading');
	//		setTimeout(isLoading, 0);
	//		setTimeout(isLoaded,  2000);
	//	} else {
	//		$(this).load(function() {
	//			$(this).parent().parent().parent().parent().fadeIn();
	//			console.log('finished loading');
	//		});
	//	}
	//});

	// Keep this sacred

	$('#single-page__three').imagesLoaded( function() {
		//console.log('finished loading');
		//setTimeout(isLoading, 0);
		//setTimeout(isLoaded,  2000);
		//setTimeout(isLoading, 100);
		//setTimeout(isLoaded,  200);
	});

});

SmartAjax_load('/assets/js/', function(){
	projectView();
	SmartAjax.setOptions({
		cache: false,
		reload: false,
		containers:
		[
			{selector: '#page-content__inner'}
		],

		before: function()
		{
			//$('#ajax-loader').show();
			SmartAjax.proceed();
		},
		success: function()
		{
			$('#page-content').addClass('is-paginating');
			SmartAjax.proceed();
		},
		done: function()
		{
			//$('#ajax-loader').hide();
			$('#page-content').removeClass('is-paginating');
			projectView();
		}
	});

	SmartAjax.bind('#page-nav a');
	SmartAjax.bindForms('form');
}, true);
