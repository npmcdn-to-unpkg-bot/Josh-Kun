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