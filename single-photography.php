<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php
		$image_id = get_post_thumbnail_id();
		$image = wp_get_attachment_image_src( $image_id, 'full' );
		$width = $image[1];
		$unsplash = get_field('unsplash_link');
	?>
	<div class="u-section">
		<div class="u-container u-container--lg">
			<h1><?php the_title(); ?></h1>
		</div>
		<?php if(has_post_thumbnail()) : ?>
			<img class="u-full"
				 src="<?php the_post_thumbnail_url('photography-xs'); ?>"
				 srcset="<?php the_post_thumbnail_url('photography-xl'); ?> 1500w,
						 <?php the_post_thumbnail_url('photography-lg'); ?> 1200w,
						 <?php the_post_thumbnail_url('photography-md'); ?> 800w,
						 <?php the_post_thumbnail_url('photography-sm'); ?> 600w,
						 <?php the_post_thumbnail_url('photography-xs'); ?> 400w"
				 sizes="86vw"
				 alt="<?php the_title(); ?>" />
		<?php endif; ?>
	</div>
	
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

	<?php
		$args = array(
			'post_type' => 'photography',
			'posts_per_page' => -1,
			'orderby' => 'rand',
			'post__not_in' => array(get_the_ID())
		);
		$related = new WP_Query( $args );

		if ( $related->have_posts() ) :
	?>
	    <div class="u-section">
	        <h2>Choose another photo</h2>
	        <p class="h3">
				<?php
					while ( $related->have_posts() ) : $related->the_post();
				?>
	        		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>&nbsp;&nbsp;&nbsp;
	        	<?php
					endwhile;
					wp_reset_postdata();
				?>
			</p>
	    </div>
	<?php endif; ?>



<?php endwhile; else : ?>
	<div class="u-container">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
