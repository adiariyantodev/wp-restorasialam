<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u523337059_9MsmO' );

/** Database username */
define( 'DB_USER', 'u523337059_2myk3' );

/** Database password */
define( 'DB_PASSWORD', '0BZ0N4CzLh' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '/N;YojI$P)MRO?qH2{%7S&eq~ ~iev64&dUv&_C8W+l@j_>SIu54y!(w>[`npv+U' );
define( 'SECURE_AUTH_KEY',   'iaD<m+j^~PS&W.v(JR/FtkA#k|I?!Lwa}N{(R#$OeURoMA.8g?0dW/g.viCg[kyD' );
define( 'LOGGED_IN_KEY',     'NrY~%oNbc3dl9%(+F}Bq<P@?~|[QH=LA_ADIwUCl.Lo.pjeG?vqOmgvxUe#Tc>QC' );
define( 'NONCE_KEY',         'sD,OMRU+CO$baU~R}![l1Zo,-lMl0v<KU*tYf1Zh4o]@RoaA)O3y<kZp><DuMeX6' );
define( 'AUTH_SALT',         '^DmC|loy|M>mcF?}#_m)ZzS,[|.)e*7e^]N)6=ssD_x+H7$6GtWwTVQ,SJWki9y<' );
define( 'SECURE_AUTH_SALT',  '-[}4/3-x>T>!E;,-RQtxJoc/jM~+x8AL;0OqEqm2JyysS!g(EUnJVxU[i-/KJ/Gd' );
define( 'LOGGED_IN_SALT',    ')O&rKY`rZRT0lO 77;InJ!zO1R*v%P|:x!XG~nv4<y9M4)i@+G+]*QM?].%]M{g|' );
define( 'NONCE_SALT',        'Y,vPTxaQ21Golve$CclJSjKKR#)0cs1Y|;@9?Cx7NL-TmH/l]r&bd[uUk:b<8m`.' );
define( 'WP_CACHE_KEY_SALT', 'zhIxa@Wz t5GkGKL)V*AvX4F){gT}9NgjI)$[o9fD)[>c67<kPM[K EyQuAdyRfA' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
