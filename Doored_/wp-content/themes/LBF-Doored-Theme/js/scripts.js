$(function(){
	//your jQuery here

	// reveal menus
	$( '#menu-item-284').mouseover(function () {
		console.log('fine children');
		$('.artistMenu').slideToggle(500, function () {
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
