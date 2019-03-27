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
						<span class="hamburger-reverse"></span>

						<ul id="menu">

<!-- If user is logged in show the profile pic and profile info -->
			<?php global $current_user; wp_get_current_user(); ?>
						<?php if ( is_user_logged_in() ) { ?>

								<div class="profile-container">
								<div class="profile-pic"><?php echo get_avatar("4") ?></div>
								<div class="personal-info">
									<?php 
									echo $current_user->display_name; 
									?>
									<p>
									<?php 
										echo $current_user->user_job_title;
									?></p>
								</div>

<!-- Menu for the slidebar and sub-section for the Member's area -->
								<div class="slidebar-menu">
									<li class="menu-nav-item">
										<i class="fas fa-home"></i>
										<div class="menu-nav-text">
											<a href="#">
												Home
											</a>
										</div>
									</li>
									<li class="menu-nav-item">
										<i class="fas fa-book-open"></i>
										<div class="menu-nav-text">
											<a href="#">
												About
											</a>
										</div>
									</li>
									<li class="menu-nav-item">
										<i class="fas fa-graduation-cap"></i>
										<div class="menu-nav-text">
											<a href="#">
												Courses
											</a>
										</div>
									</li>
									<li class="menu-nav-item">
										<i class="far fa-calendar-check"></i>
										<div class="menu-nav-text">
											<a href="#">
												Events
											</a>
										</div>
									</li>
									<li class="menu-nav-item">
										<i class="fas fa-blog"></i>
										<div class="menu-nav-text">
											<a href="#">
												Blog
											</a>
										</div>
									</li>
									<li class="menu-nav-item">
										<i class="fas fa-key"></i>
										<div class="menu-nav-text">
											<a href="#">
												Members' Area
											</a>
										</div>
									</li>

									<div class="member-area-subsection">
										<li>
											<a href="#">Dashboard</a>	
										</li>
										<li>
											<a href="#">Profile</a>
										</li>
										<li>
											<a href="#">Lean Canvas</a>
										</li>
										<li>
											<a href="#">Community</a>
										</li>
										<li>
											<a href="#">Calendar</a>
										</li>
										<li>
											<a href="#">Resources</a>
										</li>
									</div>

									<li>
										<i class="far fa-handshake"></i>
										<div class="menu-nav-text">
											<a href="#">&nbsp; Support Us
											</a>
										</div>
									</li>
									<li>
										<i class="fas fa-phone-volume"></i>
										<div class="menu-nav-text">
											<a href="#">
												&nbsp; Contact Us
											</a>
										</div>
									</li>
									<li>
										<i class="fas fa-paste"></i>
										<div class="menu-nav-text">
											<a href="#">
												&nbsp; Terms and Conditions Privacy
											</a>
										</div>
									</li>
									<li>
										<i class="fas fa-sign-out-alt"></i>
										<div class="menu-nav-text">
											<a href="#">
												&nbsp; Log Out
											</a>
										</div>
									</li>
								</div>
							</div>
						</ul>
					</div>
				</div>
					<?php } else { ?>
					<div class="slidebar-menu">

						<a href="#">
							<li>
								<i class="fas fa-home"></i>&nbsp; Home</li></a>
						<hr>
						<a href="#">
							<li>
								<i class="fas fa-book-open"></i>&nbsp; About</li></a>
						<hr>
						<a href="#">
							<li>
								<i class="fas fa-graduation-cap"></i>&nbsp; Courses</li></a>
						<hr>
						<a href="#">
							<li>
								<i class="far fa-calendar-check"></i>&nbsp; Events</li></a>
						<hr>
						<a href="#">
							<li>
								<i class="fas fa-blog"></i>&nbsp; Blog</li></a>
						<hr>
						<a href="#">
							<li>
								<i class="far fa-handshake"></i></i>&nbsp; Support Us</li></a>
						<hr>
						<a href="#">
							<li>
								<i class="fas fa-phone-volume"></i>&nbsp; Contact Us</li></a>
						<hr>
						<a href="#">
							<li>
								<i class="fas fa-paste"></i></i>&nbsp; Terms and Conditions Privacy</li></a>
						<hr>
					</div>

					<div class="login-member-area">
						<button class="login-button">Login</button>
					</div>
				<?php } ?>
			


				<!-- Bloomsbury Beginnings logo -->
					<img class="bb-logo" src="<?php echo get_stylesheet_directory_uri() . "/bb-logo.png"; ?>">

				<!-- Login button in the navbar -->
				<div class="nav-end-text">
					<p class="login-button">Log In</p>
				</div>

				
		</header><!-- #masthead -->