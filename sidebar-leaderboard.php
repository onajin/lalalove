<?php
/**
 * The Leaderboard widget areas.
 *
 * @package WordPress
 * @subpackage LaLaLove
 * @since LaLaLove 1.0
 */
?>

<?php if (   ! is_active_sidebar( 'sidebar-6' )	) : ?>

<?php endif; ?>

<div id="leaderboard">
	<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-6' ); ?>
	<?php endif; ?>
</div><!-- #supplementary -->