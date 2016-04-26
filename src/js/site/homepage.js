setTimeout(function(){
  var percent = .5;
  if($('body').hasClass('animate')) {
  	$('body').loadie(percent);
  	$('.home-top').addClass('home--trans');
  	$('.home-bottom').addClass('home--trans');
  }
}, 2500);
  
setTimeout(function(){
  var percent = 1;
  if($('body').hasClass('animate')) {
  	$('body').loadie(percent);
  	$('.home-top').addClass('home-top--loaded');
  	$('.home-bottom').addClass('home-bottom--loaded');
	}
}, 5000);
  