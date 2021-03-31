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
define('AUTH_KEY',         'KFrr37Ms+n9qo2Z8HnP1OCq8FneL0E3+KXjCEI+LOVbqvyXs7AaZGGtvmBgXsZ7FGBYzaQHGZCXDGDAzksotGA==');
define('SECURE_AUTH_KEY',  'n7HfJaESHSScd87/M4A4oGdy/LznbsdcIbKEcgLh6BcglT4XeH89cUDZe13wTGqkCuIwZV9ct8jscFhG1dKliA==');
define('LOGGED_IN_KEY',    'OdDmiMmdInVO4LwRcs5LskgI9ffzRyVBaenJRMXeSlacc5PWwCIYK0xaWElOLSdLSe/UciITDPYN7922PXrW/A==');
define('NONCE_KEY',        'cv5qX32iHhWPc+b9sv6+Ue0h16Nc4OzmBLBunejELf7GqlEwyfetN6s50jqESnB9B1LiHOdoovolCC6r3/zy8Q==');
define('AUTH_SALT',        'hWZsW3Rocv6XlU2uKHwVVrNrXwbvQyBASV3n1nN/BogcoDuNrEekN6NdodLme8A0eRX/ZOWnRyDcS57tSSXTyw==');
define('SECURE_AUTH_SALT', 'fa3p+yOEUMxyoVem47TX+6AdjHdPNbUsSaRS0Ug3fZ05auaIv/+jzqsyoq910vnNfEfdzr0uKezghowKkylaJA==');
define('LOGGED_IN_SALT',   'QnsQDNRX9BBl2pc4EsTTbnqgjJPzqfXPvyHQ1WpQwcxgOmiE5CvRyI0AgGYFthkTl1ymjhGzVBUM6+D5EA+jRQ==');
define('NONCE_SALT',       'icuqNT5MrFjTJaSktEYO3L+a0y65ocOHrtUCrtx3fuRhNPxxLWNTa+JFKYBpLJYsHGEZj0MvSOADHK7VKwxaAA==');

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
