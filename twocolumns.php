<?php
/**
 * Template Name: Two Columns
 */

get_header(); ?>

<div class="grid_11 suffix_1">
<?php get_template_part( 'content', '2colpage' ); ?>
</div>

<?php get_sidebar('pages'); ?>

<?php get_footer(); ?>