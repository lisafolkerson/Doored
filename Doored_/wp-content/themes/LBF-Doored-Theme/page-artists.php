<?php get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix artist-page">
    <div class="content">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php $latestPosts = new WP_Query(array(
            'post_type' => 'artist', //only want portfolio posts
        )) ?>
        
        <?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
  
            <div class="single-entry">
              <h1 class="entry-title"><?php the_title(); ?></h1>

            </div><!--end .single-entry-->
          

        <?php endwhile //end custom loop ?>
        <?php wp_reset_postdata(); //return env back to regular functionality?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="section-header">
            <h1 class="entry-title"><?php //the_title(); ?></h1>
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

          <div class="entry-utility">
            <?php //hackeryou_posted_in(); ?>
            <?php //edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

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