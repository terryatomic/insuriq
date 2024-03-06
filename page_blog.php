<?php
/* Template Name: Blog */
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



<div class="content_divider"></div>

<!-- /** FULL WIDTH **/ -->

		<div class="page_width_small">
			<div class="content_full_width">
				<?php the_sub_field('content'); ?>
			</div>
		</div>



<style type="text/css">
	
		.blog_section {
			position: relative;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: stretch;
			align-content: flex-start;
			}
	
			.blog_section_item {
				position: relative;
				width: 48%;
				margin-bottom:4%;
				transition: all 0.4s ease;
				box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
				}
	
			.blog_section_item:hover {
				box-shadow: 0px 0px 25px rgba(0,0,0,0.4);
				}

					.blog_section_item_image {
						position: relative;
						background-size: cover;
						background-position: center;
						height: 225px;
						width: 100%;
						}

					.blog_section_item_text {
						padding: 20px;
						}

					.blog_section_item_text h5 {
						position: relative;
						display: inline-block;
						color: #A3A3A3;
						margin: 0px;
						text-transform: uppercase;
						margin-bottom: 10px;
						font-size: 10pt;
						letter-spacing: 1px;
						font-weight: 400;
						}

					.blog_section_item_text h3 {
						position: relative;
						display: inline-block;
					    color: #1e4b88;
						margin: 0px;
						font-weight: 400;
						}

						.blog_section_item_text p {
							margin: 0px;
							padding: 0px;
							margin-bottom: 8px;
							line-height: 1.4em;
							color: #202020;
							}

						.blog_section_item_text p:last-child {
							margin-bottom: 0px;
							}

						.blog_section_item_text span {
							display: block;
							color: #84BA3D;
							text-decoration: none;
							margin-top: 10px;
							}

	@media only screen and (max-width: 850px) {

		.blog_section_item_text {
			width: 100%;
			margin-bottom: 40px;
			}

		.blog_section_item {
			width: 100%;
			margin-bottom: 30px;
			}


	}



</style>

		<div class="page_width_small">

			<div class="blog_section">

				<?php
				$args = array(
				'post_type'=> 'post',
				'orderby' => 'ID',
				'order' => 'DESC',
				'posts_per_page' => 20
				);
				$result = new WP_Query( $args );
				if ( $result-> have_posts() ):
				while ( $result->have_posts() ) : $result->the_post();
				?>

					<?php
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					?>

					<a href="<?php the_permalink() ?>" class="blog_section_item">
						<div class="blog_section_item_image" style="background-image: url('<?php echo $feat_image; ?>');"></div>
						<div class="blog_section_item_text">
							<h5>
								<i class="far fa-calendar-day" aria-hidden="true"></i>&nbsp; <?php the_date('F Y') ?>
								&nbsp; &nbsp; 
								<i class="far fa-user" aria-hidden="true"></i>&nbsp; <?php the_author() ?>
							</h5>
							<h3><?php the_title() ?></h3>
							<p><span>Read More &nbsp;<i class="fas fa-caret-right"></i></span></p>
						</div>
					</a>

				<?php 
				endwhile; 
				endif;
				?>
				<?php wp_reset_postdata(); ?>

			</div>

		</div>


<?php get_footer(); ?>



