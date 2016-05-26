<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <div class="u-container">
        <?php
		    the_archive_title( '<h1>', '</h1>' );
		    the_archive_description();
	    ?>
        <ul class="u-list-space">
        <?php while ( have_posts() ) : the_post(); ?>
		    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        </ul>
    </div>
<?php else : ?>
	<div class="u-container">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
