<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luxaways' );

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
define( 'AUTH_KEY',         'ZY0BBrJJ.su[ `HI[A2$by4-XQkh)g;m0=U1EZdFD9GQ-v5-`<^u-BpYYS - C%d' );
define( 'SECURE_AUTH_KEY',  ']< ,BiRV`.x/ZV,aXOE(h{b);5sK)CL0JVN#8Sybsz?j;Ys{o{(Ee:vUPA-m&S(k' );
define( 'LOGGED_IN_KEY',    '(lsOyLk(BP1xgloGQ?|u[)MsVGf|d LWFzY:48AR^pYWhf3.ExQ>z~GDz.OAKqV<' );
define( 'NONCE_KEY',        '/v#ae(%jDS]i`SiWhQ}dceA*pYbr ;/oSX7DB+Wks43yj}8*@X|mEysn!)Pj1DNn' );
define( 'AUTH_SALT',        'fD&mV[j-EZysl@kjWL6qYQNJ8YXSN)%{v6p=c%2n@yH/L3nn.(YWlke;5NO7VoEQ' );
define( 'SECURE_AUTH_SALT', 'gLat`Emwd^lRjxy9F);|tXoj!!gqu+_h)#%i~N+6X%vQ}u?(o=2<BK>3/.(#DI3Z' );
define( 'LOGGED_IN_SALT',   'A&2,DF`m+Aa_B^%qabVK!9&n9Gq7I@KIq&$mknK~NcMv-c uiK=8i0V{X2[v[wJ+' );
define( 'NONCE_SALT',       '$>FxX8`SI`[W9AVllxzl$*wa{kpqHCS-%4Mw~9(~3 `aGgCj8W$4_~^EGj1:P$|/' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
