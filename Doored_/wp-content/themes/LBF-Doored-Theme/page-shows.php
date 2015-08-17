<?php 
/*
  Template Name: Shows Page
*/

get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix show-page">
    <div class="content">

     <?php $latestPosts = new WP_Query(array(
         'post_type' => 'show', //only want portfolio posts
         'posts_per_page'   => 1
     )) ?>
     
     <?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>

     <div class="section-header">
       <h2 class="entry-title"><?php the_title(); ?></h2>
       <p><?php the_field('date') ?></p>
     </div><!--end .section-header-->

     <?php $showImg = get_field('show_image'); ?>
       <img src="<?php echo $showImg['url']; ?>" alt="<?php echo $showImg['alt']; ?>" class="showImage">

       <div class="about">
         <?php the_field('about_show') ?>  
       </div>

     <div class="repeater clearfix" id="repeater">
       <?php
       // check if the repeater field has rows of data
       if( have_rows('show_repeater') ):
         // loop through the rows of data
           while ( have_rows('show_repeater') ) : the_row();
               // display a sub field value
           $rptrImg = get_sub_field('show_image'); ?>
           <div class="item">
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

       <?php endwhile; // end of the loop. ?>
       <?php wp_reset_postdata(); //return env back to regular functionality?>

    </div> <!-- /.content -->
    <?php get_sidebar(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>