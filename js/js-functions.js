$(document).ready(function() {
	$("#pakket-een").click(function(event){
	  event.preventDefault();
	  	$('.hidden-top').animate( {opacity: '0.6'}, 500 );
		$('.hidden-top').css( 'z-index', '1000' );
		$('.hidden-top-2').animate( {opacity: '1'}, 500 );
		$('.hidden-top-2').css( 'z-index', '2000' );
		$('#register-form').animate( {opacity: '1'}, 500 );
		$('#register-form').css( 'z-index', '2000' );
		$('#register-form').removeClass('display-hidden')
		$('#login-form').addClass('display-hidden')
	});
	$("#pakket-twee").click(function(event){
	  event.preventDefault();
	  	$('.hidden-top').animate( {opacity: '0.6'}, 500 );
		$('.hidden-top').css( 'z-index', '1000' );
		$('.hidden-top-2').animate( {opacity: '1'}, 500 );
		$('.hidden-top-2').css( 'z-index', '2000' );
		$('#register-form').animate( {opacity: '1'}, 500 );
		$('#register-form').css( 'z-index', '2000' );
		$('#register-form').removeClass('display-hidden')
		$('#login-form').addClass('display-hidden')
	});
	$("#pakket-drie").click(function(event){
	  event.preventDefault();
	  $('.hidden-top').animate( {opacity: '0.6'}, 500 );
		$('.hidden-top').css( 'z-index', '1000' );
		$('.hidden-top-2').animate( {opacity: '1'}, 500 );
		$('.hidden-top-2').css( 'z-index', '2000' );
		$('#register-form').animate( {opacity: '1'}, 500 );
		$('#register-form').css( 'z-index', '2000' );
		$('#register-form').removeClass('display-hidden')
		$('#login-form').addClass('display-hidden')
	});
});


$(document).ready(function(){
$("#login").click(function(event){
	  event.preventDefault();
	  	$('.hidden-top').animate( {opacity: '0.6'}, 500 );
		$('.hidden-top').css( 'z-index', '1000' );
		$('.hidden-top-2').animate( {opacity: '1'}, 500 );
		$('.hidden-top-2').css( 'z-index', '2000' );
		$('#login-form').removeClass('display-hidden')
		$('#login-form').css('z-index', '2000')
		$('#login-form').css('opacity', '1')
	});
	$("#close-login").click(function(event){
	  event.preventDefault();
	  	$('.hidden-top').animate( {opacity: '0'}, 500 );
		$('.hidden-top').css( 'z-index', '-10' );
		$('.hidden-top-2').animate( {opacity: '0'}, 500 );
		$('.hidden-top-2').css( 'z-index', '-10' );
		$('#login-form').addClass('display-hidden')
	});
});

