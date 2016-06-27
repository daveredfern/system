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
<div class="g-two-up g-limit">
	<div>
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
	        	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	        <?php
	        }
	        wp_reset_query();
	    ?>
		</ul>
	</div>
	<div>
		<h2>Contact me</h2>
		<p>For a quick response I recommend tweeting me. For a more indepth conversation feel free to send an email.</p>
		<ul>
			<li><a href="https://www.twitter.com/daveredfern">@daveredfern</a></li>
			<li><a href="mailto:dave@daveredfern.com">dave@daveredfern.com</a></li>
			<li><a href="https://github.com/daveredfern">Github</a></li>
			<li><a href="https://uk.linkedin.com/in/daveredfern">LinkedIn</a></li>
		</ul>
	</div>
</div>

<?php get_footer(); ?>
