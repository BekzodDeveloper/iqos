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
define( 'DB_NAME', 'bekzodde_iqos' );

/** MySQL database username */
define( 'DB_USER', 'bekzodde' );

/** MySQL database password */
define( 'DB_PASSWORD', 'j[BPAF0q92:il3' );

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
define( 'AUTH_KEY',         'kTx,MK]+xA2De48[|VWOqo^OK<$Zqff9N?pa=24HnPE[ PSq_oSLpGO:{?H+meBv' );
define( 'SECURE_AUTH_KEY',  '(;F!?4Mtn9b8y8Wc4ShL<^KK-*-MJ;:(mwtYuS|&k}I1.txfpTE,jvS+8m9:h~4W' );
define( 'LOGGED_IN_KEY',    'W,?(Y>quPO@3E;;(lPK>-[4-I%s,-!6uc.79 2i_tioUQC&d!Wj}80o#,{!!5D *' );
define( 'NONCE_KEY',        '4Z9v-7]lG #]Sjd60-q~3TT)[EY|{wvKQ^qEK`xG!!OK5:QA8;+j-mcPFnF#cEL>' );
define( 'AUTH_SALT',        'sspgXWf4-wd|l8Zh=f<&}jq#f+XOKW.{5,<K9qCn,$__Q aJo-e!K9@g!r. x*,:' );
define( 'SECURE_AUTH_SALT', 'R:I-x$p;g?1x>[l<f|P_%~hv!R:Z060|FPI)E3u_>+p?29^P3zf|/nqQ]#a-D-Q5' );
define( 'LOGGED_IN_SALT',   ':W:p&*E}.`<2B/k{{_U-F[W~FWbD):4b;**G<6G*|%`wX8D8( Bl&N)wBE?0>Y3*' );
define( 'NONCE_SALT',       'qXJ2$9f [w>pD`<o7@%V#f{rNSo}UbB8p):e[ET.?il<,8@AYjSzS){ug~#n@YY9' );

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
