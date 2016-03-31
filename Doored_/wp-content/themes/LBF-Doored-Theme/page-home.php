<?php 

/*
    Template Name: Doored Home Page
*/

get_header();  ?>

<div class="main clearfix">
  <div class="container">
    <div class="content customHome">
      <div class="mainView">
        <h2 class="pageTitle"><?php the_title(); ?></h2>
         <!-- THE IMAGE TO REPRESENT DOORED -->
        <?php $dooredImg = get_field('main_image');
        if( !empty($dooredImg) ): ?>
          <img src="<?php echo $dooredImg['url']; ?>" alt="<?php echo $dooredImg['alt']; ?>" class="mnLft__image">
        <?php endif; ?>
        <p class="subtitle"><?php the_field('subtitle') ?></p>

      </div><!--end .mainView-->
    </div> <!-- /.content -->

    <div class="repeater clearfix grid" id="repeater">
      <?php
      // check if the repeater field has rows of data
      if( have_rows('pinned_content') ):
        // loop through the rows of data
        while ( have_rows('pinned_content') ) : the_row();
          // display image and link it properly
          $rptrImg = get_sub_field('pinned_image'); ?>
          <div class="item">
            <a href="<?php the_sub_field('links_to'); ?>">
              <img src="<?php echo $rptrImg['url']; ?>" alt="<?php echo $rptrImg['alt']; ?>" alt="<?php the_sub_field('pinned_text');?>">
                <p><?php the_sub_field('pinned_text');?></p>
            </a>
          </div><!--end .pinnedItem-->
        <?php endwhile;

      endif;
      ?>
    </div><!--end .repeater-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>