<?php get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix artist-page">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="section-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <a href="http://<?php the_field('website') ?>" target="_blank"><?php the_field('website') ?></a>
          </div><!--end .section-header-->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php //hackeryou_posted_in(); ?>
            <?php //edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

      <div class="repeater clearfix" id="repeater">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('pinned_content') ):
          // loop through the rows of data
            while ( have_rows('pinned_content') ) : the_row();
                // display a sub field value
            $rptrImg = get_sub_field('pinned_image'); ?>
            <div class="pinnedItem">
              <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" class="pinnedImage"/>
              
                  <?php the_sub_field('links_to');?>
              </div><!--end .pinnedItem-->

            <?php endwhile;

        else :
            // no rows found
        endif;
        ?>
      </div><!--end .repeater-->


    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>