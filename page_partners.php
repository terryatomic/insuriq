<?php
/* Template Name: Partners Page */
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


<div class="page_content">

	<div class="page_width_small">


			<style>

				.partners_container {
					display: flex;
					flex-wrap: wrap;
					position: relative;
					justify-content: space-between;
					}

				.partners_form {
					position: relative;
					width: 70%;
					background: #ffffff;
					padding: 40px;
					box-sizing: border-box;
					border-radius: 5px;
					box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
					margin-top: 40px;
					box-sizing: border-box;
					}

				.partners_contact {
					width: 25%;
					margin-top: 40px;
					box-sizing: border-box;
					}

					.partners_contact_item {
						border: 1px solid #00467F;
						background: #ffffff;
						border-radius: 5px;
						margin-bottom: 30px;
						padding: 20px;
						box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
						font-size: 15pt;
						}

						.partners_contact_item h5 {
							margin: 0px;
							padding: 0px;
							}

						.partners_contact_item a {
							color: #202020;
							}

				.form_arrow {
					position: absolute;
					top: 38px;
					left: 0px;
					width: 0;
					height: 0;
					border-left: 22px solid rgba(0,0,0,0.1);
					border-right: 15px solid transparent;
					border-bottom: 15px solid transparent;
					border-top: 15px solid transparent;
					}

				@media only screen and (max-width: 750px) {

					.partners_form {
						width: 100%;
						order: 2;
						}

					.partners_contact {
						width: 100%;
						order: 1;
						}

				}

			</style>


			<div class="partners_container">

				<div class="partners_form">
					<h2>Get In Touch</h2>
					<?php gravity_form( 1, false, false, false, '', true, 12 ); ?>
				</div>

				<div class="partners_contact">

					<div class="partners_contact_item">
						<h5><i class="far fa-phone-alt"></i> PHONE</h5>
						<a href="tel:203-446-8123">(203) 446-8123</a>
					</div>

					<div class="partners_contact_item">
						<h5><i class="far fa-envelope"></i> EMAIL</h5>
						<a href="mailto:info@insuriq.com">info@insuriq.com</a>
					</div>

				</div>

			</div>


	</div>

</div>




<?php get_footer(); ?>
