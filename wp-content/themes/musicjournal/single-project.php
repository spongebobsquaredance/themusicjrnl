<?php get_header(); ?>

<div id="wrapper" class="singlecol">
	<section id="main">
		<article>
			<div class="innerArticle">
				<h4>PROJECT</h4>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<h3><?php the_field('title'); ?></h3>
	<h4><?php echo get_the_tag_list('Style: ',', ',''); ?></h4>
	<h4><?php the_field('inspiration'); ?></h4>
	<p id="firstp"><?php the_field('project_description'); ?></p>
	
<?php endwhile; ?>
			</div>
		</article>
<div class="nav_postset">
<div class="prev_posts"><?php next_post_link('%link', '&laquo; Previous Project: %title'); ?></div>
<div class="next_posts"><?php previous_post_link('%link', 'Next Project: %title &raquo;'); ?></div>
</div>

<?php else : ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>
	</section>
</div>
	
<?php get_footer(); ?>