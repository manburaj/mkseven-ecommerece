<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package auto-car
 * @since auto car 1.0
 */
/*********** auto car ADD THEME SUPPORT FOR INFINITE SCROLL **************************/
if (! function_exists('auto_car_jetpack_setup')) {
	function auto_car_jetpack_setup() {
		add_theme_support( 'infinite-scroll', array(
			'container' => 'main',
			'footer'    => 'page',
		) );
	}
	add_action( 'after_setup_theme', 'auto_car_jetpack_setup' );
}