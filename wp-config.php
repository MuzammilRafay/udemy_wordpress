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
define( 'DB_NAME', 'udemy_wordpress' );

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
define( 'AUTH_KEY',         'E;cg|QH<%9e)dxKqy%{nIb9^ogO@fVl%5f:k>=L>6LTyM~l[3Ru|?}yl?9FbX]Q5' );
define( 'SECURE_AUTH_KEY',  'Qb)l6g_z o#d$.x=esr7]rh%=ku|mA$#oK6l-M8yDGPD)0S(bO+#kteG]nUaHn=<' );
define( 'LOGGED_IN_KEY',    'K6MuI7f`MvLP=RE<#losq9d7mh2ZeXE@=BI%>p{~*Hv0ty&w0|c5L5yDEq/`%8ot' );
define( 'NONCE_KEY',        'H`!Tu7neUi-J8m4q[fKz(M*.B[4!9U?LO<8E.-XBWDlH2r},rWcynK4E>*Lk(DF5' );
define( 'AUTH_SALT',        'q7=,Tv0$H%E^m?IA|dxX[yo+l LOQjZh1jL~d|[r?wMBA(8Cp[2ZE~#&6F|21D^P' );
define( 'SECURE_AUTH_SALT', '+#F^>eHz#XdA31(qAof{6dzOF1j%I`sndFA@4R;G5pSmfuX:z+ro!S246C9w*&kT' );
define( 'LOGGED_IN_SALT',   'jo5u,c/&=+*!zh}?(5lyPx(22/n@nm*Q%D:uQwBj43jG%olz&y6poJ/.qCl*N!PB' );
define( 'NONCE_SALT',       '*}ok{#)9v1qx|[PGK|DtJ}SoX~Y=+Ufts]m),}cPgfv#56f2.^JJYE^5RNQFoW91' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

// define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
