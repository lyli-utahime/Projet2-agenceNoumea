<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<meta name="google-site-verification" content="yoBxpzjIL57C1JLyaZcmVHfyDUmWKzmQO2nS48lkRLs" />
</head>

<body <?php body_class(); ?>>
	<?php
	global $wp_customize;
	$preloader_enabled = get_theme_mod( 'pixova_lite_preloader_enabled', 'preloader_enabled' );

	if ( ! isset( $wp_customize ) && 'preloader_enabled' == $preloader_enabled ) {
	?>

		

	<?php } ?>

	<div id="container" class="hfeed">

<?php

if ( 'posts' != get_option( 'show_on_front' ) && is_front_page() ) {
	get_template_part( 'sections/section', 'header' );
} elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
	get_template_part( 'sections/section', 'header-woocommerce' );
} elseif ( is_search() || is_archive() || is_home() || is_page_template( 'page-templates/blog-template.php' ) || is_front_page() ) {
	get_template_part( 'sections/section','header-archive' );
} elseif ( is_page() || is_author() || is_404() ) {
	get_template_part( 'sections/section', 'header-page' );
} elseif ( is_single() ) {
	get_template_part( 'sections/section','header-single' );
} else {
	get_template_part( 'sections/section', 'header' );
}

?>
