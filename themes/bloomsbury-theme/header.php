<?php
/**
 * The header for our theme.
 *
 * @package Bloomsbury_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
				<!-- Hamburger menu and navigation bar -->
					<div class="collapse-menu">
						<div id="menuToggle">

							<input type="checkbox" />

							<span></span>
							<span></span>
							<span></span>

							<ul id="menu">
								<a href="#"><li>Home</li></a>
								<a href="#"><li>About</li></a>
								<a href="#"><li>Courses</li></a>
								<a href="#"><li>Events</li></a>
								<a href="#"><li>Parents' Area</li></a>
								<a href="#"><li>Members' Area</li></a>
								<a href="#"><li>Support Us</li></a>
								<a href="#"><li>Contact Us</li></a>
								<a href="#"><li>Log Out</li></a>
							</ul>
  						</div>
					</div>

				<!-- Bloomsbury Beginnings logo -->
				<img class="bb-logo" src="<?php echo get_stylesheet_directory_uri() . "/bb-logo.png"; ?>">

				<div class="login-member-area">
					<p>Login</p>
				</div>


				</div><!-- .site-branding -->
				</header>

			<div id="content" class="site-content">
