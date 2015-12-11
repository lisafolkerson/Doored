<?php 
/*
  Template Name: Artists Page
*/

get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix artist-page">
    <div class="content">

     <?php $args = new WP_Query(array(
         'orderby' => 'rand',
         'post_type' => 'artist',
         'posts_per_page'   => 1  
     )) 

     // $rand_posts = get_posts( $args );
     // foreach ( $rand_posts as $post ) : 
     //  setup_postdata( $post ); 

     ?>
     
     <?php if ($args->have_posts()) while($args->have_posts()) : $args->the_post(); ?>

     <div class="section-header">
       <h2 class="entry-title"><?php the_title(); ?></h2>
       <p><a href="http://<?php the_field('website') ?>" target="_blank"><?php the_field('website') ?></a></p>
     </div><!--end .section-header-->

     <?php $artistImg = get_field('artist_image'); ?>
       <img src="<?php echo $artistImg['url']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">

       <div class="about">
         <?php the_field('about_artist') ?>  
       </div>

       <div class="repeater clearfix" id="repeater">
         <?php
         // check if the repeater field has rows of data
         if( have_rows('artist_repeater') ):
           // loop through the rows of data
           while ( have_rows('artist_repeater') ) : the_row();
               // display a sub field value
           $rptrImg = get_sub_field('artist_image'); ?>
          <div class="item">
            <a href="<?php the_sub_field( 'links_to' ); ?>">
             <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingArtistImage"/>
              <p><?php the_sub_field('artist_text');?></p>
            </a>     
          </div><!--end .pinnedItem-->

          <?php endwhile;
         endif;
         ?>
         </div><!--end .repeater-->

      <?php endwhile; // end of the loop. 
      wp_reset_postdata(); //return env back to regular functionality ?>
      </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
  
<?php get_footer(); ?>
