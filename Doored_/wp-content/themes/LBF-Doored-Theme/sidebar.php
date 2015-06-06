<div class="sidebar">
	<ul class="xoxo">
			<h3 class="sidebarTitle" itemprop="name"><?php the_title(); ?></h3>
		<?php 
		if ( is_page( 'shows' ) || is_single( 'show' ) ) : ?>
			<?php $latestPosts = new WP_Query(array(
			    'post_type' => 'show', //only want show posts
			)) ?>			
				<?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
			  <div class="single-entry entry-show">
			    <?php $showImg = get_field('show_image'); ?>
			    <img src="<?php echo $showImg['sizes']['square']; ?>" alt="<?php echo $showImg['alt']; ?>" class="showImage">
			    <p class="entry-title"><?php the_title(); ?></p>
			  </div><!--end .single-entry-->		    
			  <?php endwhile //end custom loop ?>
		<?php endif; ?>	    

 <?php wp_reset_postdata(); //return env back to regular functionality?>


		<?php 
		if ( is_page( 'artists' ) || is_single( 'artist' ) ) : ?>        
	      <?php $latestPosts = new WP_Query(array(
	          'post_type' => 'artist', //only want artist posts
	      )) ?>

		    <?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
		    
        <div class="single-entry entry-artist">
        	<?php $artistImg = get_field('artist_image'); ?>
        	<img src="<?php echo $artistImg['sizes']['square']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">
          <p class="entry-title"><?php the_title(); ?></p>
        </div><!--end .single-entry-->
      

		      <?php endwhile //end custom loop ?>
		<?php endif; ?>
	 <?php wp_reset_postdata(); //return env back to regular functionality?>
	</ul>
</div>