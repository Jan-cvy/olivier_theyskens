<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

$PROD = FALSE;
if( $PROD === TRUE ){
  $DB_NAME = 'ot_website';
  $DB_USER = 'oliviertheyskens';
  $DB_PASSWORD = 'Portefoin8';
  $DB_HOST = 'localhost';

  $WP_HOME = 'http://www.oliviertheyskens.com';
}else{
  $DB_NAME = 'oliviertheyskens';
  $DB_USER = 'root';
  $DB_PASSWORD = 'tamere';
  $DB_HOST = 'localhost';

  $WP_HOME = 'http://www.oliviertheyskens.local';
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $DB_NAME);

/** MySQL database username */
define('DB_USER', $DB_USER);

/** MySQL database password */
define('DB_PASSWORD', $DB_PASSWORD);

/** MySQL hostname */
define('DB_HOST', $DB_HOST);

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
define('AUTH_KEY',         'o^n$|OM2TGl~jtL-*>35fLNRo!`E7CFTl#eunwX,;~y{j@-HAv_S2S$3blqJ;m$C');
define('SECURE_AUTH_KEY',  'y30W]feE;z5O+K6k{:e8}EW$L2W,]PLUj[]g+v2e {|`w6<u+mRG4uhHm|:?[Nq1');
define('LOGGED_IN_KEY',    ';aq[+7{A+sW9X[M_pu2kXep:.COJBK4AU04 ehbJw6eOs+#$lbxnY6-IT6><;cS$');
define('NONCE_KEY',        ':RO&?I^$OVy#9$h~d-7A9`~,+0</rU|yK%jBT6ie]N4@0UwUvpss>nHW5MYbU@ZN');
define('AUTH_SALT',        '%]c#z[?X&36gt-FO3k/=:R?czFtHC:4i}LY8Mum#(h7I:>ip.H+?}-`bDhb#$^w5');
define('SECURE_AUTH_SALT', '*U/ZGt~_APxe$[!<pKk8,]/:0-9ovn60Ny}uC+bycdHi2lAqz->r{&br/9Ej!-[A');
define('LOGGED_IN_SALT',   '@+qrC]&7#2SQ<|}f1|CsSa!o|i@Hg7<tU3G]68=eU s*a0!_fq+)Q[v#8BUE;z?D');
define('NONCE_SALT',       'FPnG@{Z<bFU2!cFs6o]e0u)vZ=E4h&D|ZStNVP?iHa-EIZQ/{lXj8I)Q#W@ }}{>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WP_HOME', $WP_HOME);
define('WP_SITEURL',$WP_HOME);

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
