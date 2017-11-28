<?php
/**
 * Template Name: again */
?>

<?php
$paged = (int) get_query_var('paged');
$args = array(
 'posts_per_page' => 3,
 'paged' => $paged,
 'orderby' => 'post_date',
 'order' => 'DESC',
 'post_type' => 'post',
 'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
 while ( $the_query->have_posts() ) : $the_query->the_post();
?>
 <div class="post">
 <h1 class="title"><?php the_title(); ?></h1>
 <?php the_content(); ?>
 </div>
<?php endwhile; endif; ?>
