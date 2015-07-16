$(function(){
	//your jQuery here

	// reveal menus
	$( '.menu ul li').click(function () {
		console.log('fine children');
	    // $header = $(this);
	    // $content = $header.next();
	    // $content.slideToggle(500, function () {
	    // });     
	});

// M A S O N R Y 
jQuery(document).ready(function($){
  $(".repeater").masonry({
    itemSelector: ".item",
    gutter: 15
  });
});



}); // end  docReady
