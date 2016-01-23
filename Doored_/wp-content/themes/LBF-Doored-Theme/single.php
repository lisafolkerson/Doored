<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          
          <div class="entry-content  single--attachmentContent">

            <?php 

            echo wp_get_attachment_image( $post->ID, 'large' );
            ?>

            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_image_link(); ?></p>
          <p class="nav-next"><?php next_image_link(); ?></p>
        </div><!-- #nav-below -->

      <?php endwhile; // end of the loop. ?>  

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>