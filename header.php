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

?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="tiara">
<div class="liner">

<?php get_template_part('templates/brand'); ?>

<?php amNavMenu('gnb'); ?>
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
 */

/**
 *
 */

/**
 *
 */

//[EOF]*/