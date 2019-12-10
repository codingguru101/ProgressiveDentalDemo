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
define( 'DB_NAME', 'progressive_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'vMWIluG#WN[z+ XFGx<d]}Q5{,>(#DbZ,u{xwt!#;XZpbQt#fq^N9^rg8UN<LL4o' );
define( 'SECURE_AUTH_KEY',  ')sfADr=AlE$c)C7`6XrKK/n*ex<_#NPB>=*Fhwc=v2e66,`ULu(j8?+M4BNG(h/Q' );
define( 'LOGGED_IN_KEY',    '; u7P$O1 )bRZ1]3ew[AG~i*EnuwH3o2ch|rnJEWY7-2Cf:=t}UzJ<uQj1#:Oq`8' );
define( 'NONCE_KEY',        '(8ZR>r&=wh8U.8?tbp&eLCFdXzX;`>hmN;db,_2Fot2ell,*c?:3}cr8&1!ALBfd' );
define( 'AUTH_SALT',        'p+Q6x&`J2h+sIy*BHY4|}|zod4F3sW 8x&&kfNg2`LU`N1:kxgye>o,7oZ1>!m)u' );
define( 'SECURE_AUTH_SALT', ':Zt}vnq`lJGT&>|h)ohwx*ejSRye~<WN91Dt)W@Ru31,jw*;w2kQ<@Uk]1JkOff^' );
define( 'LOGGED_IN_SALT',   'KQGY_t~>/.<d<Vp$;h7$zVCXZ1!e;5kK1Bgkodf9Ip9}.by%{-}K#&z1t[2FQ,?4' );
define( 'NONCE_SALT',       ']9rFdnCMz6g<ZpA,0v@Rk,5l:_/q z]Ky-0wS-zK1(%z1moGP&t.VI7%J[c9[j>Y' );

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
