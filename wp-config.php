<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sriumiya_wp276');

/** MySQL database username */
define('DB_USER', 'sriumiya_wp276');

/** MySQL database password */
define('DB_PASSWORD', '-PN74t71@S');

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
define('AUTH_KEY',         '3f0ktzftpukzym2zrdebgzicmxqgfevbvzs7abcw4fhj49cuxowxaqik21xme1ni');
define('SECURE_AUTH_KEY',  'gogwhntxptukjbyglrhxzpry8nslq2bixosubabrxh78ornxyq3qrubjfu1bqmee');
define('LOGGED_IN_KEY',    'urebydmkk5o8yhwdnrehf4oxg9g7mrp1fntteozpcuha8wthcf2a7iy2ftkwhnj9');
define('NONCE_KEY',        'a39ua9qvklcdxhn2tw9fsldkpuhrnviuumketfunhkftkha959vosppdrgqhd6t9');
define('AUTH_SALT',        '8yqoa9tugaez2dsv3lsoi53efkynnh8wgvg2yqb9b5nwzmxkfar9emf7l6h2obsc');
define('SECURE_AUTH_SALT', 'ro0lmtckgwbpvkpcirskubv7vrhlgckjhodspbhw8ip5ma50cnyxvw98ktfmmbo8');
define('LOGGED_IN_SALT',   'granod2i7cphg4rvvsh67lnday0p3gzpgjoqajznnez7zfem4yjwydutl7syqpaf');
define('NONCE_SALT',       'pgsjq8wmv1iadvvfixvt6bnripd3akmjg8c3frhkkugsoewfvvar6rg48ud2owv3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
