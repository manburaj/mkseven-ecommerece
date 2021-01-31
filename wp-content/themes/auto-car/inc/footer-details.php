<?php
/**
 * @package auto-car
 * @since auto car 1.0
 */
?>
<?php
/************************* auto car FOOTER DETAILS **************************************/
if (! function_exists('auto_car_site_footer')) {
	function auto_car_site_footer() {
		$auto_car_settings = auto_car_get_theme_options();
		if ( is_active_sidebar( 'auto_car_footer_options' ) ) :
			dynamic_sidebar( 'auto_car_footer_options' );
		else:
			echo '<div class="copyright">';
			echo esc_html__('Theme by ', 'auto-car');
		 	echo '<a href="'.esc_url('https://codethemes.co/').'" target="_blank">'. ' ' .esc_html__('Code Themes', 'auto-car').'</a>';
		 	 ?>
		</div>
		<?php endif;
	}
	add_action( 'auto_car_sitegenerator_footer', 'auto_car_site_footer');
}