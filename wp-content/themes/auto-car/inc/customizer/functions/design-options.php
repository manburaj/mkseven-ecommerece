<?php
/**
 * Theme Customizer Functions
 *
 * @package auto-car
 * @since auto car 1.0
 */
$auto_car_settings = auto_car_get_theme_options();
/******************** auto car LAYOUT OPTIONS ******************************************/

    $wp_customize->add_setting( 'auto_car_theme_options[auto_car_sidebar_status]', array(
        'default' => $auto_car_settings['auto_car_sidebar_status'],
        'sanitize_callback' => 'auto_car_sanitize_select',
        'type' => 'option',
    ));
    $wp_customize->add_control( 'auto_car_theme_options[auto_car_sidebar_status]', array(
        'priority'=>45,
        'label' => __('Show / Hide Sidebar', 'auto-car'),
        'section' => 'auto_car_custom_header',
        'type'	=> 'select',
        'choices' => array(
            'show-sidebar' => __('Show Sidebar','auto-car'),
            'hide-sidebar' => __('Hide Sidebar','auto-car'),
        ),
    ));

	$wp_customize->add_setting( 'auto_car_theme_options[auto_car_entry_meta_blog]', array(
		'default' => $auto_car_settings['auto_car_entry_meta_blog'],
		'sanitize_callback' => 'auto_car_sanitize_select',
		'type' => 'option',
	));
	$wp_customize->add_control( 'auto_car_theme_options[auto_car_entry_meta_blog]', array(
		'priority'=>45,
		'label' => __('Meta for blog page', 'auto-car'),
		'section' => 'auto_car_custom_header',
		'type'	=> 'select',
		'choices' => array(
		'show-meta' => __('Show Meta','auto-car'),
		'hide-meta' => __('Hide Meta','auto-car'),
	),
	));
	$wp_customize->add_setting('auto_car_theme_options[auto_car_design_layout]', array(
		'default'        => $auto_car_settings['auto_car_design_layout'],
		'sanitize_callback' => 'auto_car_sanitize_select',
		'type'                  => 'option',
	));
	$wp_customize->add_control('auto_car_theme_options[auto_car_design_layout]', array(
	'priority'  =>50,
	'label'      => __('Design Layout', 'auto-car'),
	'section'    => 'auto_car_custom_header',
	'type'       => 'select',
	'checked'   => 'checked',
	'choices'    => array(
		'wide-layout' => __('Full Width Layout','auto-car'),
		'boxed-layout' => __('Boxed Layout','auto-car'),
	),
));
?>