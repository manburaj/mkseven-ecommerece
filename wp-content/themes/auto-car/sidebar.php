<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auto-car
 */

if ( ! is_active_sidebar( 'auto_car_main_sidebar' ) ) {
    return;
}
?>

<aside class="widget-area">
    <?php dynamic_sidebar( 'auto_car_main_sidebar' ); ?>
</aside><!-- #secondary -->
