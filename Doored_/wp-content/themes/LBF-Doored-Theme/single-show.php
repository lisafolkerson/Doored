<?php get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix show-page">

<div class="content">

       <?php if ( have_posts() ) while ( have_posts() ) : the_post();
        ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="section-header">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <p><?php the_field('date') ?></p>
          </div><!--end .section-header-->

          <?php $showImg = get_field('show_image'); ?>
            <img src="<?php echo $showImg['url']; ?>" alt="<?php echo $showImg['alt']; ?>" class="showImage">

            <div class="about">
              <?php the_field('about_show') ?>  
            </div>

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

        <div id="placeholder"></div>
        <div id="legend"></div>

        <div class="repeater clearfix" id="repeater">
          <?php
          // check if the repeater field has rows of data
          if( have_rows('show_repeater') ):
            // loop through the rows of data
              while ( have_rows('show_repeater') ) : the_row();
                  // display sub fields:
              $rptrImg = get_sub_field('show_image'); ?>

              <div class="pinnedItem">
                <a href="<?php the_sub_field( 'links_to' ); ?>">
                <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingShowImage"/>
                
                    <p><?php the_sub_field('show_text');?></p>
                    </a>
                </div><!--end .pinnedItem-->

              <?php endwhile;

          else :
              // no rows found
          endif;
          ?>
          </div><!--end .repeater-->
        </div><!-- #post-## -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>