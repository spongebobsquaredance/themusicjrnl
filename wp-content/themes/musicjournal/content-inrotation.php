<aside>
	<article class="inrotation">
		<div class="innerArticle">
			<h2>IN ROTATION</h2>
			<div class="album">

<?php

$args = array(
	'post_type' => 'album'
);

$the_query = new WP_Query( $args );

?>


<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<?php static $count = 0;
if ($count == "3") { break; }
else { ?>
				<div>
					<img src="<?php the_field('album_cover'); ?>" alt="<?php the_field('album_alt_txt'); ?>">
					<h3><?php the_field('album_title'); ?></h3>
					<h4><?php the_field('album_artist(s)'); ?></h4>
				</div>
<?php $count++; } ?>
<?php endwhile; else : ?>

<p>There are no posts here</p>

<?php endif; ?>
			</div>
		</div>
	</article>
</aside>