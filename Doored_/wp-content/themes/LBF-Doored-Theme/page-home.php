<?php 

/*
	Template Name: Doored Home Page
*/

get_header();  ?>

<div class="main clearfix">
  <div class="container">
    <div class="content customHome">
		<div class="mainView">
			<div class="mainLeft">

			  <a href="index.php?page_id=13"><h2 class="pageTitle"><?php the_title(); ?></h2></a>

			  <p class="subtitle"><?php the_field('subtitle') ?></p>

			   <!-- THE IMAGE TO REPRESENT DOORED -->
			  <?php $dooredImg = get_field('main_image');
			  if( !empty($dooredImg) ): ?>
			  	<img src="<?php echo $dooredImg['url']; ?>" alt="<?php echo $dooredImg['alt']; ?>" class="mnLft__image">
			  <?php endif; ?>
    	</div><!--end.mainLeft-->

		<div class="mainRight">
			  <!-- THE IMAGE FOR VIDEO PAGE -->
			  <?php $videoImg = get_field('recent_show_image');
			  if( !empty($videoImg) ): ?>
			  <a href="index.php?page_id=13" class="imagelink">
				  	<img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" class="videoLink">
				  <?php endif; ?>
			  </a>

			  <div class="watch clearfix">
					
					<div class="lwatch">
					  <p class="action"><?php the_field('call_to_action') ?></p>
					</div><!--end .lwatch-->	

					<div class="rwatch">
					  <svg viewBox="0 0 74 196" >
					      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
					          <g id="Artboard-1" sketch:type="MSArtboardGroup" stroke-width="5">
					              <path d="M15.0815536,195.303061 C14.9570602,186.369971 14.6392204,177.901763 17.2562025,169.18284 C41.8690782,87.1808406 39.027125,85.3481483 39.027125,9" id="Path-4" sketch:type="MSShapeGroup" transform="translate(27.063576, 102.151530) rotate(6.000000) translate(-27.063576, -102.151530) "></path>
					              <path d="M45.6167783,11 C41.9813159,28.7620589 15.9751196,36.1226383 14,54.9146462" id="Path-5" sketch:type="MSShapeGroup"></path>
					              <path d="M46,8 C52.7700147,21.7926238 67.3217533,38.031286 72.9981696,48.7801116" id="Path-6" sketch:type="MSShapeGroup"></path>
					          </g>
					      </g>
					  </svg>
					</div><!--end .rwatch-->	
				</div><!--end .watch-->  
		  	</div><!--end .mainRIght-->
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

		else :
		    // no rows found
		endif;
		?>
	</div><!--end .repeater-->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>