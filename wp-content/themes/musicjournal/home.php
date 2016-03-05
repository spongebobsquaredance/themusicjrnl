<?php get_header(); ?>

<div id="wrapper" class="singlecol">
	<section id="main" class="mult_post">
		<h2>BLOG</h2>
		<hr>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article>
			<div class="innerArticle">

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>

			</div>
		</article>

<?php endwhile; ?>

<div class="nav_postset">
<div class="prev_posts"><?php previous_posts_link( '&laquo; Newer Posts', 0); ?></div>
<div class="next_posts"><?php next_posts_link('Older Posts &raquo;', 0); ?></div>
</div>

<?php else: ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>
	</section>
</div>
<?php get_footer(); ?>