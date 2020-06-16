$('#first_page').click (function(){
  $(this).addClass('hide');
});

$('#header .right_bar .menu').click (function(){
  $(this).hide();
  $('.photos_block .content .logo').hide();
  $('.main_menu_screen').removeClass('hide');
});
$('.content-log .menu').click (function(){
  $(this).hide();
  $('.photos_block .content .logo').hide();
  $('.main_menu_screen').removeClass('hide');

});
$('#header .home_screen_menu').click (function(){
  $(this).hide();
  $('.home_screen_top .home_screen_logo').hide();
  $('.main_menu_screen').removeClass('hide');
  $('.on_dekstop').hide();
});

$('.main_menu_screen .close').on ('click', function(){
  $('.main_menu_screen').addClass('hide');
  
  $('#header .right_bar .menu').show();
  $('.content-log .menu').show();
  $('#header .home_screen_menu').show();
   
  $('.photos_block .content .logo').show();
  $('.home_screen_top .home_screen_logo').show();
  $('.on_dekstop').show();
});

$('.portfolio_slider').owlCarousel({
    loop:true,                        
    margin:0,
	items:1,
	nav:true,                          
	navText:false,                     
	dots:false,
    center: true,
    stagePadding: 220,
});

$('.mobile__slider').owlCarousel({
    loop:true,                        
    margin:0,
	items:1,                           
	nav:true,                          
	navText:false,                     
	dots:false,                         
});

$('.portfolio_slider_all_works44').owlCarousel({
    loop:true,                        
    margin:0,
	items:1,                           
	nav:true,                          
	navText:false,                     
	dots:false,                         
});

$('#big_slider').owlCarousel({
    loop:true,                        
    margin:0,
	items:1,                           
	nav:true,                          
	navText:false,                     
	dots:false,                         
});

//.close a
$('#first_page').click (function(){
  $('#first_page').addClass('hide');
  $('#first_page .logo').hide();
  $('.main_slider .home_screen_top .home_screen_logo').removeClass('hide');
  $('.home_page_footer').removeClass('hide');
}); 

function hideFirstScreen() 
{
	$('#first_page').addClass('hide');
	$('#first_page .logo').hide();
	$('.main_slider .home_screen_top .home_screen_logo').removeClass('hide');
	$('.home_page_footer').removeClass('hide');
}
//hideFirstScreen();
setTimeout(hideFirstScreen, 7000);

$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 350)
		{
			$('.up__button').fadeIn();
		}
		else
		{
			$('.up__button').fadeOut();
		}
	});

});	

$(document).ready(function(){
	    $(".scroll").click(function (event) {
	        //отменяем стандартную обработку нажатия по ссылке
	        event.preventDefault();
	 
	        //забираем идентификатор бока с атрибута href
	        var id  = $(this).attr('href'),
	 
	        //узнаем высоту от начала страницы до блока на который ссылается якорь
	            top = $(id).offset().top - 60;
	         
	        //анимируем переход на расстояние - top за 1500 мс
	        $('body,html').animate({scrollTop: top}, 1500);
	    });

	$('.fs_container').css('opacity',0);

	$(window).load(function(){
		$(".slider").fadeslide({ slideEasing : "easeInOutExpo", slideInterval: 5000 });
		$('.fs_container').animate({'opacity':1},800);
	});
});
