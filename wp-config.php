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
define('DB_NAME', 'maxpoint');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'US>R2]0tc[7_yD{{j~{!mckL?[z LEz<Z4oc*dLZ]Cw8d r5%x#N-z0+k@+XvS`:');
define('SECURE_AUTH_KEY',  ':a{T[-Lre,eg1mngEqx!D1UG?VLO7z]-AmiLR_+Vy`BiIm9]Vem+FC&1l/Mi7TDm');
define('LOGGED_IN_KEY',    'CVZ..FA7Y:r.n1|XY1yTb2GRX-e&XGd57vHJgoe{;&s|~b{nd`(X[PdYEmzvb%=Z');
define('NONCE_KEY',        'cTof)GS*;-%xErPMHJ@QJA*J^KiDuDsDj{m>8;J(u!+QQg[=.o[9dj+6T((:RkLo');
define('AUTH_SALT',        'EJfQa-NJm:}RYxH&;`x1X_E8x<F|HUlr86Upb>KzT>ZogwsRo*Z!P==/ADV(1q-V');
define('SECURE_AUTH_SALT', 'RS-|>#S%[8,i::%~QhAk3FA4SaDBRyOv_6-,nFoC$r#4(jJj[s24,z`t$q|x|q%q');
define('LOGGED_IN_SALT',   'bBQKA`K]XZ{bm*W23{c2x3ZOnTH-d0Jg:(YxVmSE1(?nYtEtd88og%kH^{%{QjPX');
define('NONCE_SALT',       'o#,8Tq)5u*ddN*I- k3+#7_h>n+45bpCwF#m(;TR!*}rxkEde(=,Y^,_:r;4) H-');

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
