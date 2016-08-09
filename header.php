<!DOCTYPE HTML>
<html <?php language_attributes(); ?> <?php body_class(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/build/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/build/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/build/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/build/img/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/build/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<style>
		<?php echo file_get_contents(get_template_directory() . '/build/css/styles.css'); ?>
		<?php
			if( is_front_page() ) {
				echo file_get_contents(get_template_directory() . '/build/css/home.css');
			}
		?>
		<?php
			if( is_post_type_archive('photography') || is_singular('photography') ) {
				echo file_get_contents(get_template_directory() . '/build/css/photography.css');
			}
		?>
		<?php
			if( is_post_type_archive('projects') || is_singular('projects') ) {
				echo file_get_contents(get_template_directory() . '/build/css/projects.css');
			}
		?>
	</style>

	<?php wp_head(); ?>

</head>
<body>

    <header class="u-section">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="no-style"><i class="logo-icon"></i><span> <?php bloginfo( 'name' ); ?></span></a>
        </div>

        <nav class="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'u-list-inline', 'container' => '', 'menu_id' => '' ) ); ?>
        </nav>
    </header>
