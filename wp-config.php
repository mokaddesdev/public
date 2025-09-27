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
define( 'AUTH_KEY',          '~Dy6TJZyVg,qsg(mmW=NUQ[OJh1=VHP#xO?*FPS_BaUuxgxxXSh:>2kjUBK9{Y^E' );
define( 'SECURE_AUTH_KEY',   '%>.-!HkJQwu[Q5$k?mZH5(v@2Tj$1 $` D1ok&$Ph*_9M?~*c-XU#<05 nNiOFoy' );
define( 'LOGGED_IN_KEY',     '- *GCFz^P3Fbh]IyN%j*VHwO|PVs=>mJPyXh2L;##ielqqS[LW!@?fTubI[]|,0M' );
define( 'NONCE_KEY',         'Pika;[u7-.>ZZ3@K3N%m^b7go=gK$h~#H5+,5nC?ui6EE:<ZO0YF:)?VX{0<=r/t' );
define( 'AUTH_SALT',         'VYSH_7[Tjs~SJuLHR.!vV,V?<x]&&qWUA^gPdxeolJM$kwfaNW_zX^59hqM{Tos7' );
define( 'SECURE_AUTH_SALT',  't%*F`,ER[#NKbR(ELAf2.=Yx!nND#oEq/TM~)6*L(i@/oc&~!###kO^akxh=lgc/' );
define( 'LOGGED_IN_SALT',    'IN?Rn62Wm1,dSfp/#7)g8bFb0;d6+yT<~zi ^u2ROBmc$cz-}v5F:Rqvquff.l7r' );
define( 'NONCE_SALT',        '_3C{^8EWZtzA o`$GpfQ4JGv%Bt@t:XaT[imn44*jrRkDURk 5|h*(d4//(zvwON' );
define( 'WP_CACHE_KEY_SALT', 'uy;Qkr;CCG@SXF~Iw~<$ds:(~4{3pyw^&NoC1`e}Z0x7LxZ7MWc1r4mjyNP@YI$0' );


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
