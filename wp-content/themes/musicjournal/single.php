<?php get_header(); ?>

<div id="wrapper" class="singlecol">
	<section id="main">
		<article>
			<div class="innerArticle">
				<h4>BLOG POST</h4>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				<h3><?php the_title(); ?></h3>
				
				<?php $content = get_the_content();
					  $new_content = strip_tags($content);
				?>
				
				<p id="firstp"><?php echo $new_content ?></p>

<?php endwhile; ?>
			</div>
		</article>
				<div class="nav_postset">
					<div class="prev_posts"><?php next_post_link('%link', '&laquo; Previous Post: %title'); ?></div>
					<div class="next_posts"><?php previous_post_link('%link', 'Next Post: %title &raquo;'); ?></div>
				</div>		
<?php else: ?>
	
	<p>There are no posts or pages here</p>
	
<?php endif; ?>
	</section>
</div>
	
<?php get_footer(); ?>