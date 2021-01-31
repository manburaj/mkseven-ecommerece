<?php
/**
 * Theme Customizer Functions
 *
 * @package auto-car
 * @since auto car 1.0
 */
/******************** auto car SLIDER SETTINGS ******************************************/
$auto_car_settings = auto_car_get_theme_options();

$wp_customize->add_section( 'auto_car_page_post_options', array(
	'title' => __('Slider Option','auto-car'),
	'priority' => 1,
	'panel' =>'layout_pro_options_panel'
));
for ( $i=1; $i <= $auto_car_settings['auto_car_slider_no'] ; $i++ ) {
	$wp_customize->add_setting('auto_car_theme_options[auto_car_featured_page_slider_'. $i .']', array(
		'default' =>'',
		'sanitize_callback' =>'auto_car_sanitize_page',
		'type' => 'option',
		'capability' => 'edit_theme_options'
	));
	$wp_customize->add_control( 'auto_car_theme_options[auto_car_featured_page_slider_'. $i .']', array(
		'priority' => 220 . $i,
		'label' => __(' Page Slider', 'auto-car') . ' ' . $i ,
		'section' => 'auto_car_page_post_options',
		'type' => 'dropdown-pages',
	));
}



     /******************************/
        /***** For auto car call to action *****/
        /******************************/

        $wp_customize->add_section('auto_car_callout_section', array(
            'title' => __('Call Out Options', 'auto-car'),
            'panel' => 'layout_pro_options_panel',
            'priority' => 3,
        ));

        $wp_customize->add_setting('auto_car_theme_options[auto_car_callout_section_pages_title]', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
            'default' => $auto_car_settings['auto_car_callout_section_pages_title'],
             'type' => 'option',

        ));

        $wp_customize->add_control('auto_car_theme_options[auto_car_callout_section_pages_title]', array(
            'label' => __('Callout Title', 'auto-car'),
            'section' => 'auto_car_callout_section',
            'type' => 'text',
            'priority' => 2,
        ));
        $wp_customize->add_setting('auto_car_theme_options[auto_car_callout_section_pages_description]', array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_html',
            'default' => $auto_car_settings['auto_car_callout_section_pages_description'],
             'type' => 'option',

        ));

        $wp_customize->add_control('auto_car_theme_options[auto_car_callout_section_pages_description]', array(
            'label' => __('Callout Description', 'auto-car'),
            'section' => 'auto_car_callout_section',
            'type' => 'text',
            'priority' => 3,
        ));

        $wp_customize->add_setting('auto_car_theme_options[auto_car_callout_section_pages_selection]', array(
           'default' => $auto_car_settings['auto_car_callout_section_pages_selection'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'auto_car_text_sanitize',
             'type' => 'option',
        ));
        $wp_customize->add_control(new auto_car_Page_Dropdown_control($wp_customize, 'auto_car_theme_options[auto_car_callout_section_pages_selection]', array(
            'label' => __('Select 3 Pages To Show Below Slider', 'auto-car'),
            'description' => __('Select a category to display post below the slider', 'auto-car'),
            'section' => 'auto_car_callout_section',
            'priority' => 4,

        )));


 /******************************/
        /***** For auto car about us option *****/
        /******************************/

        $wp_customize->add_section('auto_car_aboutus_section', array(
            'title' => __('About Us Options', 'auto-car'),
            'panel' => 'layout_pro_options_panel',
            'priority' => 2,
        ));

       
          $wp_customize->add_setting(
            'auto_car_theme_options[auto_car_aboutus_page]',
            array(
                'default' => $auto_car_settings['auto_car_aboutus_page'],
                'type' => 'option',
                'sanitize_callback' => 'absint',
                'capability' => 'edit_theme_options'
            )
                );
        $wp_customize->add_control('auto_car_theme_options[auto_car_aboutus_page]', array(
            'label' => esc_html__('Choose About Us Page :', 'auto-car'),
            'type' => 'dropdown-pages',
            'section' => 'auto_car_aboutus_section',
            
        ));
       
