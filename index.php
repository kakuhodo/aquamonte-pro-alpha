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
get_header();
?>
<main id="container">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

<header class="content">
<div class="liner">
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
</div><!--//.liner-->
</header>

<section class="content">
<div class="liner">
<?php the_content('続きを読む &raquo;'); ?>
</div><!--//.liner-->
</section>

<footer class="content">
<div class="liner">

<dl class="info">
<div class="pub">
<dt>Published</dt>
<dd><time><?php the_time(get_option('date_format')) ?></time></dd>
</div><!--//.pub-->
<div class="upd">
<dt>Revised</dt>
<dd><time><?php the_modified_time(get_option('date_format')) ?></time></dd>
</div><!--//.upd-->
</dl><!--//.info-->
<?php if (current_user_can('edit_posts')) : ?>
<p class="postmetadata"><?php edit_post_link('Edit'); ?></p>
<?php endif; ?>

</div><!--//.liner-->
</footer>

<?php if (current_user_can('edit_posts')) : ?>
<p class="postmetadata"><?php edit_post_link('Edit'); ?></p>
<?php endif; ?>
</article>

<?php endwhile; ?>
<?php /* pager */ ?>
<?php else : ?>

<article class="noposts">
<div class="liner">
<h2>No Content</h2>
<p>Sorry, no content yet.</p>
<?php get_search_form(); ?>
</div><!--//.liner-->
</article>

<?php endif; ?>
</main><!--//#container-->

<?php get_footer(); ?>
