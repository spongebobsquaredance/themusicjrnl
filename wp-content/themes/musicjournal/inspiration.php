<?php 

/*

	Template Name: Inspiration Page

*/

get_header(); ?>

<?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=inspiration' . '&paged=' . $paged . '&posts_per_page=3');
?>

<div id="wrapper" class="singlecol">
	<section id="main" class="mult_post">
		<h2>INSPIRATIONS</h2>
		<hr>
		
<?php

	$args = array(
		'post_type' => 'inspiration',
		'paged' => $paged,
		'posts_per_page' => 3
	);
	
	$the_query = new WP_Query( $args );
	
?>


<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?php get_template_part( 'content', 'inspiration' ); ?>

<?php endwhile; ?>

<div class="nav_postset">
<div class="prev_posts"><?php previous_posts_link( '&laquo; Newer Posts', 0); ?></div>
<div class="next_posts"><?php next_posts_link('Older Posts &raquo;', 0); ?></div>
</div>
<?php $wp_query = null; $wp_query = $temp; ?>

<?php else: ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>

	</section>
</div>

<?php get_footer(); ?>