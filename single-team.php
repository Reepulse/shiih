<?php  get_header(); ?>

	 <!--HOME SECTION START-->
    	<?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HOME SECTION END-->

    
    <div class="spacing40 clearfix"></div>       
    <div class="container teamajax">
    <?php 
    while (have_posts()) :
    the_post();
    ?>
        <div class="white-bg clearfix">
        <div class="row">
         <?php if ( has_post_format( 'video' )) { ?>
            <div class="col-md-12"> 
                <div class="video clearfix">
                <iframe width="570" src="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'embed_post', true)); ?>?wmode=opaque;vq=hd720;rel=0;showinfo=0;controls=0" height="300">
                </iframe> 
                </div>  
            </div>
         <?php } else if( has_post_format( 'gallery' )) { ?>       
         <div class="col-md-12 gallery-inner">
            <?php echo apply_filters('the_content', get_post_meta($post->ID, 'gallery_port', true)); ?>
         </div>
         
         <?php } else if( has_post_format( 'audio' )) { ?>
         <div class="col-md-12 audio">
             <div class="audio-inner">
                 <?php echo apply_filters('the_content', get_post_meta($post->ID, 'embed_post', true)); ?>
             </div>
         </div>
         <?php } else { ?>
            <div class="col-md-12 work-img"> 
                <?php  the_post_thumbnail('full'); ?>
                
            </div>
          <!--/.span6-->
         <?php } ?>     
          
          	<div class="col-md-4">
                <div class="padding">
                    <p class="black-text"><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'black_text', true)); ?></p>
                    <p class="gray-text"><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'grey_text', true)); ?></p>
                    <h2 class="portajax-title"><?php the_title (); ?></h2>
                </div><!--/.padding-->
            </div><!--/col-md-4-->
            <div class="col-md-8">
                <div class="padding">
                     <?php the_content(); ?>
                     <div class="spacing40 clearfix"></div>
                     <ul class="team-social">
                     	<?php if ( get_post_meta($post->ID, 'facebook_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'facebook_social', true)); ?>">
                            	<i class="fa fa-facebook"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'twitter_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'twitter_social', true)); ?>">
                            	<i class="fa fa-twitter"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'google_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'google_social', true)); ?>">
                            	<i class="fa fa-google-plus"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'pinterest_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'pinterest_social', true)); ?>">
                            	<i class="fa fa-pinterest"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'skype_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'skype_social', true)); ?>">
                            	<i class="fa fa-skype"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'youtube_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'youtube_social', true)); ?>">
                            	<i class="fa fa-youtube"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'vimeo_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'vimeo_social', true)); ?>">
                            	<i class="fa fa-vimeo-square"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'flickr_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'flickr_social', true)); ?>">
                            	<i class="fa fa-flickr"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'vk_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'vk_social', true)); ?>">
                            	<i class="fa fa-vk"></i>
                            </a>
                        </li>
						<?php }?>
                        <?php if ( get_post_meta($post->ID, 'email_social', true) != "") { ?>
						<li>
                            <a href="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'email_social', true)); ?>">
                            	<i class="fa fa-envelope"></i>
                            </a>
                        </li>
						<?php }?>
                    </ul>
                     
                </div><!--/.padding-->
            </div><!--/col-md-8-->
            <div class="clearfix"></div>
            <div class="col-md-12">
            	<div class="margin align-right">
                	<a class="team-close" href="#"><i class="fa fa-times"></i></a>
            		<p>
                        <span class="strong">Favorite:</span>
                        <?php $taxonomy = 'team_favorite'; $terms = wp_get_post_terms($post->ID,$taxonomy);  ?> 
                        <span class="condensed"><?php $cats = array();  foreach ( $terms as $term ) { $cats[] =   $term->name ;   } echo implode(', ', $cats);?></span>
                    </p>
                </div><!--/.margin-->
            </div><!--/col-md-12-->
          </div><!--/.row-->
      </div><!--/white-bg-->
      <?php  endwhile; ?> 
    </div><!--/.teamajax-->
    <div class="spacing40 clearfix"></div>
    
   
    
    

<?php  get_footer(); ?>