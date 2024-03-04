<?php
/**
 * The header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AquaMonte
 * @subpackage AquqMonte_bebe
 * @since AquaMonte 0.0
 */

$hh = 'div';
if (is_front_page()) {
	$hh = 'h1';
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="tiara">
<div class="liner">
<div id="brand">
<<?php echo $hh; ?> id="site-title"><a href="/"><?php bloginfo('name'); ?></a></<?php echo $hh; ?>><!--//#site-title-->
<a class="triumph" href="/"><?php #aquamonte_logo(); ?></a><!--//.triumph-->
</div><!--//#brand-->
<?php aquamonte_nav_menu('gnb'); ?>
</div><!--//.liner-->
</header><!--//#crown-->

<?php if (get_custom_header_markup() && is_front_page()) : ?>
<div id="keyvis">
<?php the_custom_header_markup(); ?>
</div><!--//#keyvis-->
<?php endif; ?>

<?php
/**
 *
 *
?>
<pre style="background:#eee">Deb: 
<?php print_r($GLOBALS['wp_styles']->registered); ?>
</pre>

//[EOF]*/