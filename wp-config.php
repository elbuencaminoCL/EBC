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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'EBC_WP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(]8$7,taM5P+`.3rPrNu^7f}!(]8J8$y)l-x!BY3R4}^P1je0RIkoYADZ7qv@Hl{');
define('SECURE_AUTH_KEY',  '[dh0-H;]5I}RSC$=nS@g-SamE fIv+[1y_LZK>@ESJPZa8 }8j=XRO:24~S7QP,f');
define('LOGGED_IN_KEY',    '@uP2*ts[,zVq!OHq`xKoJqa=z ;w_qHu;@.d+ }L#{<3*MShf3/X9fVM;au.INRC');
define('NONCE_KEY',        'BiH1x|kD^VZgc0aUrge0Kw+fE U(x54>AWhmPsIrSPK4-RgUV+|[A.Cy+a>}R{D#');
define('AUTH_SALT',        'Y!~|KpAC$lYSj`!@:N]^+a;N%w3q?qmX3>IU%U.=j25=HnBy@_f}]O:Md:)Abwki');
define('SECURE_AUTH_SALT', '2l!9%4fiGnBp.@:g_,H:;|oeAV:hkhh 1FYSc!]Z7A~k;qJK]OWU(d~0$@IOMrX8');
define('LOGGED_IN_SALT',   '|{mxAS8}80k1Y)N<x!P=TZwWv%Lrc[]6kRg+S%=T?mGGdy[0UK=P7N^kx+pd&{8,');
define('NONCE_SALT',       'yngn]7FR?]M`splVOLD&({dG{XN,&;8@rMXCaI_F|sR;<4ggv=MnN2sxc5|0CC8*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
