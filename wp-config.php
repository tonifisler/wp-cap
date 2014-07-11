<?php
// ===================================================
// Load database info and local development parameters
// ===================================================

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
} else {
    define( 'DB_NAME', '%%DB_NAME%%' );
    define( 'DB_USER', '%%DB_USER%%' );
    define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
    define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '_CgKhXMhgj`,r!(xy*I?!A_}hxtc=o:+Lu&g*1iF4|Eo2D5g&B~j~]4rzj#2>}YX');
define('SECURE_AUTH_KEY',  'nF>m|@1qqeImP`Qnt52peCK]1*[V3W@IVC9Cbfd[+|`lQ_`4<7+L];5?~aA56JXv');
define('LOGGED_IN_KEY',    '=|! n:y%`5++-Q]--o/3<55qQT5ZuHJrc1c=Ai)G7*C3[%$X1~vhr2-jY}55Fcc!');
define('NONCE_KEY',        '^K7sg&Z+X:EJ~_#I|<t-{y&Up%)g]Cr`;,dwknOaWGM!#nAk2qbK&GsN>_u5D4(A');
define('AUTH_SALT',        '6S0]e~zSeAVh-Y@%?I_lO5ab.!sXH},77Wq:|.v4Iyg+k-M:F6%5xe@iWu|w@dPA');
define('SECURE_AUTH_SALT', 'SIV&$Y- /eVUXs&o:|3-|V#i^V%p{6VM1dj0l2m GOgad4kc1NU76YN6iX?8&GCB');
define('LOGGED_IN_SALT',   'MP29ob05_efwaW>0ltbaa`>D.,9Usg.T>|SNr-EL~Z:#k~=ad~FXw~D-6S~^(|yd');
define('NONCE_SALT',       'Hn.{l~h]aRX}`wV_VN1Uo~)T_+;a<djmEO:eOORk6QA<S#U%XbC>UA6#t})YR?I%');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
    define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );

require_once(ABSPATH . 'wp-settings.php');