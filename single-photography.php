<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="u-container u-container--lg u-section">
		<h1><?php the_title(); ?></h1>
	</div>
	<?php
		$image_id = get_post_thumbnail_id();
		$image = wp_get_attachment_image_src( $image_id, 'full' );
		$width = $image[1];
		$height = $image[2];

		$unsplash = get_field('unsplash_link');
	?>
	<?php if($height > $width) : ?>
		<div class="g-two-up">
			<div>
				<?php if(has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('photography'); ?>
				<?php endif; ?>
			</div>
			<div class="u-section">
				<?php the_content(); ?>
			</div>
			<div class="u-section">
				<ul>
					<?php if($unsplash) : ?>
						<li><a href="<?php echo $unsplash; ?>">Download full resolution photo on Unsplash</a></li>
					<?php else : ?>
						<li><a href="<?php the_post_thumbnail_url('full'); ?>">Download full resolution photo</a></li>
					<?php endif; ?>
					<li>Released under <a href="https://creativecommons.org/publicdomain/zero/1.0/">Creative Commons Zero license</a></li>
				</ul>
			</div>
		</div>
	<?php else : ?>
		<?php if(has_post_thumbnail()) : ?>
			<div class="u-section">
				<?php the_post_thumbnail('photography'); ?>
			</div>
		<?php endif; ?>
		<div class="u-container u-section">
			<?php the_content(); ?>
		</div>
		<div class="u-container u-section">
			<ul>
				<?php if($unsplash) : ?>
					<li><a href="<?php echo $unsplash; ?>">Download full resolution photo on Unsplash</a></li>
				<?php else : ?>
					<li><a href="<?php the_post_thumbnail_url('full'); ?>">Download full resolution photo</a></li>
				<?php endif; ?>
				<li>Released under <a href="https://creativecommons.org/publicdomain/zero/1.0/">Creative Commons Zero license</a></li>
			</ul>
		</div>
	<?php endif; ?>

	<?php
		$args = array(
			'post_type' => 'photography',
			'posts_per_page' => 3,
			'orderby' => 'rand',
			'post__not_in' => array(get_the_ID())
		);
		$related = new WP_Query( $args );

		if ( $related->have_posts() ) :
	?>
	    <div class="u-container u-section">
	        <h2>Other photos</h2>
	    </div>
	    <div class="g-three-up">
	        <?php
				while ( $related->have_posts() ) : $related->the_post();
			?>
	            <div>
	                <a href="<?php the_permalink(); ?>">
	                    <?php if ( has_post_thumbnail() ) : ?>
	                            <img src="<?php the_post_thumbnail_url('photography-square'); ?>" alt="<?php the_title(); ?>" />
	                    <?php endif; ?>
	                </a>
	            </div>
	        <?php
				endwhile;
				wp_reset_postdata();
			?>
	    </div>
	<?php endif; ?>



<?php endwhile; else : ?>
	<div class="u-container">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
