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
define( 'DB_NAME', 'testv1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Pk&f`-/yy+fEpNsFEl)i9O5)8Sds|>z$l[naB=~+GwSHBs_Lt:B7Y sCfk/e8yYE' );
define( 'SECURE_AUTH_KEY',  'DFM}7F6G!434:rBZPn}k.:.k93,&cm;c*Lcv+&,ZNX4myB$`I[87o}.)Bz,Pca!+' );
define( 'LOGGED_IN_KEY',    '7+dT/$WKD?,xnKG/voP6]?p?%0PB$JY:`thkdC_R+XTN+v-tO@?Rh)[k3u(Tj=Ji' );
define( 'NONCE_KEY',        'y6eh;z$f/>dW$=wC[fsf}Y;3<6h&QByO;_r3k6_#B}<*YU=(g7,w[guSq+^0lPlB' );
define( 'AUTH_SALT',        'h]GQ-KaZ$S2~)_0xJ;pnMJoOx. uFZ:bJ**D{oq9g[01DcB$z&SC!&QY[gEBe0[[' );
define( 'SECURE_AUTH_SALT', 'K&H(9bYgJA=u %vsg*qUBx+puF,x{Kr+z5~J;} #!/<?*$d^2K9@Vu;^FuHFhzc;' );
define( 'LOGGED_IN_SALT',   '*gP_)>Z?9?xTl6mVy#Z~g]L&6PVm0X)~C?@{3::,34i2)Y|e?lLr^;cY{^Kd5dwN' );
define( 'NONCE_SALT',       'MS3P5OGNw550|3>63$p{i-1LR!=Xe@DNSlLrg5b]esUAKT[,uZnPL>P?nC+S!7#%' );

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
