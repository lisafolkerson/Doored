<?php 
/*
  Template Name: Shows Page
*/
get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix show-page">
    <div class="content">

      <div class="menu_onPage clearfix">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'Shows Menu',
          'menu' => 'shows-menu'
        )); ?> 
      </div><!--end .artistmenu-->
      <?php wp_reset_postdata(); ?>

     <?php $latestPosts = new WP_Query(array(
         'post_type' => 'show', //only want show posts
         'posts_per_page' => 1
     )) ?>
     
     <?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>

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
              <?php if( have_rows('jump_to') ): ?>
                <p class="jumpLabel">Jump to: </p>

               <?php while ( have_rows('jump_to') ) : the_row();
               $jumpTimeH = get_sub_field('jump_to_time_hours'); 
               $jumpTimeM = get_sub_field('jump_to_time_minutes'); 
               $jumpTimeS = get_sub_field('jump_to_time_seconds'); 

               $jumpTotalSeconds = $jumpTimeS + ($jumpTimeM * 60) + ($jumpTimeH * 3600);

               $jumpText = get_sub_field('jump_to_text'); ?>

               <a class="jumpLink  jumpLinktoShow" value="?feature=oembed&autoplay=1&start=<?php echo $jumpTotalSeconds ?>"><?php echo $jumpTimeH ?>:<?php echo $jumpTimeM ?>:<?php echo $jumpTimeS ?> - <?php echo $jumpText; ?></a>
               <?php endwhile; endif; ?>
            </div>
           
         <?php else : 
           $showImg = get_field('show_image'); 
           $size = 'full';

           if( $showImg ) :
             if( wp_get_attachment_image( $showImg )) :
              echo wp_get_attachment_image( $showImg ); 
              else : ?>
               <img src="<?php echo $showImg['sizes']['square']; ?>" alt="<?php echo $showImg['alt']; ?>">
              <?php endif; ?></a>
           <?php endif;
         endif; ?>
       </div>

     <div class="about">
       <?php the_field('about_show') ?>  
     </div>

     <div class="repeater clearfix" id="repeater">
       <?php
       // check if the repeater field has rows of data
       if( have_rows('show_repeater') ): while ( have_rows('show_repeater') ) : the_row();
        $rptrImg = get_sub_field('show_image'); ?>

        <div class="item">
          <?php $singleMediaLink = $rptrImg['ID']; ?>
          <a href="<?php bloginfo('url'); ?>/?attachment_id=<?php echo $singleMediaLink ?>">
            <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingShowImage"/>
            <p><?php the_sub_field('show_text');?></p>
          </a>  
        </div><!--end .pinnedItem-->

        <?php endwhile;
          endif; ?>
      </div><!--end .repeater-->

       <?php endwhile; ?>
       <?php wp_reset_postdata(); ?>

    </div> <!-- /.content -->
    <?php get_sidebar(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>