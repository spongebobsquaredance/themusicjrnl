<?php get_header(); ?>

<div id="wrapper">
	<section id="main">
	
	<?php
	
	$args = array(
		'post_type' => 'inspiration',
		'posts_per_page' => 1,
		
	);
	
	$the_query = new WP_Query( $args );
	
	?>
	
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
		<?php get_template_part( 'content', 'inspiration' ); ?>
	
	<?php endwhile; endif; ?>
	
	<?php
	
	$args = array(
		'post_type' => 'project',
		'posts_per_page' => 1,
		
	);
	
	$the_query = new WP_Query( $args );
	
	?>
	
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
		<?php get_template_part( 'content', 'project' ); ?>
	
	<?php endwhile; endif; ?>
	
	<?php
	
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => 1,
		
	);
	
	$the_query = new WP_Query( $args );
	
	?>
	
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
			<?php get_template_part( 'content', 'post' ); ?>
	
	<?php endwhile; endif; ?>
	
	</section>
	
	<?php
	
	$args = array(
		'post_type' => 'album',
		'posts_per_page' => 1,
		
	);
	
	$the_query = new WP_Query( $args );
	
	?>
	
	<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
			<?php get_template_part( 'content', 'inrotation' ); ?>
	
	<?php endwhile; endif; ?>
	
</div>

<?php get_footer(); ?>








