<?php
/**
 *  The header
 *
 *  @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *  @package AquaMonte
 *  @subpackage  Aquamonte_Pro_Alpha
 *  @since   0.9.1
 */

get_template_part('templates/head');

$hh = 'div';
if (is_front_page()) {
	$hh = 'h1';
}

?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="tiara">
<div class="liner">
<div id="brand">
<<?php echo $hh; ?> id="site-title"><a href="/"><?php bloginfo('name'); ?></a></<?php echo $hh; ?>><!--//#site-title-->
<a class="triumph" href="/"><?php #aquamonte_logo(); ?></a><!--//.triumph-->
</div><!--//#brand-->
<?php aqmtNavMenu('gnb'); ?>
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