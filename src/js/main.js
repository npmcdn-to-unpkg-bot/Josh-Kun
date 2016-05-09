// @codekit-prepend "site/default-ui.js"
// @codekit-prepend "site/hero.js"
// @codekit-append "site/single-page.js"

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

function openModal(){
	$('.open--modal').magnificPopup({
		type: 'inline',
		preloader: false,
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
}

$('body').flowtype({
	minFont   : 16,
	fontRatio : 85
});

$(document).ready(function(){
	mobileMenu();
	openModal();
});