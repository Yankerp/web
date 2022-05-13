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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'pwd123' );

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
define( 'AUTH_KEY',         'GS5N7=;raIs^_=S ero8atL9a{ZS}}1VJ+d@3oD?~&QNrzt4Nn]n9azQ-&k)*dWK' );
define( 'SECURE_AUTH_KEY',  '+`v3.fGI#{SPIAd<F(Pt{if3~@*Hm~L-iF)Eo]:1V=j~QB9:(T~-O,SAnswO&SDx' );
define( 'LOGGED_IN_KEY',    '=[- $<{3wpQ2XhwQ13%BedmhC@4a<}[rf8/=832)3w0%_vII_*8#iL@qs5oWPm=&' );
define( 'NONCE_KEY',        'y$+!hRU`%fAVTh$Ty2e8pSWHTfKq8Oe*~~WOPG01g@%~WU%m-8&9<-[Ozt4k)-kT' );
define( 'AUTH_SALT',        '`Nw,&k<-vA0[3IvlzqB}f17d-9prz^+bc1*$B~D*`fbf?$yDzw@L{ JeyZNXy~7`' );
define( 'SECURE_AUTH_SALT', '.*Wy0;%||)V4I~TBWNS-Dy`XgkZrC4jL<kT];gcpppQ(JA9C[X$g:6$0,-+Oi,NX' );
define( 'LOGGED_IN_SALT',   '(vP*H]E?(gT8wid*P[xylHqb@bL}l^MfFOM]_Z!MAtnfTN%TEm>gQj-2$b[:qYFX' );
define( 'NONCE_SALT',       '^/t2nS6^}QB(3L>n}T|v}D^7-84)J1SY`t*EaUud6W*B+J>V$5C#5suECfcC]^0-' );

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
