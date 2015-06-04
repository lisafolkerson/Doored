<div class="sidebar">
	<ul class="xoxo">
		<!-- <h2 class="sidebarTitle">Artists</h2> -->
		<?php  //dynamic_sidebar( 'primary-widget-area' ); ?>

		<?php 

		if ( is_single() || is_page( 'shows' ) ) : // shows page?>
			<h3 class="entry-title" itemprop="name"><?php the_title(); ?> or Shows</h3>

		<?php endif; ?>	
		 <?php 

		if ( is_page( 'artists' ) ) : // artists page ?>   <h3>artist page</h3>  
		    <h3 class="entry-title" itemprop="name">
		           	or artists
		               <a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		           </h3>         
		<?php endif; ?>
	</ul>
</div>
	
