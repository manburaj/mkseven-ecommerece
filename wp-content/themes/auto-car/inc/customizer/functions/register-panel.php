<?php
/**
 * Theme Customizer Functions
 *
 * @package auto-car
 * @since auto car 1.0
 */
/******************** auto car CUSTOMIZE REGISTER *********************************************/
add_action( 'customize_register', 'auto_car_customize_register_options', 20 );
function auto_car_customize_register_options( $wp_customize ) {
	$wp_customize->add_panel( 'layout_pro_options_panel', array(
		'priority' => 2,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Options', 'auto-car' ),
		'description' => '',
	) );
}
function auto_car_register_theme_panel($wp_customize)
{
    $wp_customize->add_panel( 'layout_pro_options_panel', array(
        'priority' => 2,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' =>  esc_html__( 'Theme\'s Theme Options', 'auto-car' ),
        'description' => '',
    ) );
}
add_action('customize_register','auto_car_register_theme_panel');

add_action( 'customize_register', 'auto_car_customize_register_featuredcontent' );
function auto_car_customize_register_featuredcontent( $wp_customize ) {
	$wp_customize->add_panel( 'auto_car_featuredcontent_panel', array(
		'priority' => 31,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Slider Options', 'auto-car' ),
		'description' => '',
	) );
}

add_action( 'customize_register', 'auto_car_customize_register_widgets' );
function auto_car_customize_register_widgets( $wp_customize ) {
	$wp_customize->add_panel( 'widgets_register', array(
		'priority' => 33,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Widgets', 'auto-car' ),
		'description' => '',
	) );
}

?>