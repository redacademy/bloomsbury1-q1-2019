<?php
/**
 * The header for our theme.
 *
 * @package Bloomsbury_Theme
 */

?>
<!DOCTYPE html>
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
		<a class="skip-link screen-reader-text" href="#content">
			<?php echo esc_html( 'Skip to content' ); ?></a>

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

<!-- If user is logged in show the profile pic and profile info -->

<?php if ( is_user_logged_in() ) { ?>
		<div class="profile-container"></div>
		<div class="profile-pic"></div>

		<div class="personal-info">
			<p>Fullname</p>
			<p>Job Title</p>
		</div>

<!-- Menu for the slidebar and sub-section for the Member's area -->
						<div class="slidebar-menu">
					<a href="#"><li><i class="fas fa-home"></i>&nbsp; Home</li></a>
				<hr>
					<a href="#"><li><i class="fas fa-book-open"></i>&nbsp; About</li></a>
				<hr>
					<a href="#"><li><i class="fas fa-graduation-cap"></i>&nbsp; Courses</li></a>
				<hr>
					<a href="#"><li><i class="far fa-calendar-check"></i>&nbsp; Events</li></a>
				<hr>
					<a href="#"><li><i class="fas fa-blog"></i>&nbsp; Blog</li></a>
				<hr>
					<a href="#"><li><i class="fas fa-key"></i>&nbsp; Members' Area</li></a>
				<hr>

				<div class="member-area-subsection">
						<a href="#"><li>Dashboard</li></a>
						<a href="#"><li>Profile</li></a>
						<a href="#"><li>Lean Canvas</li></a>
						<a href="#"><li>Community</li></a>
						<a href="#"><li>Calendar</li></a>
						<a href="#"><li>Resources</li></a>
					</div>

						<a href="#"><li><i class="far fa-handshake"></i></i>&nbsp; Support Us</li></a>
					<hr>
						<a href="#"><li><i class="fas fa-phone-volume"></i>&nbsp; Contact Us</li></a>
					<hr>
						<a href="#"><li><i class="fas fa-paste"></i></i>&nbsp; Terms and Conditions Privacy</li></a>
					<hr>
						<a href="#"><li><i class="fas fa-sign-out-alt"></i>&nbsp; Log Out</li></a>
					<hr>
				</div>
		</div>
	</div>
<?php } else { ?>
	<div class="slidebar-menu">
				<a href="#"><li><i class="fas fa-home"></i>&nbsp; Home</li></a>
				<hr>
				<a href="#"><li><i class="fas fa-book-open"></i>&nbsp; About</li></a>
				<hr>
				<a href="#"><li><i class="fas fa-graduation-cap"></i>&nbsp; Courses</li></a>
				<hr>
				<a href="#"><li><i class="far fa-calendar-check"></i>&nbsp; Events</li></a>
				<hr>
				<a href="#"><li><i class="fas fa-blog"></i>&nbsp; Blog</li></a>
				<hr>
				<a href="#"><li><i class="far fa-handshake"></i></i>&nbsp; Support Us</li></a>
				<hr>
				<a href="#"><li><i class="fas fa-phone-volume"></i>&nbsp; Contact Us</li></a>
				<hr>
				<a href="#"><li><i class="fas fa-paste"></i></i>&nbsp; Terms and Conditions Privacy</li></a>
				<hr>
	</div>
<?php } ?>

<!-- Bloomsbury Beginnings logo -->
	<img class="bb-logo" src="<?php echo get_stylesheet_directory_uri() . "/bb-logo.png"; ?>">

<!-- Login button in the navbar -->

<?php if ( is_user_logged_in() ) { ?>

	<div class="search-bar">
	<input type="text" placeholder="Search.." id='search-text-input' />
	</div>

<?php } else { ?>
	<div class="login-member-area">
		<button class="login-button">Login</button>
	</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
