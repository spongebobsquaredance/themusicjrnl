<?php 

/*

	Template Name: Project Page

*/

get_header(); ?>

<?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=project' . '&paged=' . $paged . '&posts_per_page=3');
?>

<div id="wrapper" class="singlecol">
	<section id="main" class="mult_post">
		<h2>PROJECTS</h2>
		<hr>
		
<?php

	$args = array(
		'post_type' => 'project',
		'paged' => $paged,
		'posts_per_page' => 3
	);
	
	$the_query = new WP_Query( $args );
	
?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<article>
		<div class="innerArticle">
			<h3><a href="<?php the_permalink(); ?>"><?php the_field('title'); ?></a></h3>
			<h4><?php echo get_the_tag_list('Style: ',', ',''); ?></h4>
			<h4><?php the_field('inspiration'); ?></h4>
			<p><?php the_excerpt(); ?></p>
		</div>
	</article>
	
<?php endwhile; ?>

<div class="nav_postset">
<div class="prev_posts"><?php previous_posts_link( '&laquo; Newer Posts', 0); ?></div>
<div class="next_posts"><?php next_posts_link('Older Posts &raquo;', 0); ?></div>
</div>
<?php $wp_query = null; $wp_query = $temp; ?>

<?php else : ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>
	</section>
</div>

<?php get_footer(); ?>