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
define( 'DB_NAME', 'famosport' );

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
define( 'AUTH_KEY',         ' g }?PWgq[rcI9mSTnaSwjEHi4|LZt|NemX52=#u)~]GxF+)3|}3Jl84:Z3QOJzB' );
define( 'SECURE_AUTH_KEY',  '8sw7MeJOg~vzozi[Dpy2q@V8FT,LLTW31j^~aZ]A:)Tt:3c.W>% ;_n(!Tj(3|2&' );
define( 'LOGGED_IN_KEY',    '27!5ZPcI}4z,hXc8995`3]i>,?66Cq1[XX~0il h(9hl21$3i2Xb/s>T/oA$RjAE' );
define( 'NONCE_KEY',        '_V$BL( kd`8nZ4PG:&>7]^A{=&_(4K5P7PZ5Ltg<WA*DXEB=[..],Pn)P3@gui<!' );
define( 'AUTH_SALT',        '[bwO*s0>|`b(H$%F0FH.ub^S0&4jnIAJJHkV[$P90xxcCtrh?ke#;w65|N!oL4om' );
define( 'SECURE_AUTH_SALT', 'X&-h3EXP.;.i,[wl;kvJU]sau DIvM#n[dqpc//JWhGE~fm=NG^FMrMB->n-_x.0' );
define( 'LOGGED_IN_SALT',   'U~xiN%J&p1nu]b|QRh,YfX;66Z:DFCID4udSya- uF8V&8hD/$$^G>_:B[Jlv)w>' );
define( 'NONCE_SALT',       'kFJd6Q#0w6n1u@E{O87/yH.]|Q6R,UKb@:Y~%SH!+P>}H4LC<me^ma0OPn?k|O]v' );

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
