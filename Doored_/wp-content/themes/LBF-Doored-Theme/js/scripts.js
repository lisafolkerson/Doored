$(function(){

  // iframe jump to
  $('.jumpLink').click( function(){
    var $iframe = $('iframe');
    var oldURL = $iframe.attr('src');
    var index = 0;
    var newURL = oldURL;
    index = oldURL.indexOf('?');
    
    if(index == -1){
        index = oldURL.indexOf('#');
    }
    if(index != -1){
        newURL = oldURL.substring(0, index);
    }
    
    var $jumpParams = $(this).attr('value');
    $iframe.attr('src', newURL + $jumpParams );
  });
    
  // reveal menus (artist menu)
  $( '#menu-item-284').mouseover(function () {
    $('.artistMenu').slideDown(250);
    if ($( '.showMenu' ).is( ':visible' )){
      $('.showMenu').slideUp(100);
    };
  });

  // reveal menus (show menu)
  $( '#menu-item-283').mouseover(function () {
    $('.showMenu').slideDown(250);   
    if ($( '.artistMenu' ).is( ':visible' )){
      $('.artistMenu').slideUp(100);
    };
  });

  // hide menus if other menu items are chosen
  $( '#menu-item-281, #menu-item-282' ).mouseover(function (){
        if ($( '.artistMenu, .showMenu' ).is( ':visible' )){
            $('.artistMenu').slideUp(250);
            $('.showMenu').slideUp(250);
        };
  }); // END  

  $('.tomb').click( function(){
    $('.ghost--behindTomb').fadeIn( 50, function(){
      $('.ghost--behindTomb').addClass('slideInUp');  
    });
  });

  // cleck for the hamburger menu after 700px media query
  $('.menu__dropper').click( function(){
    if ($('.menuHolder').is( ':visible')) {
      $('.menuHolder').slideUp(250);

      if($('.showMenu').is(':visible') || $('.showMenu').is(':visible')) {
        $('.showMenu').slideUp(100);
        $('.artistMenu').slideUp(100);
      }
    } else {
      $('.menuHolder').slideDown(250);
    };
  });

  // M A S O N R Y
  var $container = $('.repeater');

  // initialize Masonry after all images have loaded  
  $container.imagesLoaded( function() {
     $container.masonry({
      itemSelector: '.item',
      columnWidth: '.masonry-brick',
      percentPosition: true
    });
  });


}); // end  docReady
