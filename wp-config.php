<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u705062868_tW7es' );

/** MySQL database username */
define( 'DB_USER', 'u705062868_MNCi1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'OLTazxs7vq' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '*e|EEJ2wN=eYb~n-c<Cpd:T_B%J(y($LRI0O Z3x805(h4&sMuWJpcaQZjj2|dXQ' );
define( 'SECURE_AUTH_KEY',   'dz(RGa_NCMi5X[Xg_cleRZ4O+_K`0a^*D0~$F-S%4D9QOtx+L[S%mJ0&%zbyp<b~' );
define( 'LOGGED_IN_KEY',     ' W6<PCkR6hi]TbZ~$=+h9fjQ*yzM~LmtB8iGO^U3h$VqR I^,*__p {1u.axUIg@' );
define( 'NONCE_KEY',         'p%kro=ceevpE0Etw_bMX_8eIIRu^2;W/p^i}O}Rr1*)Hs%DVjFcS+~23)VnaU!H4' );
define( 'AUTH_SALT',         'O,u:(CMN]lIF|~IGbJ_i9jAb%T.mLyLYlwVQ2[(njnqj[3/(_el[Khy-/PXYJ6CY' );
define( 'SECURE_AUTH_SALT',  'RyL+3-bCxfW;;!-^:fFQ>9366k$#<(;uU[hjVm,6hQ}8Aj40!XB2z(ftK09vDw!|' );
define( 'LOGGED_IN_SALT',    'T`<^6t3T^dIN*Kxav@au4ru<]]g3ve>bk~%k:U</6p!%uVxP8X=hq_/Q{V$ifj<*' );
define( 'NONCE_SALT',        '2Kn5jez*pq0_{#;:Ctfxyio*d|3^5v6-|PEDw`IPlNm~ZDvo,~eFRcU5_y:,-@qm' );
define( 'WP_CACHE_KEY_SALT', '$e*s^Gt~WvHrC[f`9-q+`A%)OGDC$H)6Kvf%q{uv-*k l#VYZ @UD/~g#jiLUh(,' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
