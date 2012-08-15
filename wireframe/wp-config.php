<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thorn_wireframe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '=S3Steb1[+TLeb.e+Y$|&_zfERd*9<S?K&?}|[~u BIkAjr$IED,PHM=DIYlwg?*');
define('SECURE_AUTH_KEY',  'hDYIhS4U/5@2{S*d?PngB<}5Ebghw8]}0+KK<FQa&MU$5ckH%nRX5Q2*N,],s/<=');
define('LOGGED_IN_KEY',    '3KJb>c|M)vO;?/gJx1-!sg;dw:wGuHfjG?.7sVt;a1*L>.6Ih5>B(h_Z^v|zu@+7');
define('NONCE_KEY',        'xW#/JiH;)H{f!APN9159KNhl-dJWszAQq-l--UB-5|fJX)&j=WOh0](oA%2(]- +');
define('AUTH_SALT',        'o<DZWdJKZN2KM@y!+G*$?68Px#N8rvX.>lE=[|@EAhR46|lCSS2RaU+~Ch]5S|Pu');
define('SECURE_AUTH_SALT', ':BisIp{n~}S}892#BNP V2d_B0V-t hZPThf*7v<w)C!ij;yq4)c*U//#+f7^7G#');
define('LOGGED_IN_SALT',   '{~pk94M:0UGP2Z/q-$~{u#rJC`7{4tyYqMiyFP)qB(C`=OgV*)dZKGnL`$>V-|c>');
define('NONCE_SALT',       'of>,47Y,xAG{Ua&T+%,=|&+<HxnAj+Gru1^OvAP?Z_a(LAg+t=M_$|!7i[QJG^Q:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
