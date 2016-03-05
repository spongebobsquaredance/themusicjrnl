<article>
	<div class="outervideowrapper">
		<div class="innervideowrapper">
			<iframe id="ytplayer" type="text/html" width="375" height="350" src="https://www.youtube.com/embed/<?php the_field('youtube_video'); ?>?color=white&theme=light" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="outertxtwrapper">
		<div class="innertxtwrapper">
			<?php
			if ( is_front_page() ) {
				 echo "<h2>INSPIRATIONS</h2>" . "<h4>Track of the Week</h4>";
			} 
			else {
				echo "";
			}
			 ?>
			<h3><?php the_field('content_title'); ?></h3>
			<h4><?php the_field('content_author'); ?></h4>
			<p><?php the_field('content_summary'); ?></p>
		</div>
	</div>
</article>