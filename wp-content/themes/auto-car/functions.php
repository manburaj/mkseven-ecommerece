<?php
/**
 * Display all auto car functions and definitions
 *
 * @package auto-car
 * @since auto car 1.0
 */

/************************************************************************************************/
if (!function_exists('auto_car_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function auto_car_setup()
    {
        /**
         * Set the content width based on the theme's design and stylesheet.
         */
        $GLOBALS['content_width'] = apply_filters( 'auto_car_setup', 790 );

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on auto car, use a find and replace
         * to change 'auto-car' to the name of your theme in all the template files
         */
        load_theme_textdomain('auto-car', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'primary' => __('Main Menu', 'auto-car'),
        ));

        /*
        * Enable support for custom logo.
        *
        */
        add_theme_support('custom-logo', array(
            'flex-width' => true,
            'flex-height' => true,
        ));
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
        //Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support('customize-selective-refresh-widgets');

        /*
         * Switch default core markup for comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        /**
         * Add support for the Aside Post Formats
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('auto_car_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        add_editor_style(get_template_directory() . '/assets/css/editor-style.css');

        /**
         * Making the theme WooCommerce compatible
         */
        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif; // auto_car_setup
add_action('after_setup_theme', 'auto_car_setup');

add_image_size('auto-car-blog-image', 700, 480, true);
add_image_size('auto-car-callout-image', 800, 600, true);

/***************************************************************************************/
function auto_car_content_width()
{
    if (is_page_template('page-templates/gallery-template.php') || is_attachment()) {
       $GLOBALS['content_width'] = apply_filters( 'auto_car_content_width', 1170 );
    }
}

add_action('template_redirect', 'auto_car_content_width');

/***************************************************************************************/
if (!function_exists('auto_car_get_theme_options')):
    function auto_car_get_theme_options()
    {
        return wp_parse_args(get_option('auto_car_theme_options', array()), auto_car_get_option_defaults_values());
    }
endif;

/***************************************************************************************/
require get_template_directory() . '/inc/customizer/auto-car-default-values.php';
require(get_template_directory() . '/inc/settings/auto-car-functions.php');
require(get_template_directory() . '/inc/settings/auto-car-nav-walker.php');
require(get_template_directory() . '/inc/settings/auto-car-common-functions.php');
require(get_template_directory() . '/inc/settings/auto-car-tgmp.php');
require(get_template_directory() . '/inc/template-tags.php');
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/footer-details.php';
require get_template_directory() . '/information/feature-about-page.php';
require get_template_directory() . '/information/auto-car-notifications-utils.php' ;


//TGMPA plugin
require get_template_directory() . '/plugin-activation.php';

/************************ auto car Widgets  *****************************/
require get_template_directory() . '/inc/widgets/widgets-functions/register-widgets.php';

/************************ auto car Customizer  *****************************/
require get_template_directory() . '/inc/customizer/functions/sanitize-functions.php';
require get_template_directory() . '/inc/customizer/functions/register-panel.php';

function auto_car_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '#site-title a',
            'container_inclusive' => false,
            'render_callback' => 'auto_car_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '#site-description',
            'container_inclusive' => false,
            'render_callback' => 'auto_car_customize_partial_blogdescription',
        ));
    }
    require get_template_directory() . '/inc/customizer/functions/customizer-control.php';
    require get_template_directory() . '/inc/customizer/functions/design-options.php';
    require get_template_directory() . '/inc/customizer/functions/theme-options.php';
    require get_template_directory() . '/inc/customizer/functions/featured-content-customizer.php';

}

require get_template_directory() . '/inc/customizer/functions/class-pro-discount.php';

/**
 * Render the site title for the selective refresh partial.
 * @see auto_car_customize_register()
 * @return void
 */
function auto_car_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 * @see auto_car_customize_register()
 * @return void
 */
function auto_car_customize_partial_blogdescription()
{
    bloginfo('description');
}

