<?php
/**
 * The Front Page Slideshow Widget
 *
 * @package WordPress
 * @subpackage LaLaLove
 * @since LaLaLove 1.0
 */
?>
<div id="slideshow">
<?php if (   ! is_active_sidebar( 'sidebar-7' )	) : ?>
  <?php query_posts('cat=3&showposts=1'); ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>

	<?php else : ?>
		<?php dynamic_sidebar( 'sidebar-7' ); ?>
	<?php endif; ?>
</div><!--slideshow-->