<?php
/**
 * Init.php
 *
 * @package     BrianOToole\GCST
 * @since       1.0.0
 * @author      @brianotoole
 * @link        https://brianzotoole.com
 * @license     GNU General Public License 2.0+
 */

namespace BrianOToole\Gcst;


/**
 * Initialize theme's constants
 * 
 * @since 1.0.0
 * 
 * @return void
 */

function init_constants() {

    $child_theme = wp_get_theme();
    
    // parent theme constants
    define( 'SITE_NAME', get_bloginfo( 'name' ) );

    // child theme constants
    define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
    define( 'CHILD_THEME_URL', $child_theme->get( 'ThemeURI' ) );
	define( 'CHILD_TEXT_DOMAIN', $child_theme->get( 'TextDomain' ) );
    define( 'CHILD_THEME_VERSION', filemtime( CHILD_THEME_DIR . 'style.css' ) );
    
    // directory constants
	define( 'CHILD_THEME_DIR', trailingslashit ( get_stylesheet_directory() ) );
	define( 'CHILD_THEME_DIR_URI', trailingslashit ( get_stylesheet_directory_uri() ) );
    define( 'CHILD_LIB_DIR', CHILD_THEME_DIR . 'lib/' );
    define( 'CHILD_CONFIG_DIR', CHILD_THEME_DIR . 'config/' );
    define( 'CHILD_ASSET_DIR_URI', CHILD_THEME_DIR_URI . 'assets/' );

}

init_constants();
