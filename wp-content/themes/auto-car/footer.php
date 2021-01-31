<?php
/**
 * The template for displaying the footer.
 *
 * @package auto-car
 * @since auto car 1.0
 */
$auto_car_settings = auto_car_get_theme_options();
?>
</div><!-- #content -->
<footer>
    <?php
    if (in_array('layout-pro/layout-pro.php', apply_filters('active_plugins', get_option('active_plugins')))) {
        echo do_shortcode('[lp_footer_widget]');
    } 
    ?>
    <div class="prefooter">
        <div class="container">
            <div class="row">
             <?php   if (! in_array('layout-pro/layout-pro.php', apply_filters('active_plugins', get_option('active_plugins')))) { ?>
             <div class="col-md-4 col-sm-12 pad0 foot-bor">
                            <?php
                                if ( is_active_sidebar( 'footer-1' ) ) {
                                    dynamic_sidebar( 'footer-1' );
                                }
                                else{
                                    if(is_user_logged_in() && current_user_can('edit_theme_options') ){
                                        echo '<h6 class="text-center"><a href="'.esc_url(admin_url("customize.php")).'"><i class="fa fa-plus-circle"></i>'.esc_html__('Assign a Widget', 'auto-car').'</a></h6>';
                                    }
                                }
                            ?>
                        </div>

                        <div class="col-md-4 col-sm-12 pad0 foot-bor">
                            <?php
                                if ( is_active_sidebar( 'footer-2' ) ) {
                                    dynamic_sidebar( 'footer-2' );
                                }
                                else{
                                    if(is_user_logged_in()&& current_user_can('edit_theme_options') ){
                                        echo '<h6 class="text-center"><a href="'.esc_url(admin_url("customize.php")).'"><i class="fa fa-plus-circle"></i>'.esc_html__('Assign a Widget', 'auto-car').'</a></h6>';
                                    }
                                }
                            ?>
                        </div>

                        <div class="col-md-4 col-sm-12 pad0 foot-bor br0">
                            <?php
                                if ( is_active_sidebar( 'footer-3' ) ) {
                                    dynamic_sidebar( 'footer-3' );
                                }
                                else{
                                    if(is_user_logged_in()&& current_user_can('edit_theme_options')  ){
                                        echo '<h6 class="text-center"><a href="'.esc_url(admin_url("customize.php")).'"><i class="fa fa-plus-circle"></i>'.esc_html__('Assign a Widget', 'auto-car').'</a></h6>';
                                    }
                                }
                            ?>
                        </div>

        
                <?php }
                ?>
            </div>
        </div>
    </div>
   
       <?php 
      if (in_array('layout-pro/layout-pro.php', apply_filters('active_plugins', get_option('active_plugins')))) {
                    echo do_shortcode('[lp_footer_replace]');
                } else { ?>
            <div class="bottomfooter">
               <div class="container">
                <?php
                    echo '<div class="col-md-12">';
                    echo '<div class="copyright">';
                    echo esc_html__('Powered By WordPress', 'auto-car');
                    echo '&nbsp;' . esc_html('|', 'auto-car') . '&nbsp;';
                    echo '<a href="' . esc_url('https://codethemes.co/') . '" target="_blank">' . ' ' . esc_html__('Code Themes', 'auto-car') . '</a>';
                    echo '</div>';
                    echo '</div>';
     
                ?> 
       </div> 
   </div>
   <?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
