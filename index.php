<?php
/* Template Name: Home Page */
the_post();
get_header(); ?>



<?php 
$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$image_url = wp_get_attachment_image_src($image, $size);
?>


<div class="hero_container" style="background-image: url('<?php echo $image_url[0]; ?>');">
	
	<div class="hero_overlay">
		<div class="hero_text">
			<div class="page_width">
				<div class="hero_text_inner">
					<?php the_field('title'); ?>
				</div>
			</div>
		</div>
	</div>

</div>


<div id="breadcrumbs_container"><div class="page_width"><?php custom_breadcrumbs(); ?></div></div>



<?php get_template_part( 'content_block_builder'); ?>




<?php get_footer(); ?>
