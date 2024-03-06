<?php
/* Template Name: Solutions Page */
the_post();
get_header(); ?>



<?php 
$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$image_url = wp_get_attachment_image_src($image, $size);
?>

<div 
	 <?php if( get_field('custom_class') ){
		$custom_class = get_field('custom_class');
		echo 'class="'.$custom_class.'"';
	}
	 ?>
>
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


<div class="page_content">


	<div class="page_width_small">



		<script>
			jQuery(document).ready(function($){

				$('.scroll_to').click(function(e){
					var jump = $(this).attr('href');
					var new_position = $(jump).offset();
					$('html, body').stop().animate({ scrollTop: new_position.top-100 }, 500);
					e.preventDefault();
				});

			});
		</script>


		<div class="solutions_menu">
			
			<ul>
				<li><a href="#overview" class="scroll_to">Overview</a></li>
				<li><a href="#benefits" class="scroll_to">Benefits</a></li>
				<li><a href="#features" class="scroll_to">Features</a></li>
			</ul>

		</div>

	</div>


	<div class="content_divider"></div>


	<div class="page_width_small" id="overview">
		<div class="content_full_width">
			<?php the_field('overview'); ?>
		</div>
	</div>


	<div class="content_divider"></div>




	<div class="solution_benefits" id="benefits">

		<div class="page_width_small">

			<?php
			if( get_field('benefits') ):
			while ( has_sub_field('benefits') ):
			?>


				<?php if( get_row_layout() == 'content' ): ?>

						<div class="content_full_width">
							<?php the_sub_field('text'); ?>
						</div>


				<?php elseif( get_row_layout() == 'image' ): ?>


						<?php 
						$image = get_sub_field('image');
						$size = 'large'; // (thumbnail, medium, large, full or custom size)
						$image_url = wp_get_attachment_image_src($image, $size);
						?>

						<img src="<?php echo $image_url[0]; ?>" width="100%" />


				<?php elseif( get_row_layout() == 'icons' ): ?>


					<div class="icons">

						<?php
						if( have_rows('icon') ):
						while ( have_rows('icon') ) : the_row();
						?>

							<?php 
							$image = get_sub_field('icon');
							$size = 'large'; // (thumbnail, medium, large, full or custom size)
							$image_url = wp_get_attachment_image_src($image, $size);
							?>

							<div class="icon_box">
								<div class="icon_box_image"><img src="<?php echo $image_url[0]; ?>" /></div>
								<div class="icon_box_text"><?php the_sub_field('title'); ?></div>
							</div>


						<?php
						endwhile;
						endif;
						?>

					</div>

			<?php
			endif;
			endwhile;
			endif;
			?>


		</div>

	</div>




	<div class="content_divider"></div>

		<div class="page_width_small" id="features">

			<?php
			if( have_rows('features') ):
			while ( have_rows('features') ) : the_row();
			?>

				<div class="feature">
					<div class="feature_icon"></div>
					<div class="feature_text">
						<?php the_sub_field('feature'); ?>
					</div>
				</div>


			<?php
			endwhile;
			endif;
			?>

		</div>

	</div>



</div>
</div>




<?php get_footer(); ?>
