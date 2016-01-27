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

      <div class="showImage">
        <?php $heroType = get_field('show_hero'); // 1 : Video - Livestream | 2 : Video - Youtube 

        ?>
          <?php if ( $heroType == 1 ) : ?>
            <div class="heroImage  livestream_embed">
              <?php the_field('show_video') ?>
            </div><!--end livestream_embed-->

          <?php elseif ( $heroType == 2 ) : ?>
            <div class="heroImage  youtube_embed">
              <?php the_field('show_youtube'); ?>
            </div>
            <div class="jumpToLinks">
               <p class="jumpLabel">Jump to: </p>
              <?php if( have_rows('jump_to') ): while ( have_rows('jump_to') ) : the_row();
               $jumpTime = get_sub_field('jump_to_time'); 
               $jumpText = get_sub_field('jump_to_text'); ?>
               <a class="jumpLink" value="?feature=oembed&autoplay=1&start=<?php echo $jumpTime ?>"><?php echo $jumpText; ?></a>
               <?php endwhile; endif; ?>
            </div>
            
          <?php else : 
            $showImg = get_field('show_image'); 
            $size = 'full';

            if( $showImg ) :
              echo wp_get_attachment_image( $showImg, $size );
            endif;
          endif; ?>
        </div>

        <div class="about">
          <?php the_field('about_show') ?>  
        </div>

        <div class="back-n-forth">
          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div><!-- .back-n-forth -->

        <div id="nav-below" class="navigation  clearfix">
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
        </div><!-- #nav-below -->

        <div class="repeater clearfix">
          <?php
          // check if the repeater field has rows of data
          if( have_rows('show_repeater') ):
            // loop through the rows of data
              while ( have_rows('show_repeater') ) : the_row();
                  // display sub fields:
              $rptrImg = get_sub_field('show_image'); 
              //pre_r(get_sub_field('show_image'));
              ?>

              <div class="item">
                <?php $singleMediaLink = $rptrImg['ID']; ?>
                <a href="<?php bloginfo('url'); ?>/?attachment_id=<?php echo $singleMediaLink ?>">
                
                  <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingShowImage"/>
                  <p><?php the_sub_field('show_text');?></p>
                </a>
              </div><!--end .pinnedItem-->

              <?php endwhile;
            endif;
            ?>
          </div><!--end .repeater-->
        </div><!-- #post-## -->

      <?php endwhile; // end of the loop. ?>
      <?php wp_reset_postdata(); ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>