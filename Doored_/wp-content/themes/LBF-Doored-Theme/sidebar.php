<div class="sidebar">
	<ul class="xoxo">
		<?php 

		if ( is_page( 'shows' ) ) : ?>
			<h3 class="entry-title" itemprop="name"><?php the_title(); ?></h3>
			<?php $latestPosts = new WP_Query(array(
			    'post_type' => 'show', //only want show posts
			)) ?>			
				<?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
			  <div class="single-entry">
			    <h3><?php the_title(); ?></h3>
			    <p class="entry-title"><?php the_field('about_show'); ?></p>

			    <?php $showImg = get_field('show_image'); ?>
			    <img src="<?php echo $showImg['url']; ?>" alt="<?php echo $showImg['alt']; ?>" class="showImage">
			  </div><!--end .single-entry-->
			    
			  <?php endwhile //end custom loop ?>
			  <?php// wp_reset_postdata(); //return env back to regular functionality?>

		<?php endif; ?>	

		<?php 

		if ( is_page( 'artists' ) ) : ?>  
		    <h3 class="entry-title" itemprop="name"><?php the_title(); ?></h3>         

		    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		      <?php $latestPosts = new WP_Query(array(
		          'post_type' => 'artist', //only want artist posts
		      )) ?>
		    
		          <div class="single-entry">
		            <h1 class="entry-title"><?php the_title(); ?></h1>
		          </div><!--end .single-entry-->
		        

		      <?php endwhile //end custom loop ?>
		      <?php //wp_reset_postdata(); //return env back to regular functionality?>       
		<?php endif; ?>
	</ul>
</div>