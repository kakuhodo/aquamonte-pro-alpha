<?php
/**
 *  @file   Functions
 *  @author JeanPierre
 */

/**
 * ============================
 *  CHECK THE REQUIREMENTS >>>
 * ============================
 */

/**
 *
 */
if (!class_exists('Pearlpuppy\CoCore\Awp\Abs_Theme')) {
    add_action('admin_notices', 'amRequirements');
}

/**
 *
 */
function amRequirements()
{
    echo '<div class="notice notice-error"><p>';
    _e('This theme requires <i>CoCore AWP</i>.');
    echo '</code></p></div>';
}

/**
 * ============================
 *  <<< END CHECK
 * ============================
 */

/**
 *
 */
require_once('Product.php');
$am = new Pearlpuppy\AquaMonte\Product(__FILE__);
$am->hook();

/**
 *
 */

/**
 *
 */

/**
 *
 */
function aquamonte_nav_menu($slug) {
    $args = array(
        'menu' => $slug,
        'container' => 'nav',
        'container_id' => $slug,
    );
    wp_nav_menu($args);
}

/**
 * -----------------------------
 *
 * -----------------------------
 */

/**
 *
 */

//[EOF]*/
