<?php 
/*
  Template Name: Shows Page
*/
get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix show-page">
    <div class="content">

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

     <div class="repeater clearfix" id="repeater">
       <?php
       // check if the repeater field has rows of data
       if( have_rows('show_repeater') ):
        // loop through the rows of data
        while ( have_rows('show_repeater') ) : the_row();
        // display a sub field value
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