add_action('customize_register', 'auto_car_customize_register');
/**
 * Enqueue script for custom customize control.
 */
function auto_car_custom_customize_enqueue()
{
    wp_enqueue_style('auto-car-customizer-style', trailingslashit(get_template_directory_uri()) . 'inc/customizer/css/customizer-control.css');
}

add_action('customize_controls_enqueue_scripts', 'auto_car_custom_customize_enqueue');


/******************* auto car Header Display *************************/
if (!function_exists('auto_car_the_custom_logo')) {
    function auto_car_header_display()
    {
        ?>
        <div id="site-branding">
            <?php if (has_custom_logo()) {

                the_custom_logo();

                echo '<p id="site-description">';
                bloginfo('description');
                echo '</p>';

            } else { ?>
                <h1 id="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                       rel="home"> <?php bloginfo('name'); ?> </a>

                </h1>  <!-- end .site-title -->
                <p id="site-description"> <?php bloginfo('description'); ?> </p> <!-- end #site-description -->
            <?php } ?>
        </div> <!-- end #site-branding -->
        <?php
    }

    add_action('auto_car_site_branding', 'auto_car_header_display');
}


if (!function_exists('auto_car_the_custom_logo')) :
    /**
     * Displays the optional custom logo.
     * Does nothing if the custom logo is not available.
     */
    function auto_car_the_custom_logo()
    {
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
    }
endif;

/* Header Image */
if (!function_exists('auto_car_woocommerce_header_add_to_cart_fragment')) {

    function auto_car_header_image_display()
    {
        $auto_car_header_image = get_header_image();
        $auto_car_settings = auto_car_get_theme_options();
        if (!empty($auto_car_header_image)) {
            ?>
            <a href="<?php echo esc_url(home_url('/')); ?>"><img
                        src="<?php echo esc_url($auto_car_header_image); ?>" class="header-image"
                        width="<?php echo esc_attr(get_custom_header()->width); ?>"
                        height="<?php echo esc_attr(get_custom_header()->height); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>
            <?php
        }
    }
    add_action('auto_car_header_image', 'auto_car_header_image_display');
}


// for information landing page
define( 'auto_car_VERSION', '1.0.0' );

    function auto_car_get_wporg_plugin_description( $slug ) {

        $plugin_transient_name = 'auto_car_t_' . $slug;

        $transient = get_transient( $plugin_transient_name );

        if ( ! empty( $transient ) ) {

            return $transient;

        } else {

            $plugin_description = '';

            if ( ! function_exists( 'plugins_api' ) ) {
                require_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
            }

            $call_api = plugins_api(
                'plugin_information', array(
                    'slug'   => $slug,
                    'fields' => array(
                        'short_description' => true,
                    ),
                )
            );

            if ( ! empty( $call_api ) ) {
                if ( ! empty( $call_api->short_description ) ) {
                    $plugin_description = strtok( $call_api->short_description, '.' );
                }
            }

            set_transient( $plugin_transient_name, $plugin_description, 10 * DAY_IN_SECONDS );

            return $plugin_description;

        }
    }

    function auto_car_check_passed_time( $no_seconds ) {
        $activation_time = get_option( 'auto_car_time_activated' );
        if ( ! empty( $activation_time ) ) {
            $current_time    = time();
            $time_difference = (int) $no_seconds;
            if ( $current_time >= $activation_time + $time_difference ) {
                return true;
            } else {
                return false;
            }
        }

        return true;
    }


if (!function_exists('auto_car_is_url')):
    function auto_car_is_url($uri)
    {
        if (preg_match('/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}' . '((:[0-9]{1,5})?\\/.*)?$/i', $uri)) {
            return $uri;
        } else {
            return false;
        }
    }
endif;

/**
for skipping
*/
function auto_car_skip_link_focus_fix() {
    ?>
    <script>
    /(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
    </script>
    <?php
}
add_action( 'wp_print_footer_scripts', 'auto_car_skip_link_focus_fix' );

if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}