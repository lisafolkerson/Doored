<div class="sidebar">
	<ul class="xoxo">
		<h2 class="sidebarTitle">Artists</h2>
		<?php  dynamic_sidebar( 'primary-widget-area' ); ?>

		<?php 

		if ( is_single() || is_page(shows) ) : // artist page?>
		           <h1 class="entry-title" itemprop="name"><?php the_title(); ?> or Shows</h1>
		       <?php else : ?>     
		           <h2 class="entry-title" itemprop="name">
		           	or artists
		               <a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		           </h2>
		       <?php endif; ?>
	</ul>
</div>
	
