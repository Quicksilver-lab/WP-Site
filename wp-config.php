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
define( 'DB_NAME', 'dark web' );

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
define( 'AUTH_KEY',         'u>@gAW^qKOY@*`8o`~r1xWW`#>;>s.q)-h5UdK_MIhredtQV%J>}vt`n*,f)enH7' );
define( 'SECURE_AUTH_KEY',  'H1XfvLKT{<;7R0:a1|Kjg.aVPI5XS`VSNg*}3BdojnR/ue&[sG2%U)Q^1Y%#Cwov' );
define( 'LOGGED_IN_KEY',    'fah|=;1VcVn2g6qq<Lur=>lCd#%CYHzK:[}ImfKeUd )7i%-;e:AZ~~ $74YNA?j' );
define( 'NONCE_KEY',        '-L/Ns^M)gkM$|HvFJb,H=VQQy/}+&L!ODpb`n:fKLxc6GXRqi;6Hbf^b%<E5*[C6' );
define( 'AUTH_SALT',        '!=q-!7smGA5h[>;o,D+|f 8eC+D~|* `g)8oF402^d3(U?P19,5g-}78P1*5mqZj' );
define( 'SECURE_AUTH_SALT', 'AfDL{9A!I5KnQ[=[*xVa03!0JtHxm{DS^CV_YqU3zd3R`,>C/0JxBBHr?;hQ]QYU' );
define( 'LOGGED_IN_SALT',   'MY.J$|[{HR8]y AZ0E+B:BTFt^3gqCtVW42VT=hRKEqN-6z4rIlB^E<DsGTDq7m5' );
define( 'NONCE_SALT',       'bDZtEuW},sc5,E:0!_bwNd0e,inSnVw*q.q@q74Dxj_0a&kU2Lo<S3 1og$cTE.P' );

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
