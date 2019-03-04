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
define( 'DB_NAME', 'naseej' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'bm$1.h9TjR.hLJAkaA UVwhx$m4^_-xWXR%)OuJ4;$,fDe%~~..K6)J8@ilRYNdD' );
define( 'SECURE_AUTH_KEY',  'oarEZ|fI^|g~_=Cr}8:]x<YYN)+&XF.nW3|o?Jq:m-CF!;D-F,Ny--Kw_,G8fPr|' );
define( 'LOGGED_IN_KEY',    'wAx?&4)6.CWAuGJWrzc_1K,|em%rg2Kc}6;a+{T@2rJLvb33tiJ9TyA2pl,RwNd4' );
define( 'NONCE_KEY',        '74SU)jz<_Vwj5h~UDuE^ k_Tl&6-/&>{ >g]4%tICd<JM|#y,i~)<j+ 8 *6Je>s' );
define( 'AUTH_SALT',        'nm]F;MqFFf#-<B$GB|{KoL8_jk#o`?bcq{i$(c&a?=6%5n*C6XHWb`{x7g@%3*S>' );
define( 'SECURE_AUTH_SALT', 'lX1^?d8pjS{.[IFfxed.G*yq/gWZDETSC@#xc?5F!7I9`xDZ]F!$ jymU?(@J^x0' );
define( 'LOGGED_IN_SALT',   '0V<,)}N=NlgsS4=* 50@UDcVD#PJatt5F<*EHp]z-%@,VkC]LV<:P?y[C_D`!QA$' );
define( 'NONCE_SALT',       'MdRvDr|]4+`bhNnk^G>Yx?/[4E9J@?@?nh&Ia!<YqIHtr+[*,U*5l2_a/GN9r*cK' );

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
