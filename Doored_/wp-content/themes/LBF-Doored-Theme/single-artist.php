<?php get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix artist-page">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="section-header">
          <a href="#artistContent" class="jumpToContent  smoothScroll"><h2 class="entry-title"><?php the_title(); ?></h2></a>
          <p><a href="http://<?php the_field('website'); ?>" target="_blank" class="artistWebsite"><?php the_field('website') ?></a> 
        </div><!--end .section-header-->

        <?php $artistImg = get_field('artist_image'); ?>
        <img src="<?php echo $artistImg['url']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">
        <div id="artistContent">
          <?php the_field('about') ?>          
        </div>

        <div class="back-n-forth">
          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div><!-- .back-n-forth -->

        <div id="nav-below" class="navigation  clearfix">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

      <div class="repeater clearfix" id="repeater">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('artist_repeater') ):
          // loop through the rows of data
          while ( have_rows('artist_repeater') ) : the_row();
          $rptrImg = get_sub_field('artist_image'); ?>

          <div class="item">
            <?php $singleMediaLink = $rptrImg['ID']; 
            $specialLink = get_sub_field( 'links_to' );
            if ( !empty($specialLink) ):
             ?>
            <a href="<?php the_sub_field( 'links_to' ); ?>">
            
            <?php else: ?>
            <a href="<?php bloginfo('url'); ?>/?attachment_id=<?php echo $singleMediaLink ?>">

            <?php endif; ?>

              <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingArtistImage">
              <p><?php the_sub_field('artist_text');?></p>
            </a>
          </div><!--end .pinnedItem-->

          <?php endwhile; endif; ?>

        </div><!--end .repeater-->
      </div><!-- #post-## -->
      <?php endwhile; // end of the loop. ?>
      <?php wp_reset_postdata(); ?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>