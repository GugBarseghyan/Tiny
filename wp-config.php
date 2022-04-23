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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tiny' );

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
define( 'AUTH_KEY',         'o4Mp5OXz}yxx@D%i]:NW (i<3AN3Zm~K/1q_L&A- b[(2.#snt/dvg$se5,OxpY8' );
define( 'SECURE_AUTH_KEY',  'xq;RYW9O{Y*Z)[Z?@]r$Ee]D=.*xiOhJLAtQ@f;[q.H<%zKSA?){~G(&4:!lO@dT' );
define( 'LOGGED_IN_KEY',    'hA}M{aGCEwpDlR.{rPd#1I[wep9H8f7EjD9V2vcO8W^}bwSO^^9xv8vPNw^5,HpL' );
define( 'NONCE_KEY',        '}IB42(q+5OSY7qi!8NlH-;u}b*.}YP<Sky(Rzm(ystEW9b4;leK>wX2Ux<c%k0j0' );
define( 'AUTH_SALT',        'oaS,`4lTL{uAU(THG1E3F=}a/q:R@a}%bz,kl[:&C(sU0%d75TQEi2I0ySixOJ($' );
define( 'SECURE_AUTH_SALT', 'uO~m=zZK9iz>nm0R~<*GQ<4{JwtpaX~EK<X<Vh2ZDiUu:8(A%c?1>7eLzbwayJ>o' );
define( 'LOGGED_IN_SALT',   '((E0n}@(n9ZD{xHngjf).89Zy<RZU<4)txkS_` Y|I@gsjaDr+s`:)wp:y?:q d{' );
define( 'NONCE_SALT',       'g`Ubkud9t(NbvOBdu5?0^<+w5gi7m jR~:x*3p%0l}q;z=p({;k8`fN}U3@+nSLr' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
