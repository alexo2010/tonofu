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
define( 'DB_NAME', 'tonofu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'JJRn&Y40xObi2y yosQBc48?*ih#/$x~wgs0[@}<etFBu)aI=/#0q+]H}NLNJ#7[' );
define( 'SECURE_AUTH_KEY',   'r5a6 .kEM-?*$D9=@$1?{QNo?~Xo[(krw+{`t_U)@$QECC>ri+g),u.Js<Mn.%aT' );
define( 'LOGGED_IN_KEY',     'a9!K:&]ayfbF w+%<*K,Y9HQy|7,Mly?9i_a-YL5e`v~Qx#<H9mv9]mw3H*5xdvK' );
define( 'NONCE_KEY',         ',X]ijV/7e)q%-F#L|d=$n91O?q5<t!<[(&@>Evx]rzA/`2VYk?JY}YxIQy&m?;gf' );
define( 'AUTH_SALT',         'Z_$/RZ$#^|k!|M r)?,p/BLY-?oY=5/o,=@<(-u_tJ7iOPM@6j3v!t%q,#TwLMgi' );
define( 'SECURE_AUTH_SALT',  'H2^n?Z3V=4o:9*nJ_,]db7Q$tjb8w3c6(q>]Tky/x=Dio 9H&EwIVA|UL1gD+n>|' );
define( 'LOGGED_IN_SALT',    'V&54q=+sYqP?o;gc.LIf8l$($<y+>/-?nCph%d:=17+H}Sr1UVl%FKZH.o.4wI|!' );
define( 'NONCE_SALT',        '21{|Sw#f[seP&(ts7] a k=Cq({/$cz@!s~SO<;m@W_XZ6Kj)=m/b&417]#;[]|I' );
define( 'WP_CACHE_KEY_SALT', '|[d3fL^g*a#Ttx9ric Q2RE^n=,Pw!#P1Ja~xK<~=&AS#}Qs0^Dd6ow#Xo9:76C9' );
define('JWT_AUTH_CORS_ENABLE', true);
define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jdn_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
