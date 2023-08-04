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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

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

define('AUTH_KEY',         'NnMS|B+.>IEzKRU*1!@2URaz[:b{[=,j]GP>~P_r~pY7cyrPG*.p|` qG{MwNpzf');
define('SECURE_AUTH_KEY',  'R&%|^FbC$?ZXmfL>%h{iqDJ?`q  K5u}h7a;+`[:AIjbRlTa&`QK+(5[yg!woPE-');
define('LOGGED_IN_KEY',    'Ajl&pfEHAbngyIMqkK1z]Ww]6$%HL_o|icwUN^ zf+A-8 L-f{_]b#$Y6&yGFPC5');
define('NONCE_KEY',        'N8Zw,1d1x;|6rI~x`wwqI}7wgdeuFk!DY8Q?,XZT]e,?IDurm7;)ciMRT5,%%fa@');
define('AUTH_SALT',        'Ve iz]-RM9:g7|.@U8>>#!+K;v^&??t6<4R$tr)R%kh$j)t)sH6yt?}!Iz(!ky4c');
define('SECURE_AUTH_SALT', 'Sgc cKZg{J&VV/H+bNMWHXvfUc5y1;PO-?X3l++,PUpf?FLKO2|7U+Q$6/<KvV7c');
define('LOGGED_IN_SALT',   '8,-V6iOMkU%$6B@NV5|t- F3,;S=?;A?o5>Xn1i.aZt8bSQvX|msg2<Gwn8+-LiW');
define('NONCE_SALT',       'o?z6lc=]Zo&-]K#9-RP8SDbwr8npSY{+oO+-ety3J6_Q^;80a+0Cy)dcO{HK,D4+');

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
