<?php
/**
 * The Initial template
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AquaMonte
 * @subpackage AquqMonte_bebe
 * @since AquaMonte 0.0
 */

global $am;

get_header();
?>
<main id="container">
<?php

/**
 *
 *  hookActionAdminEnqueueScripts
$hoge = parse_ini_file('support.ini', true, INI_SCANNER_TYPED);

/**
 *
 */
$str = 'hookActionAdminEnqueueScripts';

preg_match('/Action(\w+)Enqueue/', $str, $matches);

/**
 *
 */

/**
 *
 */

/**
 *
 */

$am->slap($matches, '_is');
$am->slap(wp_get_theme()->get('stylesheet'));
$am->slap(wp_style_is('cocore'), '_EQ');
$am->slap($am, 'AM Product');
$am->consExpose();

/**
 *
 *
?>
<pre><code><?php print_r($am); ?></code></pre>
*/
?>
</main><!--//#container-->

<?php get_footer(); ?>

<?php

/**
 *
 */

/**
 *
 */

/**
 *
 */
