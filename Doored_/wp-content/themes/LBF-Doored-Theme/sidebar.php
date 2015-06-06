<div class="sidebar">
	<ul class="xoxo">
		<?php 
		if ( is_page( 'shows' ) || is_single( 'show' ) ) : ?>
			<h3 class="sidebarTitle" itemprop="name"><?php the_title(); ?></h3>
			<?php $latestPosts = new WP_Query(array(
			    'post_type' => 'show', //only want show posts
			)) ?>			
				<?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
			  <div class="single-entry entry-show">
			    <?php $showImg = get_field('show_image'); ?>
			    <img src="<?php echo $showImg['sizes']['square']; ?>" alt="<?php echo $showImg['alt']; ?>" class="showImage">
			    <h3 class="entry-title"><?php the_title(); ?></h3>
			  </div><!--end .single-entry-->		    
			  <?php endwhile //end custom loop ?>
		<?php endif; ?>	    
		<?php 
		if ( is_page( 'artists' ) || is_single( 'artist' ) ) : ?>  
		    <h3 class="sidebarTitle" itemprop="name"><?php the_title(); ?></h3>         
	      <?php $latestPosts = new WP_Query(array(
	          'post_type' => 'artist', //only want artist posts
	      )) ?>

		    <?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
		    
        <div class="single-entry entry-artist">
        	<?php $artistImg = get_field('artist_image'); ?>
        	<img src="<?php echo $artistImg['sizes']['square']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">
          <h3 class="entry-title"><?php the_title(); ?></h3>
        </div><!--end .single-entry-->
      

		      <?php endwhile //end custom loop ?>
		<?php endif; ?>
	</ul>
</div>