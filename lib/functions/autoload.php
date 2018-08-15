<?php
/**
 * Autoload.php
 *
 * @package     BrianOToole\GCST
 * @since       1.0.0
 * @author      @brianotoole
 * @link        https://brianzotoole.com
 * @license     GNU General Public License 2.0+
 */

namespace BrianOToole\Gcst;

/**
 * Load non-admin files.
 *
 * @since 1.0.0
 */
function load_nonadmin_files() {

	$files = array(
		'setup.php',
		'functions/assets.php',
		'functions/formatting.php',
		'functions/markup.php',
        'functions/settings.php',
        'structure/header.php',
        'structure/footer.php',
        // and so on...
	);

	load_specified_files( $files );

}

/**
 * Load specified files.
 *
 * @since 1.0.0
 */
function load_specified_files( array $files ) {

	foreach( $files as $name ) {
		include_once( CHILD_LIB_DIR . $name );
	}

}

// call non admin
load_nonadmin_files();