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
<?php if (   ! is_active_sidebar( 'sidebar-8' )	) : ?>

    <p>Duis non est non mauris faucibus sollicitudin. Phasellus elementum auctor risus vel egestas. Morbi eleifend, est ut posuere egestas, purus urna pretium sem, eget aliquam ipsum odio vel felis.</p>

    <p>Mauris ultricies aliquam pellentesque. In a lectus nisl. Donec nisi tellus, dignissim vitae sagittis in, ornare a libero. Praesent tristique elementum scelerisque.</p>

    <p>Nam condimentum elit ut magna laoreet sed dictum arcu dignissim.</p>


	<?php else : ?>
		<?php dynamic_sidebar( 'sidebar-8' ); ?>
	<?php endif; ?>
</div><!--slideshow-->