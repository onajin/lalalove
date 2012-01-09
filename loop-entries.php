<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

  <div id="video">
  <?php if ( get_post_meta($post->ID, 'youtubeurl', true) ) : ?>
  <iframe width="480" height="360" src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'youtubeurl', true) ?>" frameborder="0" allowfullscreen></iframe>
  <?php endif; ?>
  </div>

  <div id="entry-widget">
  <?php if ( get_post_meta($post->ID, 'donationwidget', true) ) : ?>
  <?php echo get_post_meta($post->ID, 'donationwidget', true) ?>
  <?php endif; ?>
  </div><!--entry-widget-->
  
  <br class="clear">
  
</article><!-- #post-<?php the_ID(); ?> -->
