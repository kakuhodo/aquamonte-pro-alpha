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
    add_action('admin_notices', 'amRequirements');
} else {

    /**
     *
     */
    require_once('Product.php');
    $aquamonte = new Pearlpuppy\AquaMonte\Product(__FILE__);
    $aquamonte->hook();

}

/**
 * ============================
 *  <<< END CHECK
 * ============================
 */

/**
 *
 */
function amRequirements()
{
    echo '<div class="notice notice-error"><p>';
    printf(__('This theme requires %s.', PROD_TXD), '<i>CoCore AWP</i>');
    echo '</p></div>';
}

/**
 *  @since ver. 0.9.1 (edit. Quartz)
 */
function amNavMenu($slug) {
    wp_nav_menu(['menu' => $slug]);
}

/**
 *
 */

/**
 *
 */

/**
 * -----------------------------
 *
 * -----------------------------
 */

/**
 *
 */

//[EOF]*/
