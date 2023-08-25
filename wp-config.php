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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'desa_cigugurgirang' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ':zV=+G%H~ppx1z|@meH$4tkzN%h4Gx {khr1]?~,,8:TMqGl P08X>h=I4g|3Vd(' );
define( 'SECURE_AUTH_KEY',  'Q?eyY~|^uabqO N{g,|=`lHQ>>yv+^q(R=Bnf!jNN-ASX|{2bbRV_Kxvr:0YoLu!' );
define( 'LOGGED_IN_KEY',    '<^|g}+m4ks~]~d*x+gb2l=`3Pd1M@ErfR{}({(V/q;pl Sss)ooi v/wRc#m_mw1' );
define( 'NONCE_KEY',        ']d5zz^y[eJH?9:{k&7_KO`,.B*cxtWKkt0>DSh48iLnkPF_wGQi4IEUW_8fgp=|S' );
define( 'AUTH_SALT',        'a5W^l,Yfp% HmW(Ws^IwPJnCgVR-Xn.9hQTFJ >Ts2P0O#8<TYU+sa-#lQ3#l+uc' );
define( 'SECURE_AUTH_SALT', 'G!%&e~zDKHW3ZECKw0A7cW@r`8ULF6y~JMG/4eAdz6Gu+W^)@#(7|`q2s-`*@.An' );
define( 'LOGGED_IN_SALT',   '`n)gViseI#6r|]vCK|pjtvzc0{Ee3}~68|m7fN=1y-DS7P,x&~HP@H:oMu.Dpz~t' );
define( 'NONCE_SALT',       'NKIBIwx|I:-2#]HtP_M)B:c&D~P,sIN[i8w6m6F:NguwG6@seM)Jusrn[^Z#,v&g' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
