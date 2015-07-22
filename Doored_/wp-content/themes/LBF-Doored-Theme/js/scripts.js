$(function(){
	//your jQuery here

	// reveal menus (artist menu)
	$( '#menu-item-284').mouseover(function () {
		$('.artistMenu').slideDown(250);
		if ($( '.showMenu' ).is( ':visible' )){
			$('.showMenu').fadeOut(250);
		};
	});

	// reveal menus (show menu)
	$( '#menu-item-283').mouseover(function () {
		$('.showMenu').slideDown(250);   
		if ($( '.artistMenu' ).is( ':visible' )){
			$('.artistMenu').fadeOut(250);
		};
	});

// M A S O N R Y 
$(document).ready(function($){
  $(".repeater").masonry({
    itemSelector: ".item",
    gutter: 15
  });
});



}); // end  docReady
