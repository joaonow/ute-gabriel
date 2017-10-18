jQuery( document ).ready( function( $ ) {
  
  $('.menu-trigger').click(function(){
    $('.collapse').toggleClass('open');
  });
  
  var $submenu_trigger = '<span class="sub-menu-trigger"></span>';
  $('.menu-item-has-children').append($submenu_trigger);
  $('.sub-menu-trigger').click(function(){
    $(this).siblings('.sub-menu').toggleClass('open');
    $(this).toggleClass('open');
    $(this).parent('.menu-item-has-children').toggleClass('open');
  });
  
  $('.sub-menu').hover(function(){
    $(this).parent('.menu-item-has-children').toggleClass('hover');
  });
  
  
  
  var navPos = $('nav').offset().top;
  
  $(window).scroll(function(){

    var wScroll = $(this).scrollTop();
    

    if( wScroll > $('nav').offset().top ) {
      $('nav').addClass('fixed');
    }
    
    if( wScroll < navPos && $('nav').hasClass('fixed') ) {
      $('nav').removeClass('fixed');
    }
    
  });
  
  
  
  
  
  
  
});