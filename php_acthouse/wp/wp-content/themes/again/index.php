<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package again
 */

get_header(); ?>
 <div id="wrapper">
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
<?php if ( have_posts() ) : ?>
 <?php if ( is_home() && ! is_front_page() ) : ?>
<header>
<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
</header>
<?php endif; ?>
<?php while ( have_posts() ) :  ?>
 <?php the_post(); ?>

<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

 <?php the_post_thumbnail('medium'); ?>
 <div class="fb-like" data-href="http://192.168.33.10/php/wp/aboutme" data-width="200" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

<?php endwhile; ?>



<?php the_posts_navigation(); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
 </div>
<?php
get_sidebar();
get_footer();
