<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php
        if ( is_single() ) {
			single_post_title(); echo ' | '; bloginfo('name');
		} elseif ( is_home() || is_front_page() ) {
			bloginfo('name'); echo ' | '; bloginfo('description'); twentyten_the_page_number();
		} elseif ( is_page() ) {
			single_post_title(''); echo ' | '; bloginfo('name');
		} elseif ( is_search() ) {
			printf(__('Search results for "%s"', 'twentyten'), esc_html($s)); twentyten_the_page_number(); echo ' | '; bloginfo('name'); 
		} elseif ( is_404() ) {
			_e('Not Found', 'twentyten'); echo ' | '; bloginfo('name');
		} else {
			wp_title(''); echo ' | '; bloginfo('name'); twentyten_the_page_number();
		}
    ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="container" class="hfeed">
		<div id="header">
			<h1><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- #header -->
		<div id="notice">
			<p>Show your support by <a href="#">voting for NeoTokyo in the Mod DB Top 100</a>.</p>
		</div>

		<div id="navigation">
			<?php wp_nav_menu( 'sort_column=menu_order' ); ?>
			<div class="clearer">&nbsp;</div>
		</div><!-- #navigation -->

		<div id="content">