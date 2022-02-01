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
define('AUTH_KEY',         'HHPWagxsGjx8fiuTetXa/I4LPDsJ7yn3HzrGaRzec7/odhLv5gg3ABCvU0I0/xvfzWx6oj0e/wprwJK2juIQ5w==');
define('SECURE_AUTH_KEY',  '18izGD7NOsLWKKL5ulabqLOOJFEbZMciaSaGtOOWjhmcwl2CBBhH/RdmsXYpIQfDut2Cbhw/rih13XFv5nf5Sg==');
define('LOGGED_IN_KEY',    'uzdUBUYRNTLr11jNv1Ro+XWMQJJggtPmyOz8aLF6LZp04jbzYMaoTBLeXsp702AfnELUqvJnvwurYAoVV/8JLQ==');
define('NONCE_KEY',        'w1m35OiBazh9oj9RWpMZxor1UIgb2f1khnRqoVNm8glOgAbCRu72N2x4Q1AxK8y7vaCH8AUzqYVwnkUwjamcig==');
define('AUTH_SALT',        'W+dMRvOjh2MmMjJ/eqhfDfuYsdy377u7jw0H1YQOYpnFleMB6UX3KRa12JG8SezbW0+/wU9bgNxdQciS3L3yhA==');
define('SECURE_AUTH_SALT', 'v0yaFwPzIx3C8VeL78ZswwMkqCeANW+Okl8g/ljlelkTVmjPG4GLg79/zMfszpCIWFjTPjQSeU1sX6+pwqAXcw==');
define('LOGGED_IN_SALT',   'Sak8zoYmbEq34rgz6ckzhkXKP38BZ7pl1DDRg2Hn9W3nnXInqCxIZrguWSuTWU2DaG63Nvib0bY+nxTNjzS7KQ==');
define('NONCE_SALT',       'rzzBZVUTmVBuldjLTL585vHQYP2wYxl1FsPZ8YCBRwkWbbjjLgl+RQX/NYSEY2JsnMufHzm43Ac8oaIU+CTs/Q==');

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
