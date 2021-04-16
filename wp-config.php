<?php
define( 'WP_CACHE', true );
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "opportunate" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "arahim2255" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',          'jQT6ID}+B8uk8Mr?(1UR]&H&v$6?##OP%].{i %_u~z?C>H%&U=)?b}&p2$$|TR{' );
define( 'SECURE_AUTH_KEY',   'QGv.&^%)`UV^1a;,V:N3qM{?|DH!p 0CR|c6wb1G`)UMyEK7[Mz8>HIMb$HocHi<' );
define( 'LOGGED_IN_KEY',     '*p2?RFJ-i/Z#f=Txi[6g/Y%D3Ig]lUKE]yHCKq,M_&[{Y)w)WM(W?Vms}MU[8:_2' );
define( 'NONCE_KEY',         'Vg]9]+E]H9]aA[|CmjkRd8t9.R)7`6I[4>$VJ}`3zxl0yUiW8y?%Im/*?K{-Ls}K' );
define( 'AUTH_SALT',         '/m.EyZah#a%{=UVz[rgy Hh!4=-LP<>$Xf01J[nx=S@)AR5Pz@A3R-Ibn _(MvK:' );
define( 'SECURE_AUTH_SALT',  '5MATGx]qOIi*G(;Z-#xT`2]RajlZsi8xm`;?,irf2i07;k:?yGz%omMd3e_V<S[8' );
define( 'LOGGED_IN_SALT',    '+y)~*G=4i[6JHN6HIa?B^!]h]+|ZkT]S@u1sD/K958kEE-z|nInBdUk7zJ996CC5' );
define( 'NONCE_SALT',        'W]?0_R~w_Yy3iEo+c$cpq#p|od*?#CDvSm+F7jwZH<f g?0]QfdpN9%.*Tke+v]K' );
define( 'WP_CACHE_KEY_SALT', 'mri~,*(wrelqfHNFvMB;>5vu ML`p9$DJe)Fjz8SjVevUTTU H4wL@Xp_J>c$[=<' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
