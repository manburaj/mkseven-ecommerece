<?php
$auto_car_settings = auto_car_get_theme_options();
/******************** auto car THEME OPTIONS ******************************************/
//Support section
    $wp_customize->register_section_type( Pro::class );

     $wp_customize->add_section(new Pro($wp_customize,'support_links',array(
            'priority' => 1,
            'title'       => __( 'Auto Car Pro', 'auto-car' ),
            'button_text' => __( 'Go Pro',        'auto-car' ),
            'button_url'  => 'https://codethemes.co/product/auto-car/'
            
            )
        )
    );

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    /*        Product Cat   */
    $product_categories = get_terms('product_cat');
    if (is_wp_error($product_categories))
        $product_categories = array();
    $count = count($product_categories);
    if ($count > 0 && !is_wp_error($product_categories)) {
        $select_categories = array();
        $select_categories[''] = __('Select', 'auto-car');
        foreach ($product_categories as $product_category) {
            $select_categories[$product_category->term_id] = $product_category->name;
        }
    } else {
        $select_categories = array('' => __('Select', 'auto-car'));
    }

    $wp_customize->add_section('auto_car_product_categories', array(
        'title' => __('Product Categories', 'auto-car'),
        'priority' => 11,
        'panel' => 'layout_pro_options_panel'
    ));

}


	$wp_customize->add_section('auto_car_custom_header', array(
		'title' => __('General Options', 'auto-car'),
		'priority' => 1,
		'panel' => 'layout_pro_options_panel'
	));
	$wp_customize->add_setting( 'auto_car_theme_options[auto_car_reset_all]', array(
		'default' => 0,
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'auto_car_reset_alls',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control( 'auto_car_theme_options[auto_car_reset_all]', array(
		'priority'=>50,
		'label' => __('Reset all default settings. (Refresh it to view the effect)', 'auto-car'),
		'section' => 'auto_car_custom_header',
		'type' => 'checkbox',
	));

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    $wp_customize->add_section('auto_car_feature_section', array(
        'title' => __('Featured Section', 'auto-car'),
        'priority' => 6,
        'panel' => 'layout_pro_options_panel'
    ));
}
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    $wp_customize->add_section('auto_car_recent_section', array(
        'title' => __('Recent Section', 'auto-car'),
        'priority' => 4,
        'panel' => 'layout_pro_options_panel'
    ));
}

    $wp_customize->add_section('auto_car_cta_section', array(
        'title' => __('CTA Section', 'auto-car'),
        'priority' => 5,
        'panel' => 'layout_pro_options_panel'
    ));
    $wp_customize->add_setting('auto_car_theme_options[cta_title]', array(
        'capability' => 'edit_theme_options',
        'default' => $auto_car_settings['cta_title'],
        'sanitize_callback' => 'esc_html',
        'type' => 'option',
    ));
    $wp_customize->add_control('auto_car_theme_options[cta_title]', array(
        'label' => __('Section Title', 'auto-car'),
        'priority' => 1,
        'section' => 'auto_car_cta_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('auto_car_theme_options[cta_description]', array(
        'capability' => 'edit_theme_options',
        'default' => $auto_car_settings['cta_description'],
        'sanitize_callback' => 'esc_html',
        'type' => 'option',
    ));
    $wp_customize->add_control('auto_car_theme_options[cta_description]', array(
        'label' => __('Section Description', 'auto-car'),
        'priority' => 1,
        'section' => 'auto_car_cta_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('auto_car_theme_options[cta_button]', array(
        'capability' => 'edit_theme_options',
        'default' => $auto_car_settings['cta_button'],
        'sanitize_callback' => 'esc_html',
        'type' => 'option',
    ));
    $wp_customize->add_control('auto_car_theme_options[cta_button]', array(
        'label' => __('Button Title', 'auto-car'),
        'priority' => 1,
        'section' => 'auto_car_cta_section',
        'type' => 'text',
    ));
    $wp_customize->add_setting('auto_car_theme_options[cta_link]', array(
        'capability' => 'edit_theme_options',
        'default' => $auto_car_settings['cta_button'],
        'sanitize_callback' => 'esc_url_raw',
        'type' => 'option',
    ));
    $wp_customize->add_control('auto_car_theme_options[cta_link]', array(
        'label' => __('Button Link', 'auto-car'),
        'priority' => 1,
        'section' => 'auto_car_cta_section',
        'type' => 'text',
    ));



	/*Blog Section*/

    $wp_customize->add_section('auto_car_blogoption', array(
            'title' => __('Blog Options', 'auto-car'),
            'priority' => 7,
            'panel' => 'layout_pro_options_panel'
        ));

        $wp_customize->add_setting('auto_car_theme_options[blog_description]',
        array(
            'type' => 'option',
            'sanitize_callback' => 'auto_car_sanitize_page',
            'default' => $auto_car_settings['blog_description'],
        )
    );
    $wp_customize->add_control('auto_car_theme_options[blog_description]',
        array(
            'type' => 'dropdown-pages',
            'section' => 'auto_car_blogoption',
            'label' => esc_html__('Select Page For Blog Title & Description', 'auto-car'),
            'settings' => 'auto_car_theme_options[blog_description]'
        )
    );


