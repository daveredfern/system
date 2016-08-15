<?php
/*
Template Name: Projects
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="u-container u-section">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
    </div>

    <div class="u-section grid g-gutter g-flex">
        <?php
            $args = array(
				'post_type' => 'projects'
            );
			$projects = new WP_Query( $args );
			if ( $projects->have_posts() ) : while ( $projects->have_posts() ) : $projects->the_post(); ?>
	        	<div>
					<a href="<?php the_permalink(); ?>" class="color-box no-style u-clearfix" style="background-color: <?php echo get_field('color'); ?>">
						<div class="color-box__body u-section u-center">
							<div class="title">
								<h3><?php the_title(); ?></h3>
								<p><?php echo get_field('tagline'); ?></p>
							</div>
						</div>
					</a>
				</div>
	        <?php
			endwhile; endif;
	        wp_reset_query();
	    ?>
    </div>

<?php endwhile; else : ?>
	<div class="u-container">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
