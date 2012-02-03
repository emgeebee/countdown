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
define('DB_NAME', 'countdown');

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
define('AUTH_KEY',         'NmI}nYJMVeE-gX?Aowxk#j8_T5v~DF~,,[FShZQc^^)$7x]kM}mfHFdwWkeI];k<');
define('SECURE_AUTH_KEY',  '+N4yIZzvd0~~2eb]?2X;svths{J1R _0G%=AcRd!{9.BOx<=]#AGh<i`4xc]qcY0');
define('LOGGED_IN_KEY',    'ZIY$Kp,:NBi;HAd+c`6H~10]n7T/J:s><4`u(b)$=D0QO<^{CBxyYyp9&__}9tgs');
define('NONCE_KEY',        '=yX?KK^>f{<HQDg, #<qOip$x!NNZ1i%h(XW&SP,pRE(92tSNWcFw@e}-[c&Hj%+');
define('AUTH_SALT',        '`/6wPz[.wm+!<BjTyKmP0mx7|,-L:NhLPy,:@ec+?lnasKHhFJKQDNO&`c^!WbNc');
define('SECURE_AUTH_SALT', 'nU|6:mN4W~aGn_nRwL7S5WLJ1}GRekI{4tr3i@emQjnCg>[|O}w(T--0.dPfR2Y:');
define('LOGGED_IN_SALT',   ';i!i?:mI[Ug~4x{P=bJ)&~RD77Mt0M k-EuNP7f_Sr[xV|28GXBW8J4DX:O?hZ;%');
define('NONCE_SALT',       'U-MbCC~nFt2RQi=P1)9o$d!Gthaw!Z?a$#p>R.{7Of!(3Wtr*P|aGB|s$c) kAOc');

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
