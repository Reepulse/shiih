<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta name="author" content="<?php the_author_meta('display_name', 1); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <!--  Favicon -->
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'favicon_logo')) :  ?>
    <link rel="shortcut icon" href="<?php echo esc_url( ot_get_option( 'favicon_logo')); ?>"/>
    <?php  else :  ?>
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/images/favicon.png" />
    <?php endif ; endif; ?>
    <!--  Icon Touch -->
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'touch_logo')) :  ?>
    <link rel="apple-touch-icon" href="<?php echo esc_url( ot_get_option( 'touch_logo')); ?>"/>
    <?php  else :  ?>
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri()); ?>/images/favicon-touch.png" />
    <?php endif ; endif; ?>	
	<?php wp_head(); ?>  
    </head>

	<body <?php body_class(); ?>>
   
	
    
		<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'preloader_set')) :  
		 $preload = ot_get_option( 'preloader_set' ); if ($preload == 'show_home') {  ?>
            
            <?php  if (is_front_page() ){ ?>
            <!-- Preloader -->
            <div id="preloader">
                <div id="status">
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'loader_text')) :  ?>
                    <p><?php echo esc_attr ( ot_get_option( 'loader_text')); ?></p>
                <?php  else :  ?>
                    <p>Loading Content...</p>
                <?php endif ; endif; ?>
                </div>
            </div>
            
            <?php } 
        } else if ($preload == 'show_all') {?>
            <!-- Preloader -->
            <div id="preloader">
                <div id="status">
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'loader_text')) :  ?>
                    <p><?php echo esc_attr( ot_get_option( 'loader_text')); ?></p>
                <?php  else :  ?>
                    <p>Loading Content...</p>
                <?php endif ; endif; ?>
                </div>
            </div>
        
        <?php  }
        endif ; endif; ?>