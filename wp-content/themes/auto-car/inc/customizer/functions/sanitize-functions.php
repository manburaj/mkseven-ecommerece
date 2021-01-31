<?php
/**
 * Theme Customizer Functions
 *
 * @package auto-car
 * @since auto car 1.0
 */
/********************* auto car CUSTOMIZER SANITIZE FUNCTIONS *******************************/

function auto_car_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );

	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function auto_car_sanitize_page( $input ) {
	if(  get_post( $input ) ){
		return $input;
	}
	else {
		return '';
	}
}

function auto_car_reset_alls( $input ) {
	 if ( $input == 1 ) {
        delete_option( 'auto_car_theme_options');
        $input=0;
        return $input;
    }
    else {
        return '';
    }
}

if(!function_exists('auto_car_sanitize_checkbox')):
    function auto_car_sanitize_checkbox( $input ) {
         return ( ( isset( $input ) && true == $input ) ? true : false );
    }
endif;

if( !function_exists( 'auto_car_text_sanitize' ) ) :
    function auto_car_text_sanitize( $value ) {
        if(is_array($value)){
            return array_map('strip_tags', $value);

        } else{
            return wp_strip_all_tags( $value );
        }

    }
endif;