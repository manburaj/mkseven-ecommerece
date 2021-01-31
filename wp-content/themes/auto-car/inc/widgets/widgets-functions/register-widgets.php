<?php
/**
 *
 * @package auto-car
 * @since auto car 1.0
 */
/**************** auto car REGISTER WIDGETS ***************************************/
if (! function_exists('auto_car_widgets_initi')) {
	add_action('widgets_init', 'auto_car_widgets_initi');
	function auto_car_widgets_initi() {

		register_sidebar(array(
				'name' => __('Right Sidebar', 'auto-car'),
				'id' => 'auto_car_main_sidebar',
				'description' => __('Shows widgets at Main Sidebar.', 'auto-car'),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h2 class="widget-title">',
				'after_title' => '</h2>',
			)); 

		
	}
}
 if (!in_array('layout-pro/layout-pro.php', apply_filters('active_plugins', get_option('active_plugins')))) { 
if (! function_exists('auto_car_widgets_footer_initi')) {
	add_action('widgets_init', 'auto_car_widgets_footer_initi');
	function auto_car_widgets_footer_initi() {
		register_sidebar( array(
            'name'          => __( 'Footer 1','auto-car' ),
            'id'            => 'footer-1',
            'description'   => __( 'Footer 1','auto-car' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
            ) );

        register_sidebar( array(
            'name'          => __( 'Footer 2','auto-car' ),
            'id'            => 'footer-2',
            'description'   => __( 'Footer 2','auto-car' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
            ) );

        register_sidebar( array(
            'name'          => __( 'Footer 3','auto-car' ),
            'id'            => 'footer-3',
            'description'   => __( 'Footer 3','auto-car' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
            ) );

	}
}
}