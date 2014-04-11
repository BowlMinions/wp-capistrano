<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ( file_exists( dirname( __FILE__ ) . '/config-staging.php' ) ) {
    require( 'config-staging.php' );
}
else if ( file_exists( dirname( __FILE__ ) . '/config-production.php' ) ) {
    require( 'config-production.php' );
}
else {
    require( 'config-development.php' );
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2^&GO.@v(b_uyITTR:yAEM1Ys|-5RP|php+v~)QZ,G8[<HWvW|R-!cd~H;ZKa-Xm');
define('SECURE_AUTH_KEY',  '$~6zUtoC?#x}J1C!L|WPRezZf$.2o2#6~2MuNR %[yX[8-+ZU*<?D3q [((4Z3.?');
define('LOGGED_IN_KEY',    '%]ogV;,L^Gp6_-)@tSo/k/h{0h{4ifrWOQ~keePl1Srf`/l1yl;THxCy#>Yx>7?M');
define('NONCE_KEY',        '4`0*8nG2%X&tjl|.^Z2H,IW_vTwweMi(Uwx|kYV):Qs9t+XPiKjyli53MAh*etm1');
define('AUTH_SALT',        'wf= q.1$U{&{{dxo-Y6q![uv6+X2;|wGC of@||4,K)M&gp-t@6WpD[(uJDEhc?w');
define('SECURE_AUTH_SALT', '/y)w{qGS6sopt,Bq.mA:LLo&LxuRo-i2: |=2o{ZdH*4.wzpkz{9?hD$7rD6A?,E');
define('LOGGED_IN_SALT',   'J8j,l85wG+S32iztfa^.2&|^43NN99Qo7xa0t/Z(h_V1cI-^u ?r JOPf|3crQLa');
define('NONCE_SALT',       '|oIL?e#+hN8Q^Qdy)J3xQ}EW|zXRmbsyZwh|Ys&$ueJBgFNzjdAY_v$oD++goCE4');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

define('CONTENT_DIR', '/app');
define('WP_CONTENT_DIR', dirname(__FILE__) . CONTENT_DIR);
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . CONTENT_DIR);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
