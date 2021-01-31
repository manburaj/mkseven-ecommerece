<?php
/**
 * Displays the searchform
 *
 * @package auto-car
 * @since auto car 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<?php
		$auto_car_settings = auto_car_get_theme_options();
		$auto_car_search_form = $auto_car_settings['auto_car_search_text'];
		if($auto_car_search_form !='Search &hellip;'): ?>
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'auto-car' ); ?></span>
	</label>
	<label>	
	<input type="search" name="s" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr($auto_car_search_form); ?>" autocomplete="off" value="<?php echo get_search_query(); ?>"></label>
	<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
	<?php else: ?>
	<label>
	<input type="search" name="s" class="search-field" placeholder="<?php esc_attr_e( 'Search &hellip;', 'auto-car' ); ?>" autocomplete="off"></label>
	<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
	<?php endif; ?>
</form> <!-- end .search-form -->