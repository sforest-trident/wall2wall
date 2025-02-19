<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trident-web
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
</script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'trident-web' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="inner">
			<!-- Header > Logo -->
			<div class="header__logo site-title site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/w2w-logo.png" /></a></div>

			<nav id="site-navigation" class="header__nav main-navigation">
				<button class="menu-toggle " aria-controls="primary-menu" aria-expanded="false"><i class="nav-icon icon__hamburger"></i></button>
				<?php
				wp_nav_menu(array('theme_location' => 'primary'));
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .inner-wrapper -->
	</header><!-- #masthead -->
