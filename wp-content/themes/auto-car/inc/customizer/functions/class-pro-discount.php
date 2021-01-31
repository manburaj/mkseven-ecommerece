<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class auto_car_Discount_Customize {

	/**
	 * Returns the instance.
	 *
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		
	}

	/**
	 * Sets up the customizer sections.
	 *
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require get_template_directory(). '/inc/customizer/functions/section-pro-discount.php';

		// Register custom section types.
		$manager->register_section_type( 'auto_car_Discount_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new auto_car_Discount_Customize_Section_Pro(
				$manager,
				'auto_car_lite_to_pro_discount',
				array(

					'pro_text' => wp_kses_post( "Upgrade To Premium", 'auto-car' ),
					'pro_url'  => esc_url('http://codethemes.co/product/auto-car-pro/'),
					'priority' => 1,
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */

}

// Doing this customizer thang!
auto_car_Discount_Customize::get_instance();
