<?php get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix artist-page">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="section-header">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <p><a href="http://<?php the_field('website') ?>" target="_blank"><?php the_field('website') ?></a></p>
          </div><!--end .section-header-->

          <?php $artistImg = get_field('artist_image'); ?>
            <img src="<?php echo $artistImg['url']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">

          <?php the_field('about') ?>  

          <div class="back-n-forth">
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .back-n-forth -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

      <?php endwhile; // end of the loop. ?>


      <div class="gallery clearfix">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('artist_gallery') ):
          // loop through the rows of data
            while ( have_rows('gallery') ) : the_row();
            $rptrImg = get_field('artist_image'); ?>

            <div class="item">
              <a href="<?php the_sub_field( 'links_to' ); ?>">
                <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingArtistImage">
              
                  <p><?php the_sub_field('artist_text');?></p>
                </a>
              </div><!--end .pinnedItem-->

            <?php endwhile; endif;?>
        </div><!--end .repeater-->

        <div id="grid">
          <?php $images = get_field('artist_gallery'); if( $images ): ?> <!-- This is the gallery filed slug -->
          <?php foreach( $images as $image ): ?> <!-- This is your image loop -->
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" > <!-- Image Code -->  
          <?php endforeach; ?> <!-- This is where the image loop ends -->
          <?php endif; ?> <!-- This is where the gallery loop ends -->
        </div>

      <div class="repeater clearfix" id="repeater">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('artist_repeater') ):
          // loop through the rows of data
            while ( have_rows('artist_repeater') ) : the_row();
            $rptrImg = get_sub_field('artist_image'); ?>

            <div class="pinnedItem">
              <a href="<?php the_sub_field( 'links_to' ); ?>">
                <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingArtistImage">
              
                  <p><?php the_sub_field('artist_text');?></p>
                </a>
              </div><!--end .pinnedItem-->

            <?php endwhile; endif; ?>
        </div><!--end .repeater-->
      </div><!-- #post-## -->
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>