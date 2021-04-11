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
define( 'DB_NAME', 'wp2' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MMus!c4ever' );

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
define( 'AUTH_KEY',         '$jXj8?f)>n&h.Gv]D-2#9mH*kZ|{OekL@oC`kf-p3f&<2d7[%&41}_7=T7dVXYI*' );
define( 'SECURE_AUTH_KEY',  '+,k6Pd7>)-gZlqg~Dl]^=_;e>U{X*t(|v9fkAr?$`I!(1Yx#q6(YHa6P[_.Qr&&,' );
define( 'LOGGED_IN_KEY',    'IG7CkPZ]ct<nu[ZbN!^lRm|iqK0.4yb`j(OE.L-?Zy_lU$pvnlb:Z1~;>8witoJw' );
define( 'NONCE_KEY',        '%H$uo/MmGv19&Hv_J;}hel]c$a;hXJ^}Wp^QrkoAO4TU* Roo*>gZWA%Gb3Ck%Ya' );
define( 'AUTH_SALT',        'izM{sC6TH2xhse~CG{8h1G3r(0W)[Q7aOdh858 oxZLNpg3Ns@q^F1U`,:a5O$1w' );
define( 'SECURE_AUTH_SALT', 'iDO1V~ibG;z+2fk,_PIbkGo]MuMP7|/v7K8xGwo<4`8&5t`_C?-&arkTd{Ltgr![' );
define( 'LOGGED_IN_SALT',   'etjTe~AIle{U%}l@dl@<[k6hw6N+~pBSA:|XMvF}Xmiq~NLX7BvLlkX!]^@1{bon' );
define( 'NONCE_SALT',       '~[.j}hn!#[H+2)OsQ1rsRnU_L*eL4=YsOatN)yw.1B Z-Z~;&#nj5cV*?V;Fftk`' );

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
