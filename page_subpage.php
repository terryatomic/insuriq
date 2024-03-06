<?php
/* Template Name: Sub Page */
the_post();
get_header(); ?>


<div class="page_width"><?php custom_breadcrumbs(); ?></div>



<?php get_template_part( 'content_block_builder'); ?>




<?php get_footer(); ?>
