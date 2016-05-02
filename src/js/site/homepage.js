setTimeout(function(){
  var percent = .5;
  if($('body').hasClass('animate')) {
  	$('body').loadie(percent);
  	//$('#home--intro').addClass('is-loaded');
  	//$('#home--projects').addClass('is-loaded');
  }
}, 2500);
  
setTimeout(function(){
  var percent = 1;
  if($('body').hasClass('animate')) {
  	$('body').loadie(percent);
  	$('#home--intro').addClass('is-loaded');
    $('#home--projects').addClass('is-loaded');
	}
}, 5000);
  