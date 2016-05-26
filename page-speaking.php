<?php

/*
Template Name: Speaking
*/

?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="u-container u-section">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
	<div class="u-container u-section">
		<?php
            $args = array(
				'post_type' => 'speaking',
                'posts_per_page' => -1,
				'meta_key' => 'date',
				'orderby' => 'meta_value_num',
				'order' => 'DESC'
            );
			$pasteventTitle = 0;
			$upcomingTitle = 0;
	        $pastevents = new WP_Query( $args );
			if ( $pastevents->have_posts() ) : while ( $pastevents->have_posts() ) : $pastevents->the_post(); ?>
				<?php
					$talk = get_field('talk');
					$date = get_field('date');

					if($date > date('Ymd') && $pasteventTitle === 0) :
						echo '<h2>Upcoming events</h2>';
						$upcomingTitle = 1;
					endif;

					if($date < date('Ymd') && $pasteventTitle === 0) :
						if($upcomingTitle === 0) :
							echo '<h2>Upcoming events</h2><p>No upcoming events.</p>';
							echo '</div><div class="g-two-up"><div><h2>Past events</h2>';
						endif;
						$pasteventTitle = 1;
					endif;
				?>
	        	<p><strong><?php the_title(); ?></strong><br />
					<?php echo $talk->post_title; ?>
				</p>
	        <?php
			endwhile; endif;
	        wp_reset_query();
	    ?>
		</div>
		<div>
			<h2>Talks</h2>
			<ul class="u-list-space">
			<?php
				$args = array(
					'post_type' => 'talk',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC'
				);
				$talks = new WP_Query( $args );
				if ( $talks->have_posts() ) : while ( $talks->have_posts() ) : $talks->the_post(); ?>
					<li><?php the_title(); ?></li>
				<?php
				endwhile; endif;
				wp_reset_query();
			?>
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
