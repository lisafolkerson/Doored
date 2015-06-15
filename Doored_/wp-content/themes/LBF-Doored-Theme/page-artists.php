<?php 
/*
  Template Name: Artists Page
*/

get_header(); ?>

<div class="main clearfix">
  <div class="container clearfix artist-page">
    <div class="content">

     <?php get_post_custom(4); ?> 
     <?php get_post( 'life-of-a-craphead' ); ?> 
     <?php get_post_custom('life-of-a-craphead'); ?> 
     <?php get_post( 4 ); ?> 

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>