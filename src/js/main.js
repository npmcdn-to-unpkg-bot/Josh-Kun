// @codekit-prepend "site/default-ui.js"
// @codekit-prepend "site/hero.js"
// @codekit-prepend "site/single-page.js"
// @codekit-prepend "site/projects__new.js"


function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

function openModal(){
<<<<<<< HEAD
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
=======
	$('.open--modal').magnificPopup({
		type: 'inline',
		preloader: false,
		modal: true
>>>>>>> 519a25bec259c60576e83acf16c3e894e502457a
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
}

function closeWindow(){
	//e.preventDefault();
	$.magnificPopup.close();
}

$('body').flowtype({
	minFont   : 15,
	fontRatio : 85
});

$(document).ready(function(){
	mobileMenu();
	openModal();
});