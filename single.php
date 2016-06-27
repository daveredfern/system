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
	<div class="g-two-up g-limit">
		<div>
			<h2>Related articles</h2>
			<ul class="u-list-space">
		    <?php
	            $$orig_post = $post;
		        global $post;
		        $tags = wp_get_post_tags($post->ID);

		        if ($tags) {
		            $tag_ids = array();
		        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		            $args=array(
		                'tag__in' => $tag_ids,
		                'post__not_in' => array($post->ID),
		                'posts_per_page'=>5, // Number of related posts to display.
		                'caller_get_posts'=>1,
						'orderby' => 'rand'
		            );

		        $my_query = new wp_query( $args );

		        while( $my_query->have_posts() ) {
		            $my_query->the_post();
		        ?>
		        	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		        <?php }
		        }
		        $post = $orig_post;
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
<?php endwhile; else : ?>
	<div class="u-container">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
