<?php
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
define( 'DB_NAME', 'epiz_24169571_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'epiz_24169571' );

/** MySQL database password */
define( 'DB_PASSWORD', 'OtNA8abRkmPv' );

/** MySQL hostname */
define( 'DB_HOST', 'sql301.epizy.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h-*0crOs-pTqd07&+q7B0_rVkb4+-gne)_{^3otIqN!-!%he+[r[36Vl}UGnD ax');
define('SECURE_AUTH_KEY',  '):MG,B<Lt5#d,a%+/Ih=*7 i^[y8oZ!ZM;]dJJB6Ouz6mF]#A<+/L@rUpVTuAe=V');
define('LOGGED_IN_KEY',    'BZt@E{}3g+:{t$E@I_W9G0-Txw5`MgD%yO|I^(z]O#p]eH=_6-s?ia|g5A$QGu?_');
define('NONCE_KEY',        'm9TP/W@JVdGW|Wi}aVXev@T;u&(MMON8_`g{.<-8YRw[|<{_GF59ihq<{$HiRe!=');
define('AUTH_SALT',        'Ho@ <~Z6RXpiRsxP+e16I/`7T~!|AN32%/P2 %y`F9/Bo+d?oPf=zHpY-E5Cdj`@');
define('SECURE_AUTH_SALT', '&MB(YC7S%^AO-;ln,dQ>{; %`%KY;e@=EZePP:P*T$b8MYmU|+oID|J9_ DSrSNI');
define('LOGGED_IN_SALT',   '{|Ii!^ybtK+zxVC^hx/bmaX6,AbO5#I9KN<Y${$qs!+Esb1&p0y4Jbx!B}8MIU~#');
define('NONCE_SALT',       '!|5h.|*a$B_2&al^hi~8IXBW|^aapPr7-n)t: MxG+aDxPs.Z+3Dmtq0q=CLE8mv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
