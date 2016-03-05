<?php 

/*

	Template Name: About Page

*/

get_header(); ?>

<div id="wrapper" class="singlecol">
	<section id="main" class="mult_post">
		<h2>ABOUT</h2>
		<hr>
		
<?php

	$args = array(
		'post_type' => 'about'
	);
	
	$the_query = new WP_Query( $args );
	
?>


<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<article>
		<img src="<?php bloginfo('template_directory'); ?>/img/beatles.jpg" alt="Black and white picture of The Beatles from the 1960s">
		<div class="innerArticle about">
			<p id="firstp"><?php the_field('firstp'); ?></p>
			<?php the_field('sub_paragraphs'); ?>
			<div class="mrdehaviland"> - Carrie MacDonald</div>
		</div>
	</article>

<?php endwhile; else: ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>

	</section>
</div>

<?php get_footer(); ?>