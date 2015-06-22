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

	        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.6845799638945!2d-79.40201870000003!3d43.654730400000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34c21257b3e3%3A0xc4bf2dcc0875aa9f!2s241+Augusta+Ave%2C+Toronto%2C+ON+M5T+2L8!5e0!3m2!1sen!2sca!4v1434380320177" width="100%" height="300" frameborder="0" style="border:0"></iframe>
		
			<div class="theCredits">
				<?php  dynamic_sidebar( 'primary-widget-area' ); ?>
			</div><!--end theredits-->

	        <?php $contactImg = get_field('contact_image'); ?>
	          <img src="<?php echo $contactImg['url']; ?>" alt="<?php echo $contactImg['alt']; ?>" class="showImage">
	      
	    </div><!-- #post-## -->
	
	  <?php endwhile; ?>
	
    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>