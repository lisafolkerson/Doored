<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
        <!-- bring in all images from uploaded media -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();    
            $query_images_args = array(
                'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1,
            );

            $query_images = new WP_Query( $query_images_args );
            $images = array();
            foreach ( $query_images->posts as $image) {
                $images[]= wp_get_attachment_url( $image->ID );
            }
        ?>
        <div class="archive--images">
            <?php foreach ($images as $img) { ?>
              <img src="<?php echo $img; ?>" class="allImages">
            <?php } ?>
        </div><!--end .archive--images-->
               
        <?php endwhile; endif; ?>
    </div><!--/content-->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>