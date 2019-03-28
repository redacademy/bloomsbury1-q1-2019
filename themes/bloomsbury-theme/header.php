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
										<a href="<?php echo get_permalink( get_page_by_path( 'front-page' ) );?>">
											<div class="menu-nav-text">
												Home
											</div>
										</a>
									</li>
									<li class="menu-nav-item">
										<i class="fas fa-book-open"></i>
										<a href="<?php echo get_permalink( get_page_by_path( 'about' ) );?>">
											<div class="menu-nav-text">
												About
											</div>
										</a>
									</li>

									<!-- CUSTOM POST TYPES MAY NEED TO CHANGE -->
									<li class="menu-nav-item">
										<i class="fas fa-graduation-cap"></i>
										<a href="<?php echo get_post_type_archive_link( 'courses' ); ?>">
											<div class="menu-nav-text">
												Courses
											</div>
										</a>
									</li>
									<li class="menu-nav-item">
										<i class="far fa-calendar-check"></i>
										<a href="<?php echo get_post_type_archive_link( 'events' ); ?>">
											<div class="menu-nav-text">
												Events
											</div>
										</a>
									</li>
									<li class="menu-nav-item">
										<i class="fas fa-blog"></i>
										<a href="<?php echo get_permalink( get_page_by_path( 'blog' ) );?>">
											<div class="menu-nav-text">
												Blog
											</div>
										</a>
									</li>

									<!-- ADD DROP DOWN ARROW TO SHOW MEMBERS AREA SUBSECTION -->
									<li class="menu-nav-item">
										<i class="fas fa-key"></i>
										<a href="#">
											<div class="menu-nav-text">
												Members' Area
											</div>
										</a>
									</li>

									<div class="member-area-subsection">
										<li>
											<a href="<?php echo get_permalink( get_page_by_path( 'my-account' ) );?>">Dashboard</a>	
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
										<a href="<?php echo get_permalink( get_page_by_path( 'support-us' ) );?>">
											<div class="menu-nav-text">
												Support Us
											</div>
										</a>
									</li>
									<li>
										<i class="fas fa-phone-volume"></i>
										<a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) );?>">
											<div class="menu-nav-text">
												Contact Us
											</div>
										</a>
									</li>
									<li>
										<i class="fas fa-paste"></i>
										<a href="<?php echo get_permalink( get_page_by_path( 'terms-and-conditions' ) );?>">
											<div class="menu-nav-text">
												Terms and Conditions Privacy
											</div>
										</a>
									</li>
									<li>
										<i class="fas fa-sign-out-alt"></i>
										<a href="#">
											<div class="menu-nav-text">
												Log Out
											</div>
										</a>
									</li>
								</div>
							</ul>
						</div>
					</div>

					<!-- Bloomsbury Beginnings logo -->
					<img class="bb-logo" src="<?php echo get_stylesheet_directory_uri() . "/bb-logo.png"; ?>">

					<!-- Login button in the navbar -->
					<div class="nav-end-text">
						<a class="login-button" href="<?php echo get_permalink( get_page_by_path( 'log-in' ) );?>">Log Out</a>
					</div>

					<!-- Displaying Logged Out Version of Navbar -->
					<?php } else { ?>

					<div class="menu-visitor">
						<li class="menu-nav-item">
							<i class="fas fa-home"></i>
							<a href="<?php echo get_permalink( get_page_by_path( 'front-page' ) );?>">
								<div class="menu-nav-text">
									Home
								</div>
							</a>
						</li>
						<li class="menu-nav-item">
							<i class="fas fa-book-open"></i>
							<a href="<?php echo get_permalink( get_page_by_path( 'about' ) );?>">
								<div class="menu-nav-text">
									About
								</div>
							</a>
						</li>

						<!-- CUSTOM POST TYPES MAY NEED TO CHANGE -->
						<li class="menu-nav-item">
							<i class="fas fa-graduation-cap"></i>
							 <a href="<?php echo get_post_type_archive_link( 'courses' ); ?>">
								<div class="menu-nav-text">
									Courses
								</div>
							</a>
						</li>
						<li class="menu-nav-item">
							<i class="far fa-calendar-check"></i>
							 <a href="<?php echo get_post_type_archive_link( 'events' ); ?>">
								<div class="menu-nav-text">
									Events
								</div>
							</a>
						</li>
						<li class="menu-nav-item">
							<i class="fas fa-blog"></i>
							<a href="<?php echo get_permalink( get_page_by_path( 'blog' ) );?>">
								<div class="menu-nav-text">
									Blog
								</div>
							</a>
						</li>
						<li>
							<i class="far fa-handshake"></i>
							<a href="<?php echo get_permalink( get_page_by_path( 'support-us' ) );?>">
								<div class="menu-nav-text">
									Support Us
								</div>
							</a>
						</li>
						<li>
							<i class="fas fa-phone-volume"></i>
							<a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) );?>">
								<div class="menu-nav-text">
									Contact Us
								</div>
							</a>
						</li>
						<li>
							<i class="fas fa-paste"></i>
							<a href="<?php echo get_permalink( get_page_by_path( 'terms-and-conditions' ) );?>">
								<div class="menu-nav-text">
									Terms and Conditions Privacy
								</div>
							</a>
						</li>
					</div>
				</ul>
			</div>
		</div>

		<!-- Bloomsbury Beginnings logo -->
		<img class="bb-logo" src="<?php echo get_stylesheet_directory_uri() . "/bb-logo.png"; ?>">

		<!-- Login button in the navbar -->
		<div class="nav-end-text">
			<a class="login-button" href="<?php echo get_permalink( get_page_by_path( 'log-in' ) );?>">Log In</a>
		</div>
				<?php } ?>
			


				
		</header><!-- #masthead -->