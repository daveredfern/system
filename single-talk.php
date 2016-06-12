<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="u-container u-section">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
	<div class="u-container u-section">
		<p class="micro">Posted on <?php echo get_the_time('jS F Y'); ?></p>
	</div>
	<div class="u-container u-section">
		<hr />
	</div>
	<div class="g-two-up">
		<div>
			<h2>Other talks</h2>
			<ul class="u-list-space">
		    <?php
			$thisPostID = get_the_ID();
	            $args=array(
					'post_type'=>'talk'
	                //'posts_per_page'=>-1 // Number of related posts to display.
	            );
		        $my_query = new wp_query( $args );

		        while( $my_query->have_posts() ) {
		            $my_query->the_post();
					if($thisPostID != get_the_ID()) :
		        ?>
		        	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		        <?php endif; }
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
				<li><a href="https://uk.linkedin.com/in/daveredfern">LinkedIn</a></li>
			</ul>
		</div>
	</div>
<?php endwhile; else : ?>
	<div class="u-container">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
