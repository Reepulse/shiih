<?php  
/*
* Template Name: Alamak Portfolio List
* Description: Alamak Portfolio List
*/  

get_header(); ?>
        <!--HOME SECTION START-->
    	<?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HOME SECTION END-->
        
        <!--PORTFOLIO SECTION START--> 
        <section id="portfolio" class="clearfix content">
        	<div class="container">
            	<div class="title-content clearfix">
                	<div class="title-inner">
                    	<h3><?php if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'pp_big_title' )) { echo esc_attr (ot_get_option( 'pp_big_title' )); } else { echo "Our Works";} ?></h3>
                        <p><?php if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'pp_small_title' )) { echo esc_attr (ot_get_option( 'pp_small_title' )); } else { echo "What we've done so far";} ?></p>
                    </div><!--/.title-inner-->
                </div><!--/.title-content-->
                
                	
                
                <!--AJAX PORTFOLIO WILL SHOWN HERE-->
                <div id="workslist">
                     <div class="clearfix worksajax">
                     </div><!--/.worksajax -->
                </div><!--/workslist-->
                <!--AJAX PORTFOLIO END-->
                	<ul class="port-filter">
                    	<li><a class="white-btn" data-filter="*" href="#">All</a></li>
                    	<?php
						$taxonomy = 'portfolio_category';
						$terms = get_terms($taxonomy); // Get all terms of a taxonomy
						if ( $terms && !is_wp_error( $terms ) ) :
							foreach ( $terms as $term ) { ?>
                                	<li><a class="white-btn" data-filter=".<?php echo  strtolower(preg_replace('/\s+/', '-', $term->name)); ?>" href="#">
									<?php echo $term->name; ?></a></li>
								<?php } 
						endif;?>
                    </ul>
                <div class="row portfolio-body">
                    <!--PORTFOLIO LOOP START-->
                    <?php
					  $type = 'portfolio';
					  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					  if  ( ot_get_option( 'portfolio_single' ) != '') { 
					  $args=array(
						'post_type' => 'portfolio',
						'paged' => $paged,
						'posts_per_page' => ot_get_option( 'portfolio_single' ),
						'ignore_sticky_posts'=> 1
					  );
					  } else {
						 $args=array(
						'post_type' => 'portfolio',
						'paged' => $paged,
						'posts_per_page' => 6,
						'ignore_sticky_posts'=> 1
					  );
					  }
					  
					  $ports = null;
					  $ports = new WP_Query();
					  $ports->query($args);
					while ( $ports->have_posts() ) : $ports->the_post();
					$terms = get_the_terms( get_the_ID(), 'portfolio_category' ); ?> 
                    
                    <div class="col-md-6 port-item <?php foreach ($terms as $term) { echo  strtolower(preg_replace('/\s+/', '-', $term->name)). ' '; } ?>
                    <?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo $class . " "; } ?>" id="post-<?php the_ID(); ?>">
                        <div class="port-inner white-bg clearfix">
                        	<!--get original featured image link-->
                        	<?php
							$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
							?>
                            <a class="box-40 hovers bwWrapper" data-rel="prettyPhoto" href="<?php echo $image_url[0];  ?>" >
                            	<?php the_post_thumbnail('portfolio-image'); ?>
                            </a>
                            <a class="more" href="#" data-link="<?php the_permalink(); ?>"><span class="hov-desc">View Detail</span><i class="fa fa-chain"></i></a>
                            <div class="padding box-60">
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                                <?php  if ( has_post_format( 'video' )) { ?>
                                <i class="cat-icon fa fa-film" data-link="<?php the_permalink(); ?>"></i>
                                <?php } else if( has_post_format( 'gallery' )) { ?>
                                <i class="cat-icon fa fa-picture-o" data-link="<?php the_permalink(); ?>"></i>
                                <?php } else if( has_post_format( 'audio' )) { ?>
                                <i class="cat-icon fa fa-headphones" data-link="<?php the_permalink(); ?>"></i>
                                <?php } else { ?>
                                <i class="cat-icon fa fa-html5" data-link="<?php the_permalink(); ?>"></i>
                                <?php } ?>
                            </div><!--/.padding-->
                        </div><!--/.port-inner-->
                    </div><!--/.col-md-6-->
					<?php
					endwhile;
					?>
                    <!--PORTFOLIO LOOP END-->
                    
                </div><!--/.row--> 
                <?php kriesi_pagination($ports->max_num_pages); ?>
            </div><!--/.container-->
        </section><!--/portfolio-->
  		<!--PORTFOLIO SECTION END-->
        
<?php  get_footer(); ?>