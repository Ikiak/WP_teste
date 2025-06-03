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
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         'O.(hYJXacN.(ia;t%%&^O3@, 4x#$%eC[l65Q&;Aa_DANbY3aft]U%6vDAxjb{Ko' );
define( 'SECURE_AUTH_KEY',  'X_QdwLkt<3Hz/uExG3*A~odv|I;Pd+3QI+E2C~J.@9.:X<#6PL6q*ZZQ0_}^*n.%' );
define( 'LOGGED_IN_KEY',    'a|hxV6K1mg4-IG1ij:A&{jFeufKuuMT,V(m@x&c V$Px{s-wiULjN 92FUf~5c[0' );
define( 'NONCE_KEY',        'b9s~C&(K=YZ#^VNAwP,/0O=&ZWd:,gG??KbhY<pi`<o.Z>SvlFX @[bs@Wkg>;X~' );
define( 'AUTH_SALT',        'f@Uw_[|JYFY)Uxk6a<a#7}6CD87Bd;|mq9C5 O4KBqW&[8bbh7lncg,{qdFC.H+Z' );
define( 'SECURE_AUTH_SALT', 'M&_hI: :{o6NB:fe=U4nf11smT7%7)iMihDm!!tLyD#c ,q_o:#[eO&PCVRV3]C?' );
define( 'LOGGED_IN_SALT',   '75E$S~ aS1*2yd@5wxj-Ki>F@;8`@fxSEhI9nhT2^L8LhWC-O/-Nc>7xZ~a[,0!#' );
define( 'NONCE_SALT',       '*EnadknizcA}Zg;C-u#zg?gcd!R0R+f 44kCc;XkjW~8ZES$A<[).rU(oi!j2_6w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
