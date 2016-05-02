// @codekit-prepend "site/default-ui.js"
// @codekit-prepend "site/hero.js"
// @codekit-prepend "site/homepage.js"
// @codekit-prepend "site/projects.js"

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

function openModal(){
	$('.ajax-link').magnificPopup({
		type: 'ajax',
		midClick: true,
		removalDelay: 1000,
		alignTop: true,
		overflowY: 'scroll',
		modal: true,
		mainClass: 'mfp-slideup fs-grid',
		callbacks: {
		  parseAjax: function(mfpResponse) {
		    mfpResponse.data = $(mfpResponse.data).find('#page');
		  },
		  ajaxContentAdded: function() {
		  	$('body').addClass('is-viewing');
		  },
		  beforeClose: function() {
		  	$('body').removeClass('is-viewing');	
		  }
		}
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
}

$(document).ready(function(){
	mobileMenu();
	openModal();
	$('body').flowtype({
		//minimum   : 500,
		//maximum   : 1200,
		minFont   : 16,
		//maxFont   : 80,
		fontRatio : 85
	});
});

