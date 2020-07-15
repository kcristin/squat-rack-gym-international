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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '8C6vhrflnMumf01eqKaNIKTQx5hP8rFbI8PQocXEZV6u6f6MZV9rlCsHv1Dea7I7ZhO3cYH/v0DL/Ui6GaF0+w==');
define('SECURE_AUTH_KEY',  'hBc2sMNXSwCqrJ5N3nP7URjotgFInUEEAjuvCK0HD9rsFpVQvz0HGU+CAgK1fWpbAhwKS08HwFo3BK3AKy7s7Q==');
define('LOGGED_IN_KEY',    'vcsYApdzWv1UucDsFlTwbdUmcoFgs0YWeY0rXaCMTpn7CydC6vBJXtlM0ztuGVJdMDpEnnWg6YwkVFtbeYotlw==');
define('NONCE_KEY',        '0TdQmuE8OMLvWFR/xs0UQbhKfzi1eVUGHcLF6ysvVGbb5aKalrodgwvBkLRqjb11jo63xoO65Qx+DesZ3jQVyg==');
define('AUTH_SALT',        'Sa4aYbcJOjB0YZjCOCDEz/OR0KDAcuucfUkmxGe6SOsTY+LjLzHAfGjFYIAN9vu5sJBv+cmh046vjq/l185gbg==');
define('SECURE_AUTH_SALT', '030vDHM0CWbLZtRnXzUG94i31drC5PNNlpxgO4F9ocVVJLUhWAPyCbg9i3vrRCkd0HnplSYI26CUUnNqUgxodA==');
define('LOGGED_IN_SALT',   'q8DS5aDjvfwIaBBd3+H/7crn9ZEnQx5WhDnjd3lmKRzbcPs7Tefk9iJifyZogels1E2Wlail8JFD8C5ayBqJNA==');
define('NONCE_SALT',       'Y+/H7eO4qstHJ4cViF6KhK0K1ZheS2M0bCgF25h04h+SKLGrhECs4jINHHAVL8aJGg0o5ZpJ+/5F35XaUxtgDw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
