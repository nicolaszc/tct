<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ').>q*[g@MHo7f;ZW_dJicK3JBQ!Oix-RYXXLoqSv9Hh7f]G76gaoL>FplbUsd]e[' );
define( 'SECURE_AUTH_KEY',   'RcIUGET|n:JE>vJH#2^){eu1.52IIAN5k[<89q XgXp7}uqT|;-`}so1..x&Uk?:' );
define( 'LOGGED_IN_KEY',     'gjm*f+2.^.N)Xj,?4;nI,-@6a$usftRVx[y5cbm?} 5 M5nW}CDDv,?sZ~T;xHRZ' );
define( 'NONCE_KEY',         '9X&8{i[F(V5.`yR@~Kk}@A:svp?w%M3m~-K%+#H gv5=_(HXI47H!`/cU`0{.-Cv' );
define( 'AUTH_SALT',         'B@Cv!bxhao&F9sM}F4bNb@!qK6gtbR4PEm`n[E):{>c+r]z35E)V<SsjcUVogE*9' );
define( 'SECURE_AUTH_SALT',  '~QYsnN[38K1(-q&P2rw)K@}/6&h.wOl@&i}E65~nIZyQVfq;S]Idl5sN~?y`!tPp' );
define( 'LOGGED_IN_SALT',    '6c0J=Nx%3Ts}s!uva=^&*buA/jVqK/sB% 6#k.~oSj:Z$fE8&$;^ <>|J4%V@5/+' );
define( 'NONCE_SALT',        'Zo!jN]oR_2ybF{e^eC$:ZLy,GUm(KiHjwS-T(+Wb/0Hq@l9mK@34iu6|PB1IB*&K' );
define( 'WP_CACHE_KEY_SALT', 'TK-CK-]SV**Jq?-z Z,1HIl(4/rxAm#{35.LQmX@CwT_gQ]=o8<>D!,,IfG62dvl' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
