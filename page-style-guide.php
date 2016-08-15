<?php
/*
Template Name: Style Guide
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="u-container u-section">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
    </div>

    <div class="u-container u-section">
        <h1>H1 heading style</h1>
        <h2>H2 heading style</h2>
        <h3>H3 heading style</h3>
        <h4>H4 heading style</h4>
        <h5>H5 heading style</h5>
        <h6>H6 heading style</h6>
    </div>

    <div class="u-container u-section">
        <p class="h1">H1 Class style</p>
        <p class="h2">H2 Class style</p>
        <p class="h3">H3 Class style</p>
        <p class="h4">H4 Class style</p>
        <p class="h5">H5 Class style</p>
        <p class="h6">H6 Class style</p>
    </div>

    <div class="u-container u-section">
        <p>Pellentesque quis nisl eu velit faucibus lacinia id at magna. Fusce ac vehicula ligula, eu convallis enim. Nullam ac libero vitae lacus blandit lacinia non et nunc. Morbi aliquet cursus felis sed sollicitudin. Donec at dictum lectus, quis vehicula leo. Etiam consectetur vestibulum dui non pulvinar. Sed fermentum lorem metus, quis ullamcorper diam pellentesque ac. Sed sollicitudin velit velit, non vestibulum erat finibus a. Integer convallis in justo in rutrum. Nunc pellentesque massa ultricies egestas commodo. Pellentesque nec eros efficitur, consectetur diam in, molestie odio.</p>
    </div>

    <div class="u-container u-section">
        <ul>
            <li>Pellentesque quis nisl eu velit faucibus lacinia id at magna.</li>
            <li>Fusce ac vehicula ligula, eu convallis enim.</li>
            <li>Nullam ac libero vitae lacus blandit lacinia non et nunc.</li>
            <li>Morbi aliquet cursus felis sed sollicitudin.</li>
            <li>Donec at dictum lectus, quis vehicula leo.</li>
        </ul>
    </div>
        
    <div class="u-container u-section">
        <ol>
            <li>Etiam consectetur vestibulum dui non pulvinar.</li>
            <li>Sed fermentum lorem metus, quis ullamcorper diam pellentesque ac.</li>
            <li>Sed sollicitudin velit velit, non vestibulum erat finibus a.</li>
            <li>Integer convallis in justo in rutrum.</li>
            <li>Nunc pellentesque massa ultricies egestas commodo.</li>
        </ol>
    </div>

    <div class="u-container u-section">
        <blockquote>
            <p>Nullam sagittis nisi ut justo luctus mattis. Nam vestibulum purus dignissim nibh tristique faucibus. Morbi interdum fermentum tellus, a varius nunc ullamcorper in. Praesent facilisis eget libero at porttitor. Curabitur arcu diam, lacinia sit amet felis non, suscipit facilisis lacus. Quisque convallis massa massa, id bibendum lectus consequat sed.</p>
        </blockquote>
    </div>
<?php endwhile; else : ?>
	<div class="u-container">
		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
