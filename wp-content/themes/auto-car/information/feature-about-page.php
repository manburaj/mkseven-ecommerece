<?php
/**
 * Lite Manager
 *
 * @package auto-car
 * @since 1.0.12
 */


/**
 * About page class
 */
require_once get_template_directory() . '/information/auto-car-about-page/class-auto-car-about-page.php';

/*
* About page instance
*/
$config = array(
	// Menu name under Appearance.
	'menu_name'           => apply_filters( 'auto_car_about_page_filter', __( 'About Auto Car', 'auto-car' ), 'menu_name' ),
	// Page title.
	'page_name'           => apply_filters( 'auto_car_about_page_filter', __( 'About Auto Car', 'auto-car' ), 'page_name' ),
	// Main welcome title
	/* translators: s - theme name */
	'welcome_title'       => apply_filters( 'auto_car_about_page_filter', sprintf( __( 'Welcome to %s! - Version ', 'auto-car' ), 'Auto-Car' ), 'welcome_title' ),
	// Main welcome content
	'welcome_content'     => apply_filters( 'auto_car_about_page_filter', esc_html__( 'Auto Car is a free WordPress theme created for Automobile dealers and resellers. Use this to provide a better interface for you automobile website.', 'auto-car' ), 'welcome_content' ),
	/**
	 * Tabs array.
	 *
	 * The key needs to be ONLY consisted from letters and underscores. If we want to define outside the class a function to render the tab,
	 * the will be the name of the function which will be used to render the tab content.
	 */
	'tabs'                => array(
		'getting_started'     => __( 'Getting Started', 'auto-car' ),
		'recommended_actions' => __( 'Required Actions', 'auto-car' ),
		'demo_import'         => __( 'Demo Import', 'auto-car' ),
		'support'             => __( 'Support', 'auto-car' ),
		'changelog'           => __( 'Request Customization Support', 'auto-car' ),
		
	),
	// Support content tab.
	'support_content'     => array(
		'first'  => array(
			'title'        => esc_html__( 'Contact Support', 'auto-car' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'We want to make sure you have the best experience using auto car, and that is why we have gathered all the necessary information here for you. We hope you will enjoy using auto car as much as we enjoy creating great products.', 'auto-car' ),
			'button_label' => esc_html__( 'Contact Support', 'auto-car' ),
			'button_link'  => esc_url( 'https://codethemes.co/support' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Documentation', 'auto-car' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use auto car.', 'auto-car' ),
			'button_label' => esc_html__( 'Read full documentation', 'auto-car' ),
			'button_link'  => esc_url('https://docs.codethemes.co/docs/auto-car-lite/'),
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third'  => array(
			'title'        => esc_html__( 'Request Customization Support', 'auto-car' ),
			'icon'         => 'dashicons dashicons-portfolio',
			'text'         => esc_html__( 'Want to get the gist on the latest theme changes? Just consult our changelog below to get a taste of the recent fixes and features implemented.', 'auto-car' ),
			'button_label' => esc_html__( 'Request Customization Support', 'auto-car' ),
			'button_link'  => esc_url( 'https://codethemes.co/support/#customization_support' ),
			'is_button'    => false,
			'is_new_tab'   => false,
		),
	),

	// for democontent tab 
	'demo_import'     => array(),
	// Getting started tab
	'getting_started'     => array(
		'first'  => array(
			'title'               => esc_html__( 'Required actions', 'auto-car' ),
			'text'                => esc_html__( 'We have compiled a list of steps for you to take so we can ensure that the experience you have using one of our products is very easy to follow.', 'auto-car' ),
			'button_label'        => esc_html__( 'Required actions', 'auto-car' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=auto-car-welcome&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => true,
			'is_new_tab'          => false,
		),
		'second' => array(
			'title'               => esc_html__( 'Read full documentation', 'auto-car' ),
			'text'                => esc_html__( 'Need more details? Please check our full documentation for detailed information on how to use auto-car.', 'auto-car' ),
			'button_label'        => esc_html__( 'Documentation', 'auto-car' ),
			'button_link'         => esc_url('https://docs.codethemes.co/docs/auto-car-lite/'),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		'third'  => array(
			'title'               => esc_html__( 'Go to the Customizer', 'auto-car' ),
			'text'                => esc_html__( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'auto-car' ),
			'button_label'        => esc_html__( 'Go to the Customizer', 'auto-car' ),
			'button_link'         => esc_url( admin_url( 'customize.php' ) ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
	),
	// Free vs PRO array.
	
	// Plugins array.
	// Required actions array.
	'recommended_actions' => array(
		'install_label'    => esc_html__( 'Install and Activate', 'auto-car' ),
		'activate_label'   => esc_html__( 'Activate', 'auto-car' ),
		'deactivate_label' => esc_html__( 'Deactivate', 'auto-car' ),
		'content'          => array(

            'one-click-demo-import'           => array(
                'title'       => 'One Click Demo Import',
                'description' => auto_car_get_wporg_plugin_description( 'one-click-demo-import' ),
                'check'       => ( defined( 'OCDM_VERSION' ) || ! auto_car_check_passed_time( '259200' ) ),
                'plugin_slug' => 'one-click-demo-import',
                'id'          => 'one-click-demo-import',
                'network'     => 'live',
            ),


			'elementor'           => array(
				'title'       => 'Elementor',
				'description' => auto_car_get_wporg_plugin_description( 'elementor' ),
				'check'       => ( defined( 'ELEMENTOR_LITE_VERSION' ) || ! auto_car_check_passed_time( '259200' ) ),
				'plugin_slug' => 'elementor',
				'id'          => 'elementor',
                'network'     => 'live',
            ),
            
               'contact-form-7'           => array(
                'title'       => 'Contact Form 7',
                'description' => auto_car_get_wporg_plugin_description( 'contact-form-7' ),
                'check'       => ( defined( 'CONTACT_VERSION' ) || ! auto_car_check_passed_time( '259200' ) ),
                'plugin_slug' => 'contact-form-7',
                'id'          => 'contact-form-7',
                'network'     => 'live',
            ),
            
		),
	),
);
auto_car_About_Page::init( apply_filters( 'auto_car_about_page_array', $config ) );

/*
 * Notifications in customize
 */
require get_template_directory() . '/information/class-auto-car-customizer-notify.php';

$config_customizer = array(
	'recommended_plugins'       => array(
		'auto-car-companion' => array(
			'recommended' => true,
			/* translators: s - Orbit Fox Companion */
			'description' => sprintf( esc_html__( 'If you want to take full advantage of the options this theme has to offer, please install and activate %s.', 'auto-car' ), sprintf( '<strong>%s</strong>', 'Orbit Fox Companion' ) ),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'auto-car' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugins', 'auto-car' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'auto-car' ),
	'activate_button_label'     => esc_html__( 'Activate', 'auto-car' ),
	'deactivate_button_label'   => esc_html__( 'Deactivate', 'auto-car' ),
);
auto_car_Customizer_Notify::init( apply_filters( 'auto_car_Customizer_Notify_array', $config_customizer ) );