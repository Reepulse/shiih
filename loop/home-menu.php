
        	<div class="header clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 col-sm-4">
                           <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'logo_web')) :  ?>
                                <a  class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src='<?php echo esc_url( ot_get_option( 'logo_web' )); ?>' alt='logo'></a>
                            <?php  else :  ?>
                                <a  class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>" alt="logo"/></a>
                            <?php endif ; endif; ?>
                        </div><!--/.col-md-4-->
                        <div class="col-md-8">
                        	 <!--MENU BUTTON(ON TABLET/MOBILE) START-->
                        	<div class="menu-btn" data-target=".nav-collapse" data-toggle="collapse">
                                <span class="fa fa-th"></span>
                            </div>
                            <!--MENU BUTTON END-->
                            
                            <!--NAVIGATION START-->
                            <?php wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="navigation desktop-menu %2$s">%3$s</ul>', 'theme_location' => 'header-menu' ) ); ?>
                            <ul class="nav-collapse mobile-menu"></ul>
                            <!--NAVIGATION END-->
                             
                             
                        </div><!--/.col-md-4-->
                    </div><!--/.row-->
                </div><!--/.container-->   
            </div><!--/.header-->
