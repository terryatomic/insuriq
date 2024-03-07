	<style type="text/css">
		
		.footer1 {
			position: relative;
			background: #1e4b88;
			margin-top: 200px;
			}
		
		.footer2 {
			position: relative;
			background: #00ADE5;
			padding: 50px 0;
			}
            .footer2 a {
                color: white;
            }

			.footer_contact {
				display: flex;
				justify-content: center;
				flex-wrap: wrap;
				color: #ffffff;
				width: 80%;
				margin: 0 auto;
				}

				.footer_contact_item {
					margin: 0 50px;
					font-size: 15pt;
					}

					.footer_contact_item h5 {
						margin: 0px;
						padding: 0px;
						font-size: 18px;
						font-weight: 600;
						letter-spacing: 2px;
						margin-bottom: 6px;
					}
                    
                    .footer_contact_item .far {
                        font-size: 18px;
                    }
		
		.footer3 {
			position: relative;
			background: white;
			color: #777;
			padding: 15px 0;
			text-align: center;
			}
		
			.footer3 a { color:#777; text-decoration: none; }

			@media only screen and (max-width: 750px) {

				.footer3 {
					font-size: 11pt;
					}
				
				.footer_contact {
					display: flex;
					justify-content: center;
					flex-wrap: wrap;
					color: #ffffff;
					width: 100%;
					margin: 0 auto;
					}

					.footer_contact_item {
						margin: 0;
						width: 50%;
						margin-bottom: 0px;
						text-align: center;
						}

					.footer_contact_item:last-child {
						margin-bottom: 0px;
						}

				}


			.footer_get_in_touch {
				position: relative;
				margin: 0 auto;
				width: 70%;
				background: url('<?php echo get_template_directory_uri();?>/images/footer_contact.jpg');
				padding: 20px 90px;
				border-radius: 4px;
				box-sizing: border-box;
				top: -80px;
				margin-bottom: -80px;
				text-align: center;
				color: #ffffff;
				box-shadow: 0px 0px 10px rgba(0,0,0,0.4);
				}

				.footer_get_in_touch h3 {
					margin: 10px 0;
					padding: 0px;
					font-size: 20pt;
					font-weight: 500;
					}

					.footer_get_in_touch a {
						marging: 0px;
						padding: 0px;
						font-size: 14pt;
						background: #84BA3D;
						color: #ffffff;
						border-radius: 4px;
						padding:10px 40px;
						display: inline-block;
						margin: 10px 0;
						}

			@media only screen and (max-width: 750px) {

				.footer_get_in_touch {
					margin: 0 auto;
					margin-bottom: -80px;
					width: 90%;
					padding: 20px 40px;
					}

			}

	</style>


	<div class="footer1">
		
		<div class="page_width">
			<div class="footer_get_in_touch">
				<h3>Find out how InsurIQ can help improve process inefficiencies in your insurance business.</h3>
				<a href="/contact">Request a Quote</a>
			</div>
		</div>


		<style type="text/css">
			
			.membership_logos {
				position: relative;
				padding: 40px 0;
				text-align: center;
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
				}
			
				.membership_logos_item {
					position: relative;
					margin: 0 20px;
					}
			
					.membership_logos_item img {
						height: 100px;
						}

		</style>


		<div class="membership_logos">
			<?php
			if( have_rows('membership_logos', 'options') ):
			while ( have_rows('membership_logos', 'options') ) : the_row();
			?>

				<div class="membership_logos_item"><img src="<?php the_sub_field('logo'); ?>" alt="" /></div>

			<?php
			endwhile;
			endif;
			?>
		</div>




	</div>


	<div class="footer2">
		
		<div class="page_width">
			<div class="footer_contact">
				<div class="footer_contact_item">
					<h5><i class="far fa-phone-alt"></i> PHONE</h5>
					<a href="tel:203-446-8123">(203) 446-8123</a>
					
				</div>
				<div class="footer_contact_item">
					<h5><i class="far fa-envelope"></i> EMAIL</h5>
					<a href="mailto:info@insuriq.com">info@insuriq.com</a>
				</div>
			</div>

		</div>

	</div>


	<div class="footer3">
		
		<div class="page_width">
			&copy; 2022 All Rights Reserved |  <a href="/privacy-policy/">Privacy Policy</a> |  <a href="/sitemap/">Sitemap</a>
		</div>

	</div>





<?php
wp_footer();
?>


</body>

</html>
