<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
        <?php
        // make pagination
        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
        elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
        else { $paged = 1; }
        // print_r("$paged");
        ?>

        <!-- bring in all images from uploaded media -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();    
            $query_images_args = array(
                'post_type' => 'attachment', 
                'post_mime_type' =>'image', 
                'post_status' => 'inherit', 
                'posts_per_page' => 30,
                'paged' => $paged
            );

            $query_images = new WP_Query( $query_images_args );
            $images = array();
            foreach ( $query_images->posts as $image) {
                $images[]= wp_get_attachment_url( $image->ID );
            }

        ?>
        <div class="repeater clearfix">
            <?php foreach ($images as $img) { 
                
                ?>
            <div class="item">
              <a href="<?php echo $img; ?>">
                  <img src="<?php echo $img; ?>" class="allImages">
              </a>
            </div>
            <?php } ?>
        </div><!--end .archive--images-->  
        <div id="nav-below" class="navigation  clearfix">
            
        <?php endwhile; 

        // gallery pagination
        if ( $paged !== 1 ) { ?>
            <a href="<?php bloginfo('url'); ?>/archive-2/page/<?php echo ($paged - 1) ?>" class="page-link  nav-previous">&larr; Page <?php echo ($paged - 1) ?></a>
            <a href="<?php bloginfo('url'); ?>/archive-2/page/<?php echo ($paged +1) ?>" class="page-link  nav-next">Page <?php echo ($paged + 1) ?> &rarr;</a>
        <?php    
        } elseif ( ($paged + 1) == 'undefined' ){
            // echo 'lisa';

        } else { ?>
            <a href="<?php bloginfo('url'); ?>/archive-2/page/<?php echo ($paged +1) ?>" class="page-link">Page <?php echo ($paged + 1) ?> &rarr;</a>

       <?php }


        endif; ?>
        </div><!--  end nav below  -->
    </div><!--/content-->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>