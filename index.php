<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="features">
  <div id="slider">
    <?php get_sidebar( 'slideshow' ); ?>
  </div>
  <div id="actionitems">
<div id="action-wrapper">
  <img src="<?php echo get_template_directory_uri(); ?>/images/findaschool.png">
  <?php get_search_form(); ?>
  <a href="<?php echo site_url(); ?>/entries"><img src="<?php echo get_template_directory_uri(); ?>/images/viewall.png"></a>
</div><!--action-wrapper-->
  </div>
  <br class="clear">
</div>
  
<div class="grid_16">
  <div class="grid_8 alpha">
    <?php get_sidebar( 'about' ); ?>
  </div>
  <div class="grid_8 omega">				
    <?php get_sidebar( 'leaderboard' ); ?>
  </div>
</div>

<?php get_footer(); ?>