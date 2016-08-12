<?php
/*
Template Name: Newsletter
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="u-container u-section">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
        <form action="https://tinyletter.com/daveredfern" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/daveredfern', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">
            <label for="tlemail">Enter your email address</label>
            <input type="hidden" value="1" name="embed"/>
            <div class="flag">
                <input type="text" name="email" id="tlemail" />
                <button class="btn"type="submit" value="Subscribe">Subscribe</button>
            </div>
        </form>
        <p class="micro">I respect your inbox. No spam. Unsubscribe with just a click.</p>
	</div>
<?php endwhile; else : ?>
	<div class="u-container u-section">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
