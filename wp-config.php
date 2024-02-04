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
define( 'DB_NAME', 'sports' );

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
define( 'AUTH_KEY',         'P$55;EGq0$Cejc 1c?OvH;$woK:va{cn+@XV+M%u,{zs=D]^|qJ[3cv#IR(2in:.' );
define( 'SECURE_AUTH_KEY',  'I#ga7tF^CD)WI64<hjW@.,+uO&bU8vmB;v76>%QmQ$5p{_NLg|@9*Nq{5,Z..Ix=' );
define( 'LOGGED_IN_KEY',    '.mb&{1?c-meT<#&GN]P(1TN[AY0Rrx)}a;$*KHjh>#zv?t11^U|UQl5LJ!v-+a3q' );
define( 'NONCE_KEY',        'AN Bn0s:Did7Vi$Kr7_$GaKjIDYCD1yr7n::czk*8baMt*2QD.pdI3moKnP]I}D]' );
define( 'AUTH_SALT',        ')GDo}h0=&$7V~KaCwI!wHG^b|iEBI8AuO}!&#4JUAwVx_t,!+p+*Z)tu~xdMohNx' );
define( 'SECURE_AUTH_SALT', 'E(Hu0!?5qoVeW%4LAvTiMlVp*;t}c#>f+*J%Z6`oXd=lZ[;`DtFCkGwbJQVb~66h' );
define( 'LOGGED_IN_SALT',   'lX5`1os[?Ji2C4XuXKUtTvQ>qPw+wt6l@g@aI%l?et;qrRsVS_- 7w:.>Kjdlh:@' );
define( 'NONCE_SALT',       'GrifJ;UBH#vwRog!ED]j5~O:%`t*Ax:T&<S/M8B280{u~{XRil):nM%{e$ZG4$Y{' );

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
