<?php
/* Template Name: Contact Page */
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


			<style>

				.contact_container {
					display: flex;
					flex-wrap: wrap;
					position: relative;
					justify-content: space-between;
					}

				.contact_form {
					position: relative;
					width: 50%;
					background: #ffffff;
					padding: 30px;
					box-sizing: border-box;
					border-radius: 5px;
					box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
					box-sizing: border-box;
					color: #202020;
					}

				.contact_form h2 {
					color: #00467F;
					font-weight: 400;
					padding: 0px;
					margin: 0px;
					margin-bottom: 10px;
					}

				.contact_contact {
					width: 40%;
					box-sizing: border-box;
					}

					.contact_contact h1 {
						margin:0px;
						padding:0px;
						margin-bottom:20px;
						font-weight: 600;
						font-size:28pt;
						line-height: 1.3em;
						}

					.contact_contact p {
						margin:0px;
						padding:0px;
						margin-bottom:30px;
						font-size:14pt;
						font-weight: 300;
						}

					.contact_contact p:last-child {
						margin-bottom:0px;
						}

					.contact_contact_item_container {
						display: flex;
						flex-wrap: wrap;
						justify-content: space-between;
						}
	
					.contact_contact_item {
						border: 1px solid #00467F;
						background: #ffffff;
						border-radius: 5px;
						margin-bottom: 30px;
						padding: 20px;
						box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
						font-size: 15pt;
						color: #00467F;
						width: 48%;
						box-sizing: border-box;
						}

						.contact_contact_item h5 {
							margin: 0px;
							padding: 0px;
							font-weight: 400;
							}

						.contact_contact_item a {
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

					.contact_form {
						width: 100%;
						order: 2;
						}

					.contact_contact {
						width: 100%;
						order: 1;
						}

				}

			</style>


			<div class="contact_container">

				<div class="contact_contact">

					<?php the_field('title'); ?>

					<div class="contact_contact_item_container">

						<div class="contact_contact_item">
							<h5><i class="far fa-phone-alt"></i> PHONE</h5>
							<a href="tel:203-446-8123">(203) 446-8123</a>
						</div>

						<div class="contact_contact_item">
							<h5><i class="far fa-envelope"></i> EMAIL</h5>
							<a href="mailto:info@insuriq.com">info@insuriq.com</a>
						</div>

					</div>

				</div>

				<div class="contact_form">
					<h2>Contact Us</h2>
					<?php gravity_form( 2, false, false, false, '', true, 12 ); ?>
				</div>


			</div>




			</div>
		</div>
	</div>

</div>





<?php get_template_part( 'content_block_builder'); ?>





<?php get_footer(); ?>
