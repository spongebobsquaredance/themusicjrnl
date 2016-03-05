<article>
	<div class="innerArticle">
		<?php
			if ( is_front_page() ) {
				 echo "<h2>BLOG</h2>" . "<h4>Featured Post</h4>";
			} 
			else {
				echo "";
			}
		 ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt(); ?></p>
	</div>
</article>
