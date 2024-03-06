<?php
/* Template Name: 404 Page */
the_post();
get_header(); ?>


<div class="hero_container" style="background-image: url('http://insuriq-com.stackstaging.com/wp-content/uploads/2022/09/hero6.jpg');">
	
	<div class="hero_overlay">
		<div class="hero_text">
			<div class="page_width">
				<div class="hero_text_inner">

					<h1>Oops, there is an error...</h1>
					<p>We know you didn't mean to end up here, but the page you are looking for can't be found.</p>
					<p><a href="/"><i class="far fa-arrow-alt-circle-left"></i>&nbsp; Take Me Back Home</a></p>

				</div>
			</div>
		</div>
	</div>

</div>


<div id="breadcrumbs_container"><div class="page_width_small"><?php custom_breadcrumbs(); ?></div></div>


<div class="page_content">


</div>




<?php get_footer(); ?>

