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
define( 'DB_NAME', 'blog_fire' );

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
define( 'AUTH_KEY',         'YquD~J{E:ply,tHR5/sLBTLqERw.Hg>61dM-[Q~M7.|6{^1`HPHGbl-jdi5KK#pn' );
define( 'SECURE_AUTH_KEY',  'K+se vo|gEs=K=Rtn~-{wn$4+@>U_Ot+nfOkb^{wmLC3W?:p}t9YBV7Qzt%k@KA6' );
define( 'LOGGED_IN_KEY',    '5@n|zArJU=7>[-:l;3Nd^}D4g9J)P${;G0[6r1Jv*)7)Y}Oa/-K`(y$8`FE[b[N4' );
define( 'NONCE_KEY',        'dNvABKl}]38Yj~GX{.kH6C<J?bZ218_X],}m*3S00*-!o96hRoqCMbl#6eXheRf$' );
define( 'AUTH_SALT',        'efnjavS}}a<G+L#B^E*f{H>Fhq.B190[SD0n7p[chRKiZwt&&kJ3t7LWzmo&5zj*' );
define( 'SECURE_AUTH_SALT', '!?C 4bL[ebHtf~t1/i#{8-_QbSti`;v;;6U~c`gU:H$dnZKtd{9f2jJv6MKbjHC)' );
define( 'LOGGED_IN_SALT',   'gA|NKtw<sm:cg*X($2OTZSy8siQoC#mVeRnU>(JTujwvu#rq:*tE@Cx&c3#.~2kN' );
define( 'NONCE_SALT',       'Bt-+{y|5_Ll[m_*Shy|caYy5`IxQ|Um)A[3-ku. ]k~)q@zWOV!r*`c1yjp dm]N' );

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
