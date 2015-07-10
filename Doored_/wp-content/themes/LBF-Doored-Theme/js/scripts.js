$(function(){
	//your jQuery here

// M A S O N R Y 
  var $container = $("#grid");
  // initialize Masonry after all images have loaded  
  $container.imagesLoaded( function() {
    $container.masonry({
      columnWidth: 150,
      itemSelector: ".item",
      gutter: 15
    });
  });

});
