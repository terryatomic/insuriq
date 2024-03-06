<div class="page_content">
    
    
    <?php
    if( get_field('flexible') ):
        while ( has_sub_field('flexible') ):
            ?>
            
            
            <?php if( get_row_layout() == 'icons_and_text_home_page' ): ?>
                
                <!-- /** HOME PAGE ICONS **/ -->
                
                
                <div class="home_icons_background">
                    <div class="page_width_small">
                        
                        <div class="home_icons">
                            
                            <?php
                            if( have_rows('home_icons') ):
                                while ( have_rows('home_icons') ) : the_row();
                                ?>
                                
                                <?php 
                                $image = get_sub_field('icon');
                                $size = 'large'; // (thumbnail, medium, large, full or custom size)
                                $image_url = wp_get_attachment_image_src($image, $size);
                                ?>
                                
                                <div class="home_icons_icon">
                                    <div class="home_icons_icon_image"><img src="<?php echo $image_url[0]; ?>" /></div>
                                    <div class="home_icons_icon_text"><?php the_sub_field('title'); ?></div>
                                </div>
                                
                                
                                <?php
                            endwhile;
                        endif;
                        ?>
                        
                    </div>
                    
                </div>
            </div>
            
            
        <?php elseif( get_row_layout() == 'content_box_image_left' ): ?>
            
            
            <div class="content_divider"></div>
            
            <!-- /** IMAGE LEFT **/ -->
            
            <?php 
            $image = get_sub_field('image');
            $size = 'large'; // (thumbnail, medium, large, full or custom size)
            $image_url = wp_get_attachment_image_src($image, $size);
            ?>
            
            
            <div class="page_width_small">
                <div class="content_with_image">
                    <div class="content_with_image_image" style="background-image:url('<?php echo $image_url[0]; ?>');"></div>
                    <div class="content_with_image_text">
                        <?php the_sub_field('content'); ?>
                    </div>
                </div>
            </div>
            
            
            
            
        <?php elseif( get_row_layout() == 'content_box_image_right' ): ?>
            
            <div class="content_divider"></div>
            
            <!-- /** IMAGE RIGHT **/ -->
            
            <?php 
            $image = get_sub_field('image');
            $size = 'large'; // (thumbnail, medium, large, full or custom size)
            $image_url = wp_get_attachment_image_src($image, $size);
            ?>
            
            
            <div class="page_width_small">
                <div class="content_with_image">
                    <div class="content_with_image_text">
                        <?php the_sub_field('content'); ?>
                    </div>
                    <div class="content_with_image_image" style="background-image:url('<?php echo $image_url[0]; ?>');"></div>
                </div>
            </div>
            
            
        <?php elseif( get_row_layout() == 'content_box_full_width' ): ?>
            
            <div class="content_divider"></div>
            
            <!-- /** FULL WIDTH **/ -->
            
            <div class="page_width_small">
                <div class="content_full_width">
                    <?php the_sub_field('content'); ?>
                </div>
            </div>
            
        <?php elseif( get_row_layout() == 'overviewcol' ): ?>
            <div class="content_divider"></div>
            <div class="page_width_small" id="overview">
                <div class="content_full_width">
                    <?php the_sub_field('overviewsol'); ?>
                </div>
            </div>
            
        <?php elseif( get_row_layout() == 'solution_box' ): ?>
            
            <div class="content_divider"></div>
            <!-- /** SOLUTION BOX **/ -->
            
            <div class="page_width_small">
                
                <div class="solution_box">
                    
                    <?php 
                    $image = get_sub_field('image');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    $image_url = wp_get_attachment_image_src($image, $size);
                    ?>
                    
                    <div class="solution_box_image" style="background-image: url('<?php echo $image_url[0]; ?>');"></div>
                    <div class="solution_box_text">
                        <?php the_sub_field('content'); ?>
                    </div>
                    
                </div>
                
            </div>
            
            
        <?php elseif( get_row_layout() == 'services_box' ): ?>
            
            <div class="content_divider"></div>
            
            <!-- /** SERVICES BOX **/ -->
            
            <div class="page_width_small">
                
                
                
                <div class="services_box">
                    
                    <?php
                    if( have_rows('service_boxes') ):
                        while ( have_rows('service_boxes') ) : the_row();
                        ?>
                        
                        <?php 
                        $image = get_sub_field('image');
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        $image_url = wp_get_attachment_image_src($image, $size);
                        ?>
                        
                        <div class="services_box_item">
                            <div class="services_box_item_image" style="background-image: url('<?php echo $image_url[0]; ?>');"></div>
                            <div class="services_box_item_text"><?php the_sub_field('content'); ?></div>
                        </div>
                        
                        
                        <?php
                    endwhile;
                endif;
                ?>
                
            </div>
            
        </div>
        
        
        
    <?php elseif( get_row_layout() == 'principals' ): ?>
        
        <div class="content_divider"></div>
        
        <!-- /** PRINCIPALS BOX **/ -->
        
        <div class="page_width_small">
            
            
            
            <style>
            
            .principals_box {
                display: flex;
                flex-wrap: wrap;
            }
            
            .principals_box_item {
                position: relative;
                box-sizing: border-box;
                box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
                padding: 30px;
                display: flex;
                flex-wrap: wrap;
                margin-bottom: 60px;
                justify-content: space-between;
                align-content: flex-start;
                align-items: flex-start;
            }
            
            .principals_box_item_image {
                width: 15%;
                border: 1px solid #cccccc;
                padding-bottom: 18%;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            
            .principals_box_item_text {
                width: 82%;
            }
            
            .principals_box_item_text h3 {
                padding: 0px;
                margin: 0px;
                font-size: 15pt;
            }
            
            .principals_box_item_text h5 {
                text-transform: uppercase;
                color: #202020;
                font-size: 9pt;
                letter-spacing: 1px;
                padding: 0px;
                margin: 0px;
            }
            
            .principals_box_item_text p {
                padding: 0px;
                margin: 0px;
            }
            
            
            @media only screen and (max-width: 750px) {
                
                
                .principals_box_item {
                    box-sizing: border-box;
                    box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
                    padding: 20px;
                    display: flex;
                    flex-wrap: wrap;
                    margin-bottom: 60px;
                    justify-content: space-between;
                    align-content: flex-start;
                    align-items: flex-start;
                }
                
                .principals_box_item_image {
                    width: 45%;
                    border: 1px solid #cccccc;
                    padding-bottom: 57%;
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    margin-bottom: 15px;					
                }
                
                .principals_box_item_text {
                    width: 100%;
                }
                
                
            }
            
            
        </style>
        
        
        <div class="principals_box">
            
            <?php
            if( have_rows('principal') ):
                while ( have_rows('principal') ) : the_row();
                ?>
                
                <?php 
                $image = get_sub_field('image');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                $image_url = wp_get_attachment_image_src($image, $size);
                ?>
                
                <div class="principals_box_item">
                    <div class="principals_box_item_image" style="background-image: url('<?php echo $image_url[0]; ?>');"></div>
                    <div class="principals_box_item_text">
                        <h3><?php the_sub_field('name'); ?></h3>
                        <h5><?php the_sub_field('job_title'); ?></h5>
                        <?php the_sub_field('bio'); ?>
                        <?php if( get_sub_field('linkedin') ): ?><p><a style="color:#0A66C2; margin-top:15px; display: inline-block;" href="<?php the_sub_field('linkedin'); ?>" target="_blank"><i class="fab fa-linkedin"></i> <?php the_sub_field('linkedin_display'); ?></a></p><?php endif; ?>
                    </div>
                </div>
                
                
                <?php
            endwhile;
        endif;
        ?>
        
    </div>
    
</div>



<?php elseif( get_row_layout() == 'on_the_road' ): ?>
    
    <div class="content_divider"></div>
    
    <!-- /** ON THE ROAD **/ -->
    
    <div class="on_the_road_background">
        
        <div class="page_width_small">
            
            <div class="on_the_road_intro">
                <?php the_sub_field('introduction'); ?>
            </div>
            
            
            <div class="on_the_road_boxes">
                
                
                <?php
                if( have_rows('event') ):
                    while ( have_rows('event') ) : the_row();
                    ?>
                    
                    <?php 
                    $image = get_sub_field('image');
                    $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                    $image_url = wp_get_attachment_image_src($image, $size);
                    ?>
                    
                    
                    <div class="on_the_road_boxes_item">
                        <div class="on_the_road_boxes_item_image" style="background-image:url('<?php echo $image_url[0]; ?>');">
                            <div class="on_the_road_boxes_item_image_text">
                                <?php the_sub_field('date'); ?>
                                <br />
                                <i><?php the_sub_field('location'); ?></i>
                            </div>						
                        </div>
                        <div class="on_the_road_boxes_item_text">
                            <?php the_sub_field('title'); ?>
                        </div>
                    </div>
                    
                    <?php
                endwhile;
            endif;
            ?>
            
            
        </div>
        
    </div>
</div>




<?php elseif( get_row_layout() == 'testimonials' ): ?>
    
    <div class="content_divider"></div>
    
    <!-- /** ON THE ROAD **/ -->
    
    <div class="testimonials">
        
        <div class="page_width_small">
            
            <h2><i class="fas fa-quote-left"></i></h2>
            
            <?php
            if( have_rows('testimonials') ):
                while ( have_rows('testimonials') ) : the_row();
                ?>
                
                <p><?php the_sub_field('content'); ?></p>
                <h6>- <?php the_sub_field('name'); ?></h6>
                
                <?php
            endwhile;
        endif;
        ?>
        
        
    </div>
</div>


<!-- Tiles -->
<?php if( get_row_layout() == 'tiles' ): ?>
    
    <!-- /** HOME PAGE ICONS **/ -->
    
    
    <div class="tiles-section">
        <div class="page_width_small">
            
            <div class="tiles">
                
                <?php
                if( have_rows('tiles') ):
                    while ( have_rows('tiles') ) : the_row();
                    ?>
                    
                    <?php 
                    $image = get_sub_field('icon');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    $image_url = wp_get_attachment_image_src($image, $size);
                    ?>
                    
                    <div class="tile_icon">
                        <div class="tile_icon_image"><img src="<?php echo $image_url[0]; ?>" /></div>
                        <div class="tile_icon_text"><?php the_sub_field('title'); ?></div>
                    </div>
                    
                    
                    <?php
                endwhile;
            endif;
            ?>
            
        </div>
        
    </div>
</div>



<?php elseif( get_row_layout() == 'partner_logos' ): ?>
    
    <div class="content_divider"></div>
    
    <!-- /** LOGOS **/ -->
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    
    <script>
    jQuery(document).ready(function($){
        
        $('.scrolling_logos').owlCarousel({
            loop:true,
            margin:50,
            nav:false,
            dots:false,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
                0:{ items:3 },
                600:{ items:5 },
                1000:{ items:6 }
            }
        });
        
    });
</script>



<div class="scrolling_logos owl-carousel">
    <?php
    if( have_rows('logos') ):
        while ( have_rows('logos') ) : the_row();
        ?>
        
        <div class="item"><img src="<?php the_sub_field('logo'); ?>" alt="" /></div>
        
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


