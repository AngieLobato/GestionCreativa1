$(document).ready(function(){
 
	$('.up-page').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.up-page').slideDown(300);
		} else {
			$('.up-page').slideUp(300);
		}
	});
 
});