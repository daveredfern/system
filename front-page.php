<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="u-container u-container--lg u-section">
		<?php the_content(); ?>
	</div>
<?php endwhile; else : ?>
	<div class="u-container u-section">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>
<div class="u-container u-container--lg u-section">
	<hr />
</div>
<div class="u-container u-container--lg u-section">
	<h2>Recent articles</h2>
	<ul class="u-list-space">
	<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 5
		);
		$latestarticles = new WP_Query( $args );

		while( $latestarticles->have_posts() ) {
			$latestarticles->the_post();
		?>
			<li><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong> &mdash; <?php the_time('M S'); ?></li>
		<?php
		}
		wp_reset_query();
	?>
	</ul>
</div>

<?php get_footer(); ?>
