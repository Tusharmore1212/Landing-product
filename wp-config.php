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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fourth' );

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
define( 'AUTH_KEY',         '#~DSlj5lci?&]8ceIbpA(]Eda`xaNQzUBzGf;0NpCW|,eQ_&x0-)=~gb2DW1?Xx4' );
define( 'SECURE_AUTH_KEY',  '}x2sr1oWaSNf`e<IT<8UN#J!IG-%<Q9vU=DUeroXqVziFDW831GTI:+V.a?BP+m^' );
define( 'LOGGED_IN_KEY',    'a=i~[+(f3x5#jpF[i@)&w oDblxut_,8Id7$pDTu(s?iWwJ#s=166x%MQ<*0(.^v' );
define( 'NONCE_KEY',        'iJLbG0%@`q^oRto(rN(nat?K.~0P)<d|&}$*@hr$-S&1q(?*cjPpod!^b{%=%A&L' );
define( 'AUTH_SALT',        '$(5B2d$F[BH6LMWjBX&CcZMX7IoB_PR*aKI(8>!rM&KIe5EiKt6NZ41pO4mQ.0uN' );
define( 'SECURE_AUTH_SALT', 'ijB`Iixt ~V`~p]<Ftv;8Zv2{9M.+dLBUr7#,LO|9*A)=vB*56ZaCy 3>fy2%qM_' );
define( 'LOGGED_IN_SALT',   'q)e_/Ci_7M65JA,ev_IQnaFqiF(O&DV#HJ`&B6:aVw1~Ciz<hJ6v|^(!dUU-?:4_' );
define( 'NONCE_SALT',       'YoV2H}~=aei;V>f5+8p:NR_xL33WP%/;fc{:5ha(h.KCCWUT(8$?JU~&nEOx5-7,' );

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
