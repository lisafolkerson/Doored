<img src="<?php bloginfo('template_directory'); ?>/assets/images/tester content/laura-ghosts3.png" alt="A terrifying ghost" class="ghost--behindTomb animated">
<footer>
  <div class="footer-container">
		<!-- start tombstone-->
		<div class="tombstone smoothScroll">
			<div class="upperTombstone"></div>
				<div class="lowerTombstone smoothScroll">
					<a href="#top" class="smoothScroll  tomb">
						<div class="name">
							<p>doored</p>
							<p>2012 - <?php echo date('Y'); ?></p>
						</div><!--end .name-->
					</a>
					<a href="mailto://lifeofacraphead@gmail.com" target="_blank">lifeofacraphead@gmail.com</a>
					<?php if( have_rows('links', 'options') ) : ?>
		 				<div class="bottom-nav">
							<ul>
								<?php while( have_rows('links', 'options') ) : the_row(); ?>
									<a href="<?php the_sub_field('fa_link', 'options'); ?>"><?php the_sub_field('fa_icon', 'options'); ?></a>
								<?php endwhile; ?>
							</ul>
						</div><!--end .bottomNav-->
					<?php endif; ?>
				</div><!--end .lowerTombstone-->
			</div><!--end .tombstone-->
	  <div class="grounder"></div>
  </div><!--end .footer-container-->
</footer>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));

</script>

<?php wp_footer(); ?>
</body>
</html>