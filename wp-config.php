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
define( 'DB_NAME', 'cv' );

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
define( 'AUTH_KEY',         'yrZ/.l+(UvO7 .PvuzMGK]ClVk7Ovl00)$B:{~#YU_;!7T {`?7CXz)yQJ_:$A4-' );
define( 'SECURE_AUTH_KEY',  'C%wbLmIkv]&`zz(&kyk1zLbFX4%#B:B_abxY)TvX{_0z^D+KIf bKIjX{G!JVutt' );
define( 'LOGGED_IN_KEY',    '52:XasZ/cC/()qL@;BWC.&<%L%4NdHE:uT.mHwpKUzW51<DE*{DMoo1St,/Y18F5' );
define( 'NONCE_KEY',        '^**)<x&<CdMTEl@qwI#g)FOY)CoX?8JJ=U h`b@[!?{e+LxqEz!if4{-GVXObA-a' );
define( 'AUTH_SALT',        'L_Uh_q^PfJp}DILU%<!q?k{Knt,scQR,ME~S/cYI/@ty#8miwf/3vproMp.6ULmu' );
define( 'SECURE_AUTH_SALT', '=wGqoI_dR$[,eW<}j4I6Hr$HT os1F6mM5XDSNDTm6n*RgR]Cog B7ucrN)+-Ii8' );
define( 'LOGGED_IN_SALT',   'T~DG!4}&vaa{$*`q|.@)]K&c/$Q&(j{~OxZIz]Ek0s??j?N@9iU{T)qR fmd_]Ap' );
define( 'NONCE_SALT',       'Y.h~ivGW/LTf+~7|xk:m?VM&}vEmbkccNAE[g85fAw;c4N1zmVZ48?D*)HL0d52F' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
