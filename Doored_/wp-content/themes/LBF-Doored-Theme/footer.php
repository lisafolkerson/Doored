<footer>
  <div class="footer-container">

	<!-- start tombstone-->
	<div class="tombstone smoothScroll">
		<div class="upperTombstone"></div>
		<div class="lowerTombstone smoothScroll">
			<a href="#top" class="smoothScroll">
				<div class="name">
					<p>doored</p>
					<p>2012 - <?php echo date('Y'); ?></p>
				</div><!--end .name-->
			</a>
			<a href="mailto://lifeofacraphead@gmail.com" target="_blank">lifeofacraphead@gmail.com</a>
		</div><!--end .lowerTombstone-->
	</div><!--end .tombstone-->

    <div class="grounder"></div>
  </div><!--end .footer-container-->
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/fitrify.js"></script> -->

<script>
jQuery(document).ready(function($){
     $.filtrify("container", "placeholder", {
     	close : true,
     	callback : function( query, match, mismatch ) {
     	           if ( !mismatch.length ) {
     	               $("#legend").html("VViewing All");
     	           } else {
     	               var category, tags, i, tag, legend = "<h4>Currently filtered by:</h4>";
     	               for ( category in query ) {
     	                   tags = query[category];
     	                   if ( tags.length ) {
     	                       legend += "";
     	                       for ( i = 0; i < tags.length; i++ ) {
     	                           tag = tags[i];
     	                           legend += "" + tag + "&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;";
     	                       };
     	                       legend += "";
     	                   };
     	               };
     	               $("#legend").html( legend );
     	           };
     	       }
     });
});
</script>

<?php wp_footer(); ?>
</body>
</html>