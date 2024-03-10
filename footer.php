<?php
/**
 * The Footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AquaMonte
 * @subpackage AquqMonte_bebe
 * @since AquaMonte 0.0
 */

?>

<aside id="decker">
<div class="liner">
<h2 id="boiler-title"><a href="/"><span><?php bloginfo('name'); ?></span></a></h2>
<?php aqmtNavMenu('boiler'); ?>
</div><!--//.liner-->
</aside><!--//#decker-->

<footer id="booty">
<div id="credit">
<div class="liner">
<p>&copy; <?php bloginfo('name'); ?></p>
</div><!--//.liner-->
</div><!--//#credit-->
</footer><!--//#booty-->

<?php 
wp_footer();

get_template_part('templates/foot');
