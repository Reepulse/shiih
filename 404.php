<?php get_header(); ?>

	<!--HOME SECTION START-->
    <?php get_template_part( 'loop/other', 'menu' ); ?>	
    <!--HOME SECTION END-->
    <div class="clearfix white-bg">   
        <div class="spacing80"></div>        
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                <div class="padding white-bg align-center">
                    <div class="spacing80 clearfix"></div>
                        <h2 class="big-404">404!</h2>
                        <h3 class="title-404"><i class="fa fa-exclamation-circle"></i> Im sorry, page not found</h3>
                        <p class="text-404">return to  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage</a> now!</p>
                    <div class="spacing80 clearfix"></div>
                </div><!--/.padding-->
                </div><!--/.col-md-9-->
                <?php get_sidebar(); ?> 
            </div><!--/.row-->
        </div><!--/.container-->
        <div class="spacing80"></div>
    </div><!--/.white-bg-->
    

    
<?php get_footer(); ?> 