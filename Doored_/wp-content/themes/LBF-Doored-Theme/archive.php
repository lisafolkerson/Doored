<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">

    <!-- bring in all images from uploaded media -->
    <?php

    $query_images_args = array(
        'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1,
    );

    $query_images = new WP_Query( $query_images_args );
    $images = array();
    foreach ( $query_images->posts as $image) {
        $images[]= wp_get_attachment_url( $image->ID );
    }
    ?>

    <img src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>" class="archiveImage">

      <!-- bring in all posts -->
      <?php if ( have_posts() ) the_post(); ?>

      <h1>
        <?php if ( is_day() ) : ?>
          Daily Archives: <?php the_date(); ?>
        <?php elseif ( is_month() ) : ?>
          Monthly Archives: <?php the_date('F Y'); ?>
        <?php elseif ( is_year() ) : ?>
          Yearly Archives: <?php the_date('Y'); ?>
        <?php else : ?>
          Blog Archives
        <?php endif; ?>
      </h1>

      <?php
    	/* Since we called the_post() above, we need to
    	 * rewind the loop back to the beginning that way
    	 * we can run the loop properly, in full.
    	 */
    	rewind_posts();

    	/* Run the loop for the archives page to output the posts.
    	 * If you want to overload this in a child theme then include a file
    	 * called loop-archives.php and that will be used instead.
    	 */
      get_template_part( 'loop', 'archive' );
      ?>

    </div><!--/content-->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>