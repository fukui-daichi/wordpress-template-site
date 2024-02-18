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
define( 'AUTH_KEY',          'VIPU3DuB}(WNBO<L?aV+OE ECbrQ@!G .&j^RW{aYXO5-lm32Wt(xw%L4}<e-P<G' );
define( 'SECURE_AUTH_KEY',   '<bT6C(]/;(??]BnS%#R2#AOXPz!x_- Inl*4ty8HAw-0x8--EV7U0X0sr7@6AqZu' );
define( 'LOGGED_IN_KEY',     'BKPPBm=1k7gt[*&lbCcpAc5jC?5c /3oiim9s]p*IfiT`S&2Wig23.(rUE9of)-I' );
define( 'NONCE_KEY',         'YR<BI<mj!DxxWPohnwkVClP>V=aMh4U~a+%!fH4|bqW/=}X|r,ek|w(kb+#puzWX' );
define( 'AUTH_SALT',         'ubEGG6]cJ+D@JINB<At}U*p)faQL0QcD7iyx9@dsb@AS7.Vf#,{LT1x4-WYP9kz7' );
define( 'SECURE_AUTH_SALT',  '6QT&G3TxyMgEd#_w-8qC@-Bf7ViYc1u5*IEU`jQX1!5KVJO7=*j3v=A@rp~OA|@)' );
define( 'LOGGED_IN_SALT',    'kH>G,!YWYYB(7Sp}V_~).&WU3-:LFj-4ya+YxZ99Z@{G&3^{Q6-;(Zx3T i|Y2nm' );
define( 'NONCE_SALT',        '@H9//`4[0vPuEjTqqg/[@l*qvDP#vTG,p2jhP^/&o({-H0U&=JDcB||cCfQ<zK8{' );
define( 'WP_CACHE_KEY_SALT', '),)^Ihm|czG{VYj0HI=T0#:zPQAZ+sj?e98#&d@b}d2wXH(+KBac?0&Cne#JWk+Q' );


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
