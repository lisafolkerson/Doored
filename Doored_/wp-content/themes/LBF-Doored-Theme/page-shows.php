<?php 
/*
  Template Name: Shows Page
*/

get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix show-page">
    <div class="content">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="single-entry">
        <h2 class="entry-title"><?php the_title(); ?></h2>

          <?php $showImg = get_field('show_image'); ?>
            <img src="<?php echo $showImg['url']; ?>" alt="<?php echo $showImg['alt']; ?>" class="showImage">

          <?php the_field('about_show') ?>  

          <div class="back-n-forth">
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- /.back-n-forth -->

          <div class="entry-utility">
            <?php //edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php //comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

      <div class="repeater clearfix" id="repeater">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('artist_repeater') ):
          // loop through the rows of data
            while ( have_rows('artist_repeater') ) : the_row();
                // display a sub field value
            $rptrImg = get_sub_field('artist_image'); ?>
            <div class="pinnedItem">
              <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingArtistImage"/>
              
                  <?php the_sub_field('artist_text');?>
              </div><!--end .pinnedItem-->

            <?php endwhile;

        else :
            // no rows found
        endif;
        ?>
      </div><!--end .repeater-->
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>