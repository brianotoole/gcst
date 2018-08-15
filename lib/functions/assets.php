<?php
/**
 * Assets.php = style and script enqueues
 *
 * @package     BrianOToole\GCST
 * @since       1.0.0
 * @author      @brianotoole
 * @link        https://brianzotoole.com
 * @license     GNU General Public License 2.0+
 */

namespace BrianOToole\Gcst;

/**
 * Load default or base styles early
 *
 * @since 1.0.0
 *
 * @return  null
 */
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_base_styles', 4 );
function enqueue_base_styles() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-global', CHILD_ASSET_DIR_URI . 'css/global.css', array(), CHILD_THEME_VERSION );

}

/**
 * Load additional scripts and styles.
 *
 * @since 1.0.0
 *
 * @author  Lauren Gray <lauren@oncecoupled.com>
 *
 * @return  null
 */
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
function enqueue_assets() {

	// [ Styles ]
	// Theme
    wp_enqueue_style( CHILD_TEXT_DOMAIN . '-structure', CHILD_ASSET_DIR_URI . 'css/theme.css', array(), CHILD_THEME_VERSION );
    

	// [ Scripts ]
	// Fonts
	//wp_enqueue_script( CHILD_TEXT_DOMAIN . '-async-fonts-init', CHILD_ASSET_DIR_URI . 'js/fonts.min.js', array(), CHILD_THEME_VERSION, true );

	// Font Awesome
	//wp_enqueue_script( CHILD_TEXT_DOMAIN . '-font-awesome-all', CHILD_ASSET_DIR_URI . 'js/vendor/fa-all.min.js', array(), CHILD_THEME_VERSION, true );
	//wp_enqueue_script( CHILD_TEXT_DOMAIN . '-font-awesome-base', CHILD_ASSET_DIR_URI . 'js/vendor/fontawesome.min.js', array( CHILD_TEXT_DOMAIN . '-font-awesome-all' ), CHILD_THEME_VERSION, true );

}