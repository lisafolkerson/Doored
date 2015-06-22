$(function(){
	//your jQuery here
	var contactLinks = $details.find(".details-pane-outer"),
    didScroll = false;
 
$(window).scroll(function() {
    didScroll = true;
});
 
setInterval(function() {
    if ( didScroll ) {
        didScroll = false;
        // Check your page position and then
        // Load in more results
    }
}, 650);

	
var $container = $("#grid");
  // initialize Masonry after all images have loaded  
  $container.imagesLoaded( function() {
    $container.masonry({
      columnWidth: 150,
      itemSelector: ".repeatingArtistImage",
      gutter: 15
    });
  });

});
