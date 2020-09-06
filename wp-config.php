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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sinfull_temptations' );

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
define( 'AUTH_KEY',         '28O^G=g!JW[0 ||/OIsW}`t.oO<p,4+VS]-p$1C@nQq?}wH#CCDbVCl-v,6hP8N>' );
define( 'SECURE_AUTH_KEY',  '[<aV0afz=ICsL;@(.RKKi#,^<77Q?psr5,E7FhU{N7}z0T9XpTu9Bj7;Xfb3ud_a' );
define( 'LOGGED_IN_KEY',    ']uH,0g3<qWwK8,1+~{fXTR:%!4.<OxXFPn[KJ#-?3LZ76@&GWic]S=J~k;W/mm2B' );
define( 'NONCE_KEY',        'pB>r;$$-$3P5t8Ir^[fDYw~a@>l=Pa=zh=GJnIh$i1_m6YgBA|BQn+mZ4b#jifc8' );
define( 'AUTH_SALT',        '4L8ww*b! wZ-f|Rop)<(kdcy{S])r-#7Mht`m-CSi$zkz$E*h*5*yW`Q]Rd*0?Lq' );
define( 'SECURE_AUTH_SALT', 'P8KIOd8Sphg&J38Xeh~,^21]s9 R](2107~[`66u)6%(Fg>yv:E2j{@#CG{WSa>l' );
define( 'LOGGED_IN_SALT',   'Oz]Ib=X$4.bE$7PrAq):0aOp3#1l1BmvvYo Be%i3UJ=jE7p~O-TbmdQjdF&X2iK' );
define( 'NONCE_SALT',       'zcNS%4)rkrRp=~6X<SqJ0A6;op&JEIBk0^]=&q$~vdg1q|!smcgok&Mnjx-w=c&g' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
