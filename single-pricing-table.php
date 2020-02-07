<?php  get_header(); ?>

	 <!--HOME SECTION START-->
    	<?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HOME SECTION END-->

    
    <div class="spacing40 clearfix"></div>       
    <div class="container">
				<?php 
                while (have_posts()) :
                the_post();
                ?>
    				<div class="col-md-4 col-md-offset-4"> 
						
						 <?php $p_type = apply_filters('get_the_content', get_post_meta($post->ID,  'pricing_table_type_meta_box' ,true ));
								if ($p_type == 'dark') {
								echo '<div class="padding align-center white-bg pricing-table special">';
                        	}   else { echo '<div class="padding align-center white-bg pricing-table">';
                        } ?>
                    	
                        	<h3><?php the_title(); ?></h3>
                            <i class="price-icon fa <?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'pricing_icon', true)); ?>"></i>
                            <p class="price"><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'pricing_price', true)); ?></p>
                            <?php the_content(); ?>
                            <div class="spacing40"></div>
                            <a class="view-more" href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'pricing_link', true)); ?>">
                            	<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'pricing_button', true)); ?>
                            </a>
                        </div><!--/.pricing-table-->
                    </div><!--/col-sm-6-->
                    <?php endwhile;  wp_reset_query();  ?>
                    <!--PRICING TABLE LOOP END-->
                    <div class="spacing40 clearfix"></div>
                   
                </div><!--/.row-->
    </div><!--/.teamajax-->
    <div class="spacing40 clearfix"></div>
    
   
    
    

<?php  get_footer(); ?>