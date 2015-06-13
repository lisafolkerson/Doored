<?php 

/*
	Template Name: Contact Page
*/

get_header();  ?>

<div class="main clearfix">
  <div class="container">
    <div class="content customHome">

	   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <?php the_content(); ?>

			<?php the_field( 'map' ) ?>

			<?php the_field( 'about_us' ) ?>
		
			<div class="theCredits">
				
			</div><!--end theredits-->

	        <?php $contactImg = get_field('contact_image'); ?>
	          <img src="<?php echo $contactImg['url']; ?>" alt="<?php echo $contactImg['alt']; ?>" class="showImage">
	      
	    </div><!-- #post-## -->
	
	  <?php endwhile; // end of the loop. ?>
	
    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>