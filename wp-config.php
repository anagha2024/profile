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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '{0 `f|bNEbIjQ_$H].NPt}n=Hs@c.LeW%^+!Y}ca@}r-M#.p!z;)O)_r!U<+D?-K' );
define( 'SECURE_AUTH_KEY',  'p6Q%}_#^i%X8&qa`P8={I*o9ZW#/#G``tn,r7{`XBS<P$`HZhXa=QI~HGn|zeb!7' );
define( 'LOGGED_IN_KEY',    'pVnIH~`pyS$0(b(R!/1az:*V#{4bvTpbjaF7NkiF*oad4}HG6(.L95,Jm|&9o;JJ' );
define( 'NONCE_KEY',        '}@N0WydkdG_eo)ig!a[{t5<%+$W7URam=}]JHR7SixZ$$N*VxeFk 8]}-=U} !Zj' );
define( 'AUTH_SALT',        'l01N;&+|>KV0n.fu$|YM j9K<.bIk:sbR7 -pGMRwZH>aH?)8-26o0 AhM]7R)98' );
define( 'SECURE_AUTH_SALT', '210Gto+DbB@(e33QSD+g^-jcmGb@e6j4(v>-p~t&)a;JKN-WiBho+|%{JZFzK< ~' );
define( 'LOGGED_IN_SALT',   'i4Eo468)$*F^rf{|8tNZ@-)J-G_6>7b@i6kE<-*agkpjuwGm_,sszM?{0QM9?93Q' );
define( 'NONCE_SALT',       '6-SCoj@c1W4HNf~lfE>cR .?UE`mCdw!cDvu[xKB:5(;d?1gQN&^uxPL<>7v}yf*' );

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
