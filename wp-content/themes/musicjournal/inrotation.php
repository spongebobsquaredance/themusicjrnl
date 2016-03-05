<?php 

/*

	Template Name: In Rotation Page

*/

get_header(); ?>

	<aside>
		<article class="inrotation">
			<div class="innerArticle">
				<h2>IN ROTATION</h2>
				<div class="album">
					<div>

<?php

	$args = array(
		'post_type' => 'album'
	);
	
	$the_query = new WP_Query( $args );
	
?>


<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<img src="<?php the_field('album_cover'); ?>" alt="<?php the_field('album_alt_txt'); ?>">
						<h3><?php the_field('album_title'); ?></h3>
						<h4><?php the_field('album_artist(s)'); ?></h4>
	
<?php endwhile; ?>



<?php else : ?>
	
	<p>There are no posts here</p>
	
<?php endif; ?>
</div>
				</div>
			</div>
		</article>
	</aside>

<?php get_footer(); ?>







