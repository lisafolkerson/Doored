<?php 
/*
  Template Name: Artists Page
*/

get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix artist-page">
    <div class="content">

     <?php $latestPosts = new WP_Query(array(
         'post_type' => 'artist', //only want portfolio posts
         'posts_per_page'   => 1
     )) ?>
     
     <?php if ($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post(); ?>
     
          <?php the_post(4) ?>

     <div class="section-header">
       <h2 class="entry-title"><?php the_title(); ?></h2>
     </div><!--end .section-header-->

     <?php $showImg = get_field('artist_image'); ?>
       <img src="<?php echo $showImg['url']; ?>" alt="<?php echo $artistImg['alt']; ?>" class="artistImage">

       <div class="about">
         <?php the_field('about_artist') ?>  
       </div>

     <?php endwhile; // end of the loop. ?>
     <?php wp_reset_postdata(); //return env back to regular functionality?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>