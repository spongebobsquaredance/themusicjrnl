	<article>
		<div class="innerArticle">
			<?php
				if ( is_front_page() ) {
					 echo "<h2>PROJECTS</h2>" . "<h4>Current Project</h4>";
				} 
				else {
					echo "";
				}
			 ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_field('title'); ?></a></h3>
			<h4><?php echo get_the_tag_list('Style: ',', ',''); ?></h4>
			<h4><?php the_field('inspiration'); ?></h4>
			<p><?php the_excerpt(); ?></p>
		</div>
	</article>