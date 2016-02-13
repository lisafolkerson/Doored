<?php 
/*
  Template Name: Artists Page
*/

get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix artist-page">
    <div class="content">

      <div class="menu_onPage clearfix">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'Artists Menu',
          'menu' => 'artists-menu'
        )); ?> 
      </div><!--end .artistmenu-->
      <?php wp_reset_postdata(); ?>


      <?php 
      remove_all_filters('posts_orderby');
      $artistPosts = new WP_Query(array(
        'post_type' => 'artist',
        'posts_per_page' => 1,
        'orderby' => 'rand'
      )); ?> 

     <?php while($artistPosts->have_posts()) : $artistPosts->the_post(); ?>

     <div class="section-header">
       <h2 class="entry-title"><?php the_title(); ?></h2>
       <p><a href="http://<?php the_field('website') ?>" target="_blank" class="artistWebsite"><?php the_field('website') ?></a></p>
     </div><!--end .section-header-->

     <?php $artistImg = get_field('artist_image'); ?>
       <img src="<?php echo $artistImg['url']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">

       <div class="about">
         <?php the_field('about_artist') ?>  
       </div>

       <div class="jumpToLinks">
         <?php if( have_rows('jump_to') ): ?>
         <p class="jumpLabel">See <?php the_title(); ?> in: </p>
         <?php while ( have_rows('jump_to') ) : the_row();
          $jumpObject = get_sub_field('jump_to_show'); 
          if ($jumpObject):?>
             <a class="jumpLink" href="<?php echo get_permalink($jumpObject->ID); ?>"><?php echo $jumpObject->post_title; ?></a>
          <?php wp_reset_postdata(); ?>
          <?php endif; endwhile; endif; ?>
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

            <?php $singleMediaLink = $rptrImg['ID']; 
            $specialLink = get_sub_field( 'links_to' );
            if ( !empty($specialLink) ):
             ?>
            <a href="<?php the_sub_field( 'links_to' ); ?>">
            <?php else: ?>
            <a href="<?php bloginfo('url'); ?>/?attachment_id=<?php echo $singleMediaLink ?>">
            <?php endif; ?>
             <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="repeatingArtistImage"/>
              <p><?php the_sub_field('artist_text');?></p>
            </a>     
          </div><!--end .pinnedItem-->

          <?php endwhile;
         endif; 
         ?>
         </div><!--end .repeater-->

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
  
<?php get_footer(); ?>
