$(function(){
	//your jQuery here

	// reveal menus
	$( '#menu-item-284').mouseover(function () {
		$('.artistMenu').slideToggle(500, function () {
	    });     
	});

		// reveal menus
	$( '#menu-item-283').mouseover(function () {
		$('.showMenu').slideToggle(500, function () {
	    });     
	});

// M A S O N R Y 
jQuery(document).ready(function($){
  $(".repeater").masonry({
    itemSelector: ".item",
    gutter: 15
  });
});



}); // end  docReady
