<?php
/**
 * Template Name: Entry Listing
 */

get_header(); ?>


<div class="twocol" id="entry">
<div class="grid_11 suffix_1">
<h1 class="pagetitle">Schools<h1>

<?php query_posts('post_type=entries&showposts=10');?>

<?php while (have_posts()) : the_post(); ?><article>
  <h1 class="entry-listing-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
  <?php the_excerpt(); ?>  
</article><?php endwhile; ?>
    
</div>

<div class="grid_4">
<h2 class="actiontitle">Find A School</h2>
</div>
</div><!--twocol-->

<?php get_footer(); ?>