<?php
if(!function_exists('auto_car_get_option_defaults_values')):
	/******************** auto car DEFAULT OPTION VALUES ******************************************/
	function auto_car_get_option_defaults_values() {
		global $auto_car_default_values;
		$auto_car_default_values = array(
			'auto_car_total_features'			=> '3',
			'auto_car_disable_features'		=> 0,
			'auto_car_sidebar_display'		=> 0,
			'auto_car_design_layout' 			=> 'wide-layout',
			'auto_car_sidebar_layout_options' => 'right',
			'auto_car_header_display'			=> 'header_text',
			'auto_car_categories'				=> array(),
			'auto_car_reset_all' 				=> 0,
			'auto_car_search_text' 			=> __('Search &hellip;', 'auto-car'),
			'auto_car_blog_content_layout'	=> '',
			'auto_car_sidebar_status'	=> 'show-sidebar',

			/* Slider Settings */
			'auto_car_slider_no' 				=> '3',
			'auto_car_featured_page_slider_1' 				=> '',
			'auto_car_featured_page_slider_2' 				=> '',
			'auto_car_featured_page_slider_3' 				=> '',
			
			/* Front page feature */
			'auto_car_entry_format_blog' 		=> 'show',
			'auto_car_entry_meta_blog' 		=> 'show-meta',		
			
			'auto_car_featured_block_title' 	=> '',

			/*CTA Options*/
			'cta_title'                                   => '',
			'cta_description'                              => '',
			'cta_button'                              => '',
			'cta_link'                              => '',
			'cta_Backgroundimage'                   => '',
			
			/* Blog Options*/
			'blog_description'                        => '',

			/* Call Out Options*/
			'auto_car_callout_section_pages_title'      => '',
			'auto_car_callout_section_pages_description' => '',
			'auto_car_callout_section_pages_selection'  => '',
			
			/*About Us Options*/
			'auto_car_aboutus_page'                    => '',	
			);
		return apply_filters( 'auto_car_get_option_defaults_values', $auto_car_default_values );
	}
endif;
?>