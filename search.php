<?php  get_header(); ?>
        <!--HOME SECTION START-->
    	<?php get_template_part( 'loop/other', 'menu' ); ?>
        <!--HOME SECTION END-->
        
        <div class="white-bg clearfix">
            <div class="container">
                <div class="spacing80"></div> 
                <h3 class="show-title"><span>Show result for "</span><?php the_search_query() ?>" </h3>  
                <div class="spacing40"></div>
                <div class="row">
                    <div class="col-md-9">
                        <?php if ( have_posts() )  : while ( have_posts() ) : the_post(); ?>
                            <?php  if ( has_post_format( 'video' )) { ?>
                            <article id="post-<?php  the_ID(); ?>" <?php  post_class('clearfix post-content white-bg'); ?>>
                                <div class="video clearfix">
                                    <iframe width="570" src="<?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'embed_post', true)); ?>?wmode=opaque;vq=hd720;rel=0;showinfo=0;" height="300"></iframe> 
                                </div> 
                                 <div class="post-inner clearfix"> 
                                     <div class="padding">
                                         <p class="black-text"><?php the_time(get_option('date_format')); ?></p>
                                         <p class="gray-text"><?php the_category(', '); ?></p>
                                         <a class="title-link" href="<?php the_permalink(); ?>"><h2 class="content-title"><?php the_title (); ?></h2></a>
                                         <div class="spacing40"></div>
                                         <?php the_excerpt() ; ?>
                                         <div class="spacing40 clearfix"></div>
                                         <a class="view-more" href="<?php the_permalink(); ?>">Read More</a>
                                     </div><!--/.padding-->
                                     
                                     <div class="margin align-right">
                                         <p>
                                         <span class="strong">Tags:</span>
                                         <span class="condensed"><?php the_tags('', ', '); ?></span>
                                         </p>
                                     </div> <!--/.margin-->
                                </div><!--/.post-inner-->
                            </article><!--/.post-content-->
                                  
                            <?php } else if ( has_post_format( 'audio' )) { ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix post-content white-bg'); ?>> 
                                <div class="audio clearfix">
                                    <?php echo apply_filters('the_content', get_post_meta($post->ID, 'embed_post', true)); ?>
                                </div><!--/.audio-->
                                <div class="post-inner clearfix"> 
                                     <div class="padding">
                                         <p class="black-text"><?php the_time(get_option('date_format')); ?></p>
                                         <p class="gray-text"><?php the_category(', '); ?></p>
                                         <a class="title-link" href="<?php the_permalink(); ?>"><h2 class="content-title"><?php the_title (); ?></h2></a>
                                         <div class="spacing40"></div>
                                         <?php the_excerpt() ; ?>
                                         <div class="spacing40 clearfix"></div>
                                         <a class="view-more" href="<?php the_permalink(); ?>">Read More</a>
                                     </div><!--/.padding-->
                                     
                                     <div class="margin align-right">
                                         <p>
                                         <span class="strong">Tags:</span>
                                         <span class="condensed"><?php the_tags('', ', '); ?></span>
                                         </p>
                                     </div> <!--/.margin-->
                                </div><!--/.post-inner-->
                            </article><!--/.post-content-->
                            
                            <?php } else if ( has_post_format( 'quote' )) { ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix post-with-quote white-bg'); ?>>
                                <blockquote>
                                    <?php the_content(); ?>
                                    <small><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'quote_author', true)); ?></small>
                                </blockquote>
                                <i class="fa fa-quote-right quote-icon"></i> 
                            </article><!--/.quote--> 
                            
                            <?php } else if ( has_post_format( 'link' )) { ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix link white-bg'); ?>>
                                <div class="link-image clearfix">
                                    <?php $linkcode = apply_filters('get_the_content', get_post_meta($post->ID, 'link_post_url', true)); ?>
                                    <a href="<?php echo $linkcode ?>" target="_blank">
                                    <div class="image-link"><?php the_post_thumbnail(); ?></div>
                                    <p><i class="fa fa-link"></i> <?php echo $linkcode ?></p>
                                    </a>
                                </div><!--/.link-image-->  
                                <div class="post-inner clearfix"> 
                                     <div class="padding">
                                         <p class="black-text"><?php the_time(get_option('date_format')); ?></p>
                                         <p class="gray-text"><?php the_category(', '); ?></p>
                                         <a class="title-link" href="<?php the_permalink(); ?>"><h2 class="content-title"><?php the_title (); ?></h2></a>
                                         <div class="spacing40"></div>
                                         <?php the_excerpt() ; ?>
                                         <div class="spacing40 clearfix"></div>
                                         <a class="view-more" href="<?php the_permalink(); ?>">Read More</a>
                                     </div><!--/.padding-->
                                     
                                     <div class="margin align-right">
                                         <p>
                                         <span class="strong">Tags:</span>
                                         <span class="condensed"><?php the_tags('', ', '); ?></span>
                                         </p>
                                     </div> <!--/.margin-->
                                </div><!--/.post-inner-->
                            </article><!--/.link-->   
                                  
                            <?php } else if ( has_post_format( 'aside' )) { ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix aside-body white-bg'); ?>>
                                <div class="image-aside"><?php the_post_thumbnail(); ?></div>
                                <aside class="aside">
                                    <div class="aside-title clearfix">
                                        <h2 class="content-title"><?php the_title (); ?></h2>
                                        <div class="spacing40"></div>
                                    </div><!--/.post-title--> 
                                    <?php the_content(); ?>
                                    <div class="spacing40"></div>
                                </aside><!--/.aside-->
                            </article><!--/.aside-body-->  
                                       
                            <?php } else if ( has_post_format( 'gallery' )) { ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix gallery-content white-bg'); ?>>
                                <div class="gallery-inner clearfix">
                                    <?php echo apply_filters('the_content', get_post_meta($post->ID, 'gallery_post', true)); ?>
                                </div><!--/.post-image-->
                               <div class="post-inner clearfix"> 
                                     <div class="padding">
                                         <p class="black-text"><?php the_time(get_option('date_format')); ?></p>
                                         <p class="gray-text"><?php the_category(', '); ?></p>
                                         <a class="title-link" href="<?php the_permalink(); ?>"><h2 class="content-title"><?php the_title (); ?></h2></a>
                                         <div class="spacing40"></div>
                                         <?php the_excerpt() ; ?>
                                         <div class="spacing40 clearfix"></div>
                                         <a class="view-more" href="<?php the_permalink(); ?>">Read More</a>
                                     </div><!--/.padding-->
                                     
                                     <div class="margin align-right">
                                         <p>
                                         <span class="strong">Tags:</span>
                                         <span class="condensed"><?php the_tags('', ', '); ?></span>
                                         </p>
                                     </div> <!--/.margin-->
                                </div><!--/.post-inner-->
                            </article><!--/.gallery-content-->
                                     
                            <?php } else { ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix post-content white-bg'); ?>>
                                <div class="post-image clearfix">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="mask-post">
                                        <div class="mask-inner">
                                            <a title ="<?php the_title (); ?>" href="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); echo $src[0]; ?>" 
                                            data-rel="prettyPhoto">
                                            <i class="fa fa-search"></i>
                                            </a> 
                                            <a title ="View Post" href="<?php the_permalink(); ?>"><i class="fa fa-paperclip"></i></a>
                                        </div><!--/.mask-inner-->
                                    </div><!--/.mask-post-->
                                </div><!--/.post-image-->
                                <div class="post-inner clearfix"> 
                                     <div class="padding">
                                         <p class="black-text"><?php the_time(get_option('date_format')); ?></p>
                                         <p class="gray-text"><?php the_category(', '); ?></p>
                                         <a class="title-link" href="<?php the_permalink(); ?>"><h2 class="content-title"><?php the_title (); ?></h2></a>
                                         <div class="spacing40"></div>
                                         <?php the_excerpt() ; ?>
                                         <div class="spacing40 clearfix"></div>
                                         <a class="view-more" href="<?php the_permalink(); ?>">Read More</a>
                                     </div><!--/.padding-->
                                     
                                     <div class="margin align-right">
                                         <p>
                                         <span class="strong">Tags:</span>
                                         <span class="condensed"><?php the_tags('', ', '); ?></span>
                                         </p>
                                     </div> <!--/.margin-->
                                </div><!--/.post-inner-->
                            </article><!--/.post-content-->
         
                            <?php  } ?>
                            <div class="spacing40"></div>
                        <?php endwhile; else: ?><!--if no search result-->
                    		<h3 class="show-title noborder"><i class="fa fa-meh-o"></i> <span>Nothing found for</span> "<?php the_search_query() ?>"</h3>
                            <div class="spacing40"></div>
                    	<?php endif; ?>
                        <div class="spacing40"></div>
                        <?php  kriesi_pagination(); ?>
                    </div><!--/.span8-->  
                    <?php get_sidebar(); ?>
                </div><!--/.row-->
            </div><!--/.container-->
            <div class="spacing80 clearfix"></div>
		</div><!--/.white-bg-->
<?php  get_footer(); ?>