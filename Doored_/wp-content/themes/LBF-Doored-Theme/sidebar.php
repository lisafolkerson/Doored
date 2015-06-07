<div class="sidebar">
	<ul class="xoxo">
		<?php 
		if ( is_page( 'shows' ) || is_singular( 'show' ) ): ?>
			<h3 class="sidebarTitle" itemprop="name">Shows</h3>
		
			<?php $latestShowPosts = new WP_Query(array(
			    'post_type' => 'show', //only want show posts
			)) ?>			

			<?php if ($latestShowPosts->have_posts()) while($latestShowPosts->have_posts()) : $latestShowPosts->the_post(); ?>

			  <div class="single-entry entry-show">
			    <?php $showImg = get_field('show_image'); ?>
			    <img src="<?php echo $showImg['sizes']['square']; ?>" alt="<?php echo $showImg['alt']; ?>" class="showImage">
			    <p><?php the_title(); ?></p>
			  </div><!--end .single-entry-->		    
			  <?php endwhile //end custom loop ?>
		<?php endif; ?>	    

 <?php wp_reset_postdata(); //return env back to regular functionality?>

		<?php 
		if ( is_page( 'artists' ) || is_singular( 'artist' ) ) : ?>        
		    <h3 class="sidebarTitle">Arists</h3>

	      <?php $latestArtistPosts = new WP_Query(array(
	          'post_type' => 'artist', //only want artist posts
	      )) ?>

		    <?php if ($latestArtistPosts->have_posts()) while($latestArtistPosts->have_posts()) : $latestArtistPosts->the_post(); ?>
		    
        <div class="single-entry entry-artist">
        	<?php $artistImg = get_field('artist_image'); ?>
        	<img src="<?php echo $artistImg['sizes']['square']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">
          <p><?php the_title(); ?></p>
        </div><!--end .single-entry-->
	      <?php endwhile //end custom loop ?>
		<?php endif; ?>
	 <?php wp_reset_postdata(); //return env back to regular functionality?>
	</ul>
</div>