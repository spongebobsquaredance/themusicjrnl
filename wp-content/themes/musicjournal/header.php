<!DOCTYPE html>
<html>
	<head>
	
		<title>
			<?php
				
				wp_title( '-', true, 'right' );
				
				bloginfo( 'name' );
			
			?>
		</title>
	
	</head>
	<body>
		<header>
			<div class="innerHeader">
				<h1><a href="<?php bloginfo('url');?>"><span>the</span> MUSIC JOURNAL</a></h1>
				<div class="social_links">
					<h3><a class="twitter" href="http://twitter.com/cmd545">Twitter</a></h3>
					<h3><a class="youtube" href="http://www.youtube.com">YouTube</a></h3>
					<h3><a class="email" href="http://www.google.com">Email</a></h3>
				</div>
				<hr>
				<?php 
					$args = array(
						'menu' => 'main-menu'
					);
			
					wp_nav_menu( $args );
		
				?>
			</div>
			<?php wp_head(); ?>
		</header>