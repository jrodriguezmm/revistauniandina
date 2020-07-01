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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define( 'FORCE_SSL' , true);
$_SERVER['HTTPS'] = 'on';
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_revistauniandina' );

/** MySQL database username */
define( 'DB_USER', 'us_db_revistauniandina' );

/** MySQL database password */
define( 'DB_PASSWORD', '7hukgi765g$' );

/** MySQL hostname */
define( 'DB_HOST', 'All-databases' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4`85Dc&FvtB?@C`OFW(?| <nb3jUU;cj`&N:{)JSVO*Y/)/<X:`R6u8|~g/<.PIU' );
define( 'SECURE_AUTH_KEY',  'QTaP9kiLS>]1R2Dy{ZIT50Qr&K9MTU~?F839Ip39lrP*z~kOaKw4@DAPr(}NTeeR' );
define( 'LOGGED_IN_KEY',    '*$n1lE*DbjOZpbXuCN|guU%U{Y.N`bVZg}Q**r=x$jy/.QD.CkAd[/=gt1q?GT*9' );
define( 'NONCE_KEY',        't;$[NL{Oa2 ?Kbp~8#kh)?d}@lKX+2k*Nz]vI<j@RiU**#@{(w#>0;O:1=s<$3*`' );
define( 'AUTH_SALT',        'fQ#*Nw#DS`2l4gt8Vne:2~#8(*I]LQ/S0l<dZkqZ7w#TJ,? oAVaTYGMpyA5YWD{' );
define( 'SECURE_AUTH_SALT', 'JT|w&Rn)soKS$o<JB<&5[WFde^049Tk<n+}&pQhHd3zeR/`()Ut?NG6R_QD;=,Dc' );
define( 'LOGGED_IN_SALT',   'e[c/:tNN8f:6Hjai_1[M< {mX6=E5xHZpdFgSgEz56?+pSKA,,P^D< Pgr5pa2Vn' );
define( 'NONCE_SALT',       'k&c:r+[XbSpKaF*z0!m%xj*Fkx247@?#B,12g}aZjeJgvi]/rkIJ;vVOiJ)o]F8d' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'revuni_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
