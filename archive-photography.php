<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <div class="u-container u-section">
        <h1><?php post_type_archive_title(); ?></h1>
        <p>All my photos are free to use, released under the <a href="https://creativecommons.org/publicdomain/zero/1.0/">Creative Commons Zero license</a>. If you use a photo I'd love to know! My <a href="/contact">contact info is here</a>.</p>
    </div>
    <div class="g-two-up g-center">
        <?php while ( have_posts() ) : the_post(); ?>
            <div>
                <?php
            		$image_id = get_post_thumbnail_id();
            		$image = wp_get_attachment_image_src( $image_id, 'full' );

                    $width = $image[1];
            		$height = $image[2];
                    $ratio = ($height/$width)*100;

                    $color = get_post_meta(get_post_thumbnail_id(), 'dominant_color_hex');
            	?>
                <?php if($height > $width) : ?>
                    <div class="u-portait">
                <?php endif; ?>
                    <div class="u-ratio" style="padding-top: <?php echo $ratio; ?>%;<?php if($color) { echo ' background-color:' . $color[0] . ';'; } ?>">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img class="u-full"
                                     src="<?php the_post_thumbnail_url('photography-xs'); ?>"
                                     srcset="<?php the_post_thumbnail_url('photography-md'); ?> 800w,
                                             <?php the_post_thumbnail_url('photography-sm'); ?> 600w,
                                             <?php the_post_thumbnail_url('photography-xs'); ?> 400w"
                                     sizes="(min-width: 35em) 41vw, 100vw"
                                     alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                        </a>
                    </div>
                <?php if($height > $width) : ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php else : ?>
	<div class="u-container">
        <h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
