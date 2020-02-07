        <section class="footer clearfix">
        	<div class="container">
            	<div class="row">
                    <div class="col-sm-6">
					
                    	<p> 
						<?php $fot_text = ot_get_option( 'footer_text' );
						if  ( function_exists( 'ot_get_option' ) && ot_get_option( 'footer_text' )) { 
						echo wp_kses_post( $fot_text ); }
						?>
							
                        </p>
                        <a class="fpolicy" href="<?php if  ( function_exists( 'ot_get_option' )) { echo esc_url( ot_get_option( 'fpolicy' ) ); } ?>" style="margin-right: 10px;">Privacy Policy</a>
                        <a class="fpolicy" href="<?php if  ( function_exists( 'ot_get_option' )) { echo esc_url( ot_get_option( 'fcomment' ) ); } ?>">Comment Policy</a>
                        <div class="clearfix" style="margin-bottom:30px;"></div>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                    	<ul class="soc-footer">
                        	<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_facebook')) :  ?>
                            	<li><a href="<?php  echo esc_url ( ot_get_option( 'social_facebook' )); ?>"><i class="fa fa-facebook"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_instagram')) :  ?>
                            	<li><a href="<?php  echo esc_url (ot_get_option( 'social_instagram' )); ?>"><i class="fa fa-instagram"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_twitter')) :  ?>
                            	<li><a href="<?php  echo esc_url (ot_get_option( 'social_twitter' )); ?>"><i class="fa fa-twitter"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_pinterest')) :  ?>
                            	<li><a href="<?php  echo esc_url (ot_get_option( 'social_pinterest' )); ?>"><i class="fa fa-pinterest"></i></a></li>
                            <?php endif ; endif; ?>
                            <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'social_youtube')) :  ?>
                            	<li><a href="<?php  echo esc_url ( ot_get_option( 'social_youtube' )); ?>"><i class="fa fa-youtube"></i></a></li>
                            <?php endif ; endif; ?>
                            <!--ANOTHER SOCIAL ICON LIST-->
                            <?php
								if  ( function_exists( 'ot_get_option' )){
								 /* get the icon list */
								 $socials = ot_get_option( 'another_social_link', array() );
								 
								 if ( ! empty( $socials ) ) {
									 foreach( $socials as $social ) {
										 echo '
										 <li><a href="' . esc_url ( $social['own_link'] ). '"><i class="fa ' . esc_attr ( $social['own_icon']) . '"></i></a></li>
										';
									 }
								 }
								}				
							?>
                            <!--ANOTHER SOCIAL ICON LIST END-->
                        </ul><!--/.soc-footer-->
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div>
        </section><!--footer-->
	<?php wp_footer(); ?>
</body>
</html>