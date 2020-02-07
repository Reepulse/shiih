<?php  
/*
* Template Name: Alamak Homepage Custom Layout
* Description: Alamak Homepage Custom Layout
*/
get_header(); ?>

        <!--HOME SECTION START-->
    	<section id="home" class="clearfix">
		
                <?php get_template_part( 'loop/home', 'menu' ); ?>	
			
			<?php if (ot_get_option( 'home_setting' ) == 'youtube_bg_home') {?>
			<!--YOUTUBE BACKGROUND-->
			<div class="bg-youtube" data-property="{
														videoURL:'http://www.youtube.com/watch?v=<?php echo esc_attr(ot_get_option( 'youtube_video_bg_link' )); ?>', 
														opacity:1, 
														autoPlay:true, 
														containment:'#home', 
														<?php if  (  ot_get_option( 'yt_mute' ) == 'on') { echo ' mute:true, '; } ?> 
														optimizeDisplay:true, 
														showControls:false, 
														loop:true, 
														addRaster:false, 
														quality:'large', 
														realfullscreen:'true', 
														ratio:'auto'
													}">
			</div>
			<!--YOUTUBE BACKGROUND END-->
			<?php } ?>
			
            <div class="clearfix"></div>
            <div class="container">
            	<div class="row">
                	
                    <div class="col-md-6"> 
                    	<div class="slider-content clearfix">
                            <!--SLIDER CAPTION START-->  
                            <div class="title-caption">
                                <h4><?php if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'slider_cap_top' )) { echo esc_attr ( ot_get_option( 'slider_cap_top' )); 
								} else { echo "We are creative agency";} ?></h4>
                            </div><!--/.title-caption-->
                            <?php if (ot_get_option( 'home_setting' ) == 'slider_bg_home') {?>
                            <div id="slidecaption"></div> 
                            <?php } else { ?>
                            <div id="slidecaption">
                                <h2>
                                <?php if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'caption_text_bottom' )) { echo esc_attr (ot_get_option( 'caption_text_bottom' )); 
								} else { echo "Bunch of Creative<br/>People & Idea";} ?>
                                </h2>
                            </div><!--/slidecaption-->
							<?php } ?>
                            <!--SLIDER CAPTION END--> 
                            
                            <div class="centering">
                                <div id="progress-back">
                                    <div id="progress-bar"></div><!--SLIDER PROGRESS BAR-->
                                </div>
                            </div><!--/.centering-->
                        </div><!--/.slider-content-->
                    </div><!--/.col-sm-6-->  
                	
                </div><!--/row-->
            </div><!--/container-->
        </section><!--/home-->
        <!--HOME SECTION END-->
        
<!--BUILDER START-->
<?php if ( function_exists( 'ot_get_option' ) ) {
  
  /* get the slider array */
  $sections = ot_get_option( 'custom_layout', array() );
  
  if ( ! empty( $sections ) ) {
    foreach( $sections as $section ) {
		if ( $section['section_type'] == 'about_content' ) {
		   get_template_part( 'builder/about', 'loop' ); 
		} else
		if ( $section['section_type'] == 'contact_content' ) {
		   get_template_part( 'builder/contact', 'loop' ); 
		} else
		if ( $section['section_type'] == 'portfolio_content' ) {
		   get_template_part( 'builder/portfolio', 'loop' ); 
		} else
		if ( $section['section_type'] == 'services_content' ){
			 get_template_part( 'builder/services', 'loop' ); 
		}
		if ( $section['section_type'] == 'twitter_content' ){
			 get_template_part( 'builder/twitter', 'loop' ); 
		}
		if ( $section['section_type'] == 'quote_content' ){
			 get_template_part( 'builder/quote', 'parallax' ); 
		}
		if ( $section['section_type'] == 'testimonial_content' ){
			 get_template_part( 'builder/testimonial', 'loop' ); 
		}
    }
  }
  
}
?>
<!--BUILDER END-->

<?php get_footer(); ?>