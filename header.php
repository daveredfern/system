<!DOCTYPE HTML>
<html <?php language_attributes(); ?> <?php body_class(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
	<title>
		<?php
		   if (is_archive() && !is_front_page()) {  wp_title(''); echo (' - '); bloginfo('name'); }
		   elseif (is_search()) { echo 'Search results for "'.wp_specialchars($s).'"'; echo (' - '); bloginfo('name'); }
		   elseif ( is_front_page() ) { bloginfo('description'); echo (' - '); bloginfo('name'); }
		   elseif ( !(is_404()) && (is_single()) || (is_page())) { the_title(); echo (' - '); bloginfo('name'); }
		   elseif (is_404()) { echo 'Error 404'; }
		   if (is_home()) { echo ('Articles - '); bloginfo('name'); }
		   if ($paged>1) { echo ' - pàgina '. $paged; }
		?>
	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

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
	</style>

	<?php wp_head(); ?>

</head>
<body>

    <header class="u-section">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="logo-icon"></i><span> <?php bloginfo( 'name' ); ?></span></a>
        </div>

        <nav class="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'u-list-inline', 'container' => '', 'menu_id' => '' ) ); ?>
        </nav>
    </header>
