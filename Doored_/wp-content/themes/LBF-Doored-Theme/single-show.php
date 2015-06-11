<?php get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix show-page">

<div class="content">

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

      <!--start zoe code-->
      <div id="placeholder"></div>
      <div id="legend"></div>
                
      <div id="containerZoe">
        <?php
        $args = array(
          'post_type' => 'show',
          'nopaging' => true
        );
          
        $the_query = new WP_Query( $args );
                  
        while ( $the_query->have_posts() ) : $i++;
        $the_query->the_post(); ?>
                    
          <div class="portfolio<?php if ( ($i%3) == 0 ) { echo ' last'; } elseif ( ($i%2) == 0 ) { echo ' two-last'; } elseif ( ($i%4) == 0 ) { echo ' very-large'; } ?>">
          
            <div class="project-image">
              <?php the_post_thumbnail('portfolio'); ?>
            </div>
            
            
            <div class="project-info">
              <?php the_title(); ?>
            </div>
                        
          </div>
          
        <?php endwhile; wp_reset_postdata(); ?>
        
      </div><!--end ZOe COde-->

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>