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
define( 'DB_NAME', 'smartqc' );

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
define( 'AUTH_KEY',         'g1Srhnd9cozh+@Z[ID:%5U@xk{=cr_HO&qW]?,ycdl74=R061w1X7C%JWNq_9nQx' );
define( 'SECURE_AUTH_KEY',  '>P=FaLk``q&y~f`?v8/;HNVCzTOfhL8m|8K?MU{jZZ6 Qn1a$<AY5L[y@*2l2zsV' );
define( 'LOGGED_IN_KEY',    'n~V~@c;n3,SgdpY;cU%z.GxKQ3/|L:.#QB4Z{h&W^NK:(L%EE}+%f;)SyP_*r-aw' );
define( 'NONCE_KEY',        'w`iTjh^guj^<s[r@^G3S&CyV78-Q sTKTjqW+k.RsFK;c%wU~|{YXa~G,;e-~.#[' );
define( 'AUTH_SALT',        'd>}Ks,Iczq`::U}L-w3&4$:xA!`XQ #I7(0y4d%=~UgTg?ZXi!*9RwjTg>qGChI+' );
define( 'SECURE_AUTH_SALT', '1#:XZ7gS2?^><CHPt}:9zIU1kjp<yg{_( bjM#%UYqrjzwLKpke2iW)dipMGOvZf' );
define( 'LOGGED_IN_SALT',   'C,3R@4yG/J?wN^GnDTs)>;~uo_J95+C.F~Ap(hRJVzPqm`|t0w_^RRya**eHwH*}' );
define( 'NONCE_SALT',       'yFp9>Q{9x?xe4pg4u(O6kjQjbF1tH=sOdx!_~kBHosO`2Vw6OoE@<REeQ*Icn1g)' );

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
