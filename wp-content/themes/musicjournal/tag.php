<?php get_header(); ?>

<div id="wrapper" class="singlecol">
	<section id="main" class="mult_post">
		<h2>Tagged: <?php single_tag_title(); ?></h2>
		<hr>
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article>
		<div class="innerArticle">
			<h3><a href="<?php the_permalink(); ?>"><?php the_field('title'); ?></a></h3>
			<h4><?php echo get_the_tag_list('Style: ',', ',''); ?></h4>
			<h4><?php the_field('inspiration'); ?></h4>
			<p><?php the_excerpt(); ?></p>
		</div>
	</article>
	
<?php endwhile; else: ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>
	</section>
</div>

<?php get_footer(); ?>