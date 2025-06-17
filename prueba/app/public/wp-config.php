<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'pEdaGSz2Dc}vtkwsR|i(JYWsgY.z,~?C1+1m963{l[2UX4dt96nVocE+;1y`k3JD' );
define( 'SECURE_AUTH_KEY',   'bV`5&:c7T^vjVB8Nf[T4bV|PSY(N|;1b2yMyF/t1zg%8P6xxX_*f^(M*^*=K:P3H' );
define( 'LOGGED_IN_KEY',     'd[hN*%%8w@Nb]D+9CG4OCtc4J~+T7&R)uWc.*M^eU M$L0A7B8.uJ8gYxb5i_tcp' );
define( 'NONCE_KEY',         '$7;4seb`$}OS,<t*Ihu?#^(jHpq{7]:+9NWC]7VpYTi#W*eYv1zPrTJhC7B81a?f' );
define( 'AUTH_SALT',         '(i[a[z%;CoTAT0?XV(Qs?Ecy06K{wb,=e }Szi3UUPH6[c9wMLw-c~75rEyl@xO+' );
define( 'SECURE_AUTH_SALT',  '(JR_Gcbh|]f.@PQpG~PUBwu{cK6s6dF-{7zr(+l#([W,_6#C;lp1/GYb3p0)y(]`' );
define( 'LOGGED_IN_SALT',    'D+%:jh,9+:G^VhEh1}jKq7Te~Mw3@Y(w<_9m]k,%ah<XGEFqj03i(syBRug*y?Va' );
define( 'NONCE_SALT',        'i}uZ;5x[lVr:p[gXX]d&[{<-l^p.!/ BSeizZvy{3O%vCASF$|HpXzi^kl*&n2#[' );
define( 'WP_CACHE_KEY_SALT', 'R=crBZ8)xn*MXb66p4YyKtzwt`Ms@;d[3<V;B&35PRhcM[rc]nc56HRgO5pOq~D|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
