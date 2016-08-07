<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <div class="u-section u-container u-container--lg">
        <h1>Writing</h1>
        <?php
            $args = array (
                'showposts' => -1
            );
            query_posts( $args );
        ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php
            // Logic to display year once
            if (isset($curYear)) {
                if ($curYear > get_the_time('Y')) :
                    echo '</ul><h2>' . get_the_time('Y') . '</h2><ul class="u-list-unstyled">';
              endif;
            } else {
                echo '<h2>' . get_the_time('Y') . '</h2><ul class="u-list-unstyled">';
            }
            $curYear = get_the_time('Y');
          ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> &mdash; <?php the_time('M j'); ?></li>
      <?php endwhile; wp_reset_query(); ?>
          </ul>
    </div>
<?php else : ?>
	<div class="u-container">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
