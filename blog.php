<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

<div class="grid_11 suffix_1">
<span class="pagetitle">Blog</span>
<?php get_template_part( 'content', 'blog' ); ?>
</div>

<?php get_sidebar('pages'); ?>

<?php get_footer(); ?>