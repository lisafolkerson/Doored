<?php 
/*
  Template Name: Shows Page
*/

get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix show-page">
    <div class="content">

      <?php get_post_custom($post_id); ?> 

       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="section-header">
            <h2 class="entry-title"><?php the_title(); ?></h2>
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
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->
      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->
    <?php get_sidebar(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>