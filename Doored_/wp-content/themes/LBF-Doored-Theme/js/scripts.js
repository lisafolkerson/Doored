$(function(){
	//your jQuery here

//   console.log('// ▕▔╲┊┊┊┊┊┊┊╱▔▏┊┊┊
// ┊╲╱╲┊┊┊┊┊╱╲╱┊┊┊┊
// ┊┊╲┈╲▂▂▂╱┈╱┊┊┊╱╲
// ┊┊╱┈┈┈┈┈┈┈╲┊┊╱┈┈╲
// ┊┊▏▕▆▍▂▕▆▍▕┊╱┈┈┈╱
// ┊▕╭╮┈┳┻┳┈╭╮▏╲┈┈╱
// ┊┊╲╯┈╰━╯┈╰╱┊╱┈┈╲
// ┊┊╱┈┈┈┈┈┈┈╲┊╲┈┈┈╲
// ┊▕╲┈▕┈┈┈▏┈╱▏┊╱┈╱
// ┊▕┈▔▔┈┈┈▔▔┈▏╱┈╱┊
// ┊▕┈┈┈┈┈┈┈┈▕▔┈╱┊┊
// ┈┈╲┈┈┈┈┈┈┈╱▔▔┈┈┈
// ┈┈▕▂╱▔▔▔╲▂▏┈┈┈┈┈');
    
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
	$(document).ready(function($){
	  $('.repeater').masonry({
	    itemSelector: '.item',
	    columnWidth: '.item'
	  });
	});


}); // end  docReady
