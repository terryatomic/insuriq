<?php
/* Template Name: Blog (Single) */
the_post();
get_header(); ?>


<?php 
$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$image_url = wp_get_attachment_image_src($image, $size);
?>


<div class="hero_container" style="background-image: url('https://www.insuriq.com/wp-content/uploads/2022/09/hero6.jpg');">
	
	<div class="hero_overlay">
		<div class="hero_text hero_text_blog">
			<div class="page_width">
				<div class="hero_text_inner">
					<h1><?php the_title() ?></h1>
					<p>
						<i class="far fa-calendar-day" aria-hidden="true"></i>&nbsp; <?php the_date('F Y') ?>
						&nbsp; &nbsp; 
						<i class="far fa-user" aria-hidden="true"></i>&nbsp; <?php the_author() ?>
					</p>
				</div>
			</div>
		</div>
	</div>

</div>


<div id="breadcrumbs_container"><div class="page_width"><?php custom_breadcrumbs(); ?></div></div>


<!-- /** FULL WIDTH **/ -->

		<div class="page_width_small">
			<div class="content_full_width content_blog">

				<style type="text/css">

					.content_blog {
						display: relative;
						margin-top: 60px;
						}

						.content_blog h1 { color:#1e4b88; font-weight: 400; margin:0px; padding:0px; margin-bottom:20px; }
						.content_blog h2 { color:#1e4b88; font-weight: 400; margin:0px; padding:0px; margin-bottom:20px; }
						.content_blog h3 { color:#1e4b88; font-weight: 400; margin:0px; padding:0px; margin-bottom:20px; }
						.content_blog h4 { color:#1e4b88; font-weight: 400; margin:0px; padding:0px; margin-bottom:20px; }

						.content_blog p {
							margin-top: 10px;
							margin-bottom: 15px;
							line-height: 1.6em;
							}

						.content_blog ul {
							list-style: square;
							}

							.content_blog ul li {
								margin-bottom: 20px;
								line-height: 1.6em;
								}

						.content_blog a {
							border-bottom: 1px solid #84BA3D;
							color: #84BA3D;
							}
					
					.blog_image {
						position: relative;
						width: 45%;
						margin-left: 5%;
						margin-top: 10px;
						margin-bottom: 3%;
						float: right;
						}

					@media only screen and (max-width: 850px) {
						
						.blog_image {
							position: relative;
							width: 100%;
							margin-left: 0%;
							margin-top: 0px;
							margin-bottom: 0%;
							float: none;
							}

					}

				</style>

				<?php if ( has_post_thumbnail() ) { ?><img src="<?php echo get_the_post_thumbnail_url(null,'full'); ?>" class="blog_image" /><?php } ?>

				<?php the_content(); ?>


			</div>
		</div>



<?php get_footer(); ?>
