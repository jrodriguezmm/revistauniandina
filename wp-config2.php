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
define( 'AUTH_KEY',         'O:GlDCe?e4M&fb*OdQy2FIH_SCe &C6i(s9EdSF+I0IC~qz4E23jqo1`*lcyajC!' );
define( 'SECURE_AUTH_KEY',  'd0062.bE}m;O_I|kg5ph2XmLp~@6$HJv=S{C|QuwpS)HYaJ}Zppt3,B3]udKk%2;' );
define( 'LOGGED_IN_KEY',    '%swb+1obh*>x%Bxe-AoYtPQS%)k5&/24y[Tp!=>_/t<H?*4&gKmc#qu<C&=orC{C' );
define( 'NONCE_KEY',        '=>!<ZAB~C 3yDR_vaQJN3C(mODuoA]X|(>[vf].fKq]>xGY(}hKlg)^x*jRvlc!z' );
define( 'AUTH_SALT',        'u[>>>t-3%G-I`7GpIbUxXF!J]HYfs2Iqu9WxcI]<*6C_igh&v^hW@7NWi+HCe_`[' );
define( 'SECURE_AUTH_SALT', 'CTi b+J0:Gfn-$l>i<6OH%n+|G$gEGA@JF!Ug96hGk1<a}yB@-ofwTj2j8f6%b0y' );
define( 'LOGGED_IN_SALT',   'rgonF$1y9E#s;SNIL@.wD@aPoi^!(H}I#@kO9HSOkukp0H/aJH#^`;bkl5D*0ub}' );
define( 'NONCE_SALT',       'b8w>dDmMa)6~qHWvm:+B^qkMLHjXH`j(Y{z@nn=[S]wBueLPDejxbF>VPKp59XqO' );

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
