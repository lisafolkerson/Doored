<?php 

/*
	Template Name: Doored Home Page
*/

get_header();  ?>

<div class="main clearfix">
  <div class="container">
    <div class="content customHome">

		<div class="mainLeft">
	
			<!-- THE IMAGE FOR LIVE STREAM -->
		  <?php $image = get_field('livestream');
		  if( !empty($image) ): ?>
		  	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		  <?php endif; ?>

		  <h2 class="pageTitle"><?php the_title(); ?></h2>

		  <p><?php the_field('subtitle') ?></p>

		   <!-- THE IMAGE TO REPRESENT DOORED -->
		  <?php $dooredImg = get_field('main_image');
		  if( !empty($image) ): ?>
		  	<img src="<?php echo $dooredImg['url']; ?>" alt="<?php echo $dooredImg['alt']; ?>" />
		  <?php endif; ?>
	  </div><!--end.mainLeft-->

		<div class="mainRight">
		  <!-- THE IMAGE FOR VIDEO PAGE -->
		  <?php $videoImg = get_field('recent_show_image');
		  if( !empty($image) ): ?>
		  	<img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" />
		  <?php endif; ?>

		  <p class="action"><?php the_field('call_to_action') ?></p>
	  	</div><!--end .mainRIght-->


    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>