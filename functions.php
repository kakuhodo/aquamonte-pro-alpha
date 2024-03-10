<?php
/**
 *  @file   Functions
 *  @author JeanPierre
 */

/**
 * -----------------------------
 *  Constants
 * -----------------------------
 */

/**
 *
 */
define('PROD_TXD', 'aquamonte-pro-alpha');

/**
 * ============================
 *  CHECK THE REQUIREMENTS >>>
 * ============================
 */

/**
 *
 */
if (!class_exists('Pearlpuppy\CoCore\Awp\Abs_Theme')) {
    add_action('admin_notices', 'aqmtRequirements');
} else {

    /**
     *
     */
    require_once('Product.php');
    $aquamonte = new Pearlpuppy\AquaMonte\Product(__FILE__);
    $aquamonte->hook();

}

/**
 *
 */
function aqmtRequirements()
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

/**
 *
 */

/**
 *  @since ver. 0.9.1 (edit. Quartz)
 */
function aqmtNavMenu($slug) {
    wp_nav_menu(['menu' => $slug]);
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
