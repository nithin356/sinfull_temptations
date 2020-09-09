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
define( 'AUTH_KEY',         'O:/.TaPu6cylF &oVmO>OmuH;_:%[`Hv!Flm#<vt+S@Q6@z<]lOL%T-d 4Z-?W%,' );
define( 'SECURE_AUTH_KEY',  '+ML/HX  MSNr=Y!:gmG(ZW6HyU8-WNn+/c`UoN[-I}&^(RikIlN/rHG,l/ickSR5' );
define( 'LOGGED_IN_KEY',    'Mbj%2R-j^}Mp<S;GQ~^9,fYg`uw!lU@clv4%x2*L;q<hR`Wbi$U.=yEg!h%rO5X%' );
define( 'NONCE_KEY',        '<K=)e)O8o{,/or62cYp$:{IF_Q.X?>:&Gx>K&99digWv>u9!b|Ro ([lExL2%Mh-' );
define( 'AUTH_SALT',        'nRMdv:tx=UU{|9uOkCLQP!S8,9H{id;h~+J{Dw8$`N_(6 da1@R*{pv5!HQ~K`IP' );
define( 'SECURE_AUTH_SALT', 'k7pA9S1tjFu|F5]?rJS,^Cz1fPKSp@5;#E:M1J@KGJhCJGXJ0OG4-)~1{{UNNwY9' );
define( 'LOGGED_IN_SALT',   'O!}`WRxTLxliI6q8#o@;cS*2=aj|UPzz1#(]VzhlE,py1<4-c%aZ+p<lvp)v`A*P' );
define( 'NONCE_SALT',       'b>79$xhH$6>jTs8=NDm816[=ZzqB-?sT vbt|4#gUf=wGDY`2YKwFDS0Xf9SOIW/' );

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
