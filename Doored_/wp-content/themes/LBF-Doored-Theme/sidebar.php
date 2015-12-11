<div class="sidebar">
  <ul class="xoxo">
    <?php 
    if ( is_page( 'shows' ) || is_singular( 'show' ) ): ?>
      <h3 class="sidebarTitle" itemprop="name">Shows</h3> 

      <?php $latestShowPosts = new WP_query( array(
          'post_type' => 'show'
          )); ?>

      <?php if ($latestShowPosts->have_posts() ) : while ( $latestShowPosts->have_posts() ) : $latestShowPosts->the_post(); ?> 
          <div class="single-entry entry-show">
            <?php $image = get_field('show_image'); ?>
            <a href="<?php the_permalink(); ?>" class="a__img">
            <?php  if( $image ) {echo wp_get_attachment_image( $image );} ?></a>
            <a href="<?php the_permalink(); ?>" class="entry-name"><?php the_title(); ?></a>
          </div><!--end .single-entry-->  
          <?php endwhile; ?>
        <?php endif; ?>
      <?php wp_reset_postdata(); ?>

    <?php elseif ( is_page( 'artists' ) || is_singular( 'artist' ) ): ?>        
      <h3 class="sidebarTitle" itemprop="name">Artists</h3>

      <?php $latestArtistPosts = new WP_Query(array(
          'post_type' => 'artist'
      )) ?>

      <?php if ($latestArtistPosts->have_posts()) while($latestArtistPosts->have_posts()) : $latestArtistPosts->the_post(); ?>
      

      <div class="single-entry entry-artist">
        <?php $artistImg = get_field('artist_image'); ?>
        <a href="<?php the_permalink(); ?>" class="a__img">
          <img src="<?php echo $artistImg['sizes']['square']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">
        </a>
        <a href="<?php the_permalink(); ?>" class="entry-name"><?php the_title(); ?></a>
      </div><!--end .single-entry-->
      <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
  </ul>
</div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

  