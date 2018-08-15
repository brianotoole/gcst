<?php
/**
 *
 * Functions.php = Launching point to get up and running
 *
 * @package     BrianOToole\GCST
 * @since       1.0.0
 * @author      @brianotoole
 * @link        https://brianzotoole.com
 * @license     GNU General Public License 2.0+
 */

namespace BrianOToole\Gcst;

// Initalize the child theme
include_once 'lib/init.php';

// Load theme files
include_once 'lib/functions/autoload.php';

// Start the Genesis framework
include_once(get_template_directory() . '/lib/init.php' );
