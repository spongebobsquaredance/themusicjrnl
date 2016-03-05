		<footer>
			<div class="innerfooter">
				<div class="linkbox">
					<div class="innerlinkbox">
						<h3>Projects</h3>
						<ul>
							<?php
								$args = array( 'numberposts' => '3', 'post_type' => 'project' );
								$recent_posts = wp_get_recent_posts( $args );
								foreach( $recent_posts as $recent ){
									echo '<li><a href="' . get_permalink($recent["ID"]) . '" >' .  $recent["post_title"].'</a> </li> ';
								}
							?>
						</ul>
					</div>
				</div>
				<div class="linkbox">
					<div class="innerlinkbox">
						<h3>Posts</h3>
						<ul>
							<?php
								$args = array( 'numberposts' => '3' );
								$recent_posts = wp_get_recent_posts( $args );
								foreach( $recent_posts as $recent ){
									echo '<li><a href="' . get_permalink($recent["ID"]) . '" >' .  $recent["post_title"].'</a> </li> ';
								}
							?>
						</ul>
					</div>
				</div>
				<div class="linkbox">
					<div class="innerlinkbox">
						<h3>Connect</h3>
						<ul>
							<li><a href="http://twitter.com/cmd545">Twitter</a></li>
							<li><a href="mailto:carrie@themusicjrnl.com">Email</a></li>
						</ul>
					</div>
				</div>
				<h4 class="copyright">Copyright 2016 <a href="<?php bloginfo('url');?>">The Music Journal</a></h4>
				<h4 class="devcompany">Site by: <a href="http://carriem.tech">Carrie MacDonald | Design & Development</a></h4>
			</div>
		</footer>
	</body>
	<?php wp_footer(); ?>
</html